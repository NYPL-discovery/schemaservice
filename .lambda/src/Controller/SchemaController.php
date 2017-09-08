<?php
namespace NYPL\Services\Controller;

use NYPL\Starter\Config;
use NYPL\Services\Model\DataModel\BaseSchema\Schema;
use NYPL\Services\Model\Response\SuccessResponse\SchemasResponse;
use NYPL\Starter\APIException;
use NYPL\Starter\AvroLoader;
use NYPL\Starter\Controller;
use NYPL\Services\Model\Response\SuccessResponse\SchemaResponse;
use NYPL\Starter\Filter;
use NYPL\Starter\Filter\OrFilter;
use NYPL\Starter\ModelSet;
use NYPL\Starter\OrderBy;

final class SchemaController extends Controller
{
    /**
     * @param string $stream
     * @param int $lastOffset
     *
     * @return bool
     */
    protected function updateExistingSchema($stream = '', $lastOffset = 0)
    {
        $lastSchema = new Schema();

        $lastSchema->addFilter(new Filter('stream', $stream));
        $lastSchema->addFilter(new Filter('offsetEnd', 0));

        if ($lastSchema->read(true)) {
            $lastSchema->setFilters($lastSchema->getIdFilters());

            $lastSchema->update(['offsetEnd' => $lastOffset]);

            return true;
        }

        return false;
    }

    /**
     * @param string $schema
     *
     * @return bool
     * @throws APIException
     */
    protected function checkSchema($schema = '')
    {
        if (is_array($schema)) {
            throw new APIException('Schema provided must be a valid string');
        }

        try {
            if (\AvroSchema::parse($schema)) {
                return true;
            }
        } catch (\Exception $exception) {
            throw new APIException('Unable to parse schema:' . $exception->getMessage());
        }
    }

    /**
     * @param string $stream
     * @param string $newSchemaString
     *
     * @return Schema|string
     * @throws APIException
     */
    public function addSchema($stream = '', $newSchemaString = '')
    {
        if (!$stream) {
            throw new APIException('Stream was not specified');
        }

        if (!$newSchemaString) {
            throw new APIException('Schema was not specified');
        }

        AvroLoader::load();
        $this->checkSchema($newSchemaString);

        $schema = new Schema();

        $schema->addFilter(new Filter('stream', $stream));

        if ($schema->read(true)) {
            $schema = new Schema();

            $schema->addFilter(new Filter(
                'stream',
                $stream
            ));

            $schema->update(['schema' => $newSchemaString]);

            return $schema;
        }

        $schema = new Schema();

        $schema->setRawData(['body' => $newSchemaString]);

        $schema->setStream($stream);
        $schema->setSchema($newSchemaString);

        $schema->create();

        return $schema;
    }

    /**
     * @SWG\Post(
     *     path="/v0.1/schemas/{streamName}",
     *     summary="Create a new Schema",
     *     tags={"schemas"},
     *     operationId="createSchema",
     *     consumes={"text/plain"},
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         description="Name of Stream",
     *         in="path",
     *         name="streamName",
     *         required=true,
     *         type="string",
     *         format="string"
     *     ),
     *     @SWG\Parameter(
     *         name="schema",
     *         in="body",
     *         description="",
     *         required=true,
     *         @SWG\Schema(ref="#/definitions/PostSchema")
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="Successful operation",
     *         @SWG\Schema(ref="#/definitions/SchemaResponse")
     *     ),
     *     @SWG\Response(
     *         response="500",
     *         description="Generic server error",
     *         @SWG\Schema(ref="#/definitions/ErrorResponse")
     *     ),
     *     security={
     *         {
     *             "api_auth": {"openid offline_access api"}
     *         }
     *     }
     * )
     */
    public function createSchema($streamName = '')
    {
        return $this->getResponse()->withJson(
            new SchemaResponse(
                $this->addSchema(
                    $streamName,
                    (string) $this->getRequest()->getBody()
                )
            )
        );
    }

    /**
     * @SWG\Get(
     *     path="/v0.1/schemas",
     *     summary="Get a list of Schemas",
     *     tags={"schemas"},
     *     operationId="getSchemas",
     *     consumes={"application/json"},
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="streamName",
     *         in="query",
     *         required=false,
     *         type="string"
     *     ),
     *     @SWG\Parameter(
     *         name="fromOffset",
     *         in="query",
     *         required=false,
     *         type="integer"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="Successful operation",
     *         @SWG\Schema(
     *             type="array",
     *             @SWG\Items(ref="#/definitions/SchemasResponse")
     *         ),
     *     ),
     *     @SWG\Response(
     *         response="404",
     *         description="Not found",
     *         @SWG\Schema(ref="#/definitions/ErrorResponse")
     *     ),
     *     @SWG\Response(
     *         response="500",
     *         description="Generic server error",
     *         @SWG\Schema(ref="#/definitions/ErrorResponse")
     *     )
     * )
     */
    public function getSchemas()
    {
        $schemaSet = new ModelSet(new Schema(), true);

        if ($stream = $this->getRequest()->getQueryParam('stream')) {
            $schemaSet->addFilter(new Filter('stream', $stream));
        }

        if ($fromOffset = $this->getRequest()->getQueryParam('fromOffset')) {
            $schemaSet->addFilter(new Filter('offsetBegin', (int) $fromOffset, false, '', '<='));

            $schemaSet->addFilter(new OrFilter([
                new Filter('offsetEnd', 0),
                new Filter('offsetEnd', (int) $fromOffset, false, '', '>=')
            ]));
        }

        $schemaSet->setOrderBy([
            new OrderBy('stream'),
            new OrderBy('offsetBegin'),
            new OrderBy('id')
        ]);

        return $this->getDefaultReadResponse(
            $schemaSet,
            new SchemasResponse()
        );
    }

    /**
     * @SWG\Get(
     *     path="/v0.1/schemas/{id}",
     *     summary="Get a Schema",
     *     tags={"schemas"},
     *     operationId="getSchema",
     *     consumes={"application/json"},
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         description="ID of Schema",
     *         in="path",
     *         name="id",
     *         required=true,
     *         type="integer",
     *         format="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="Successful operation",
     *         @SWG\Schema(ref="#/definitions/SchemaResponse")
     *     ),
     *     @SWG\Response(
     *         response="404",
     *         description="Not found",
     *         @SWG\Schema(ref="#/definitions/ErrorResponse")
     *     ),
     *     @SWG\Response(
     *         response="500",
     *         description="Generic server error",
     *         @SWG\Schema(ref="#/definitions/ErrorResponse")
     *     )
     * )
     */
    public function getSchema($id)
    {
        return $this->getDefaultReadResponse(
            new Schema(),
            new SchemaResponse(),
            new Filter(null, null, false, $id)
        );
    }

    /**
     * @SWG\Get(
     *     path="/v0.1/current-schemas",
     *     summary="Get a list of current Schemas",
     *     tags={"schemas"},
     *     operationId="getCurrentSchemas",
     *     consumes={"application/json"},
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="stream",
     *         in="query",
     *         required=false,
     *         type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="Successful operation",
     *         @SWG\Schema(
     *             type="array",
     *             @SWG\Items(ref="#/definitions/SchemasResponse")
     *         ),
     *     ),
     *     @SWG\Response(
     *         response="404",
     *         description="Not found",
     *         @SWG\Schema(ref="#/definitions/ErrorResponse")
     *     ),
     *     @SWG\Response(
     *         response="500",
     *         description="Generic server error",
     *         @SWG\Schema(ref="#/definitions/ErrorResponse")
     *     )
     * )
     */
    public function getCurrentSchemas()
    {
        $schemaSet = new ModelSet(new Schema(), true);

        if ($stream = $this->getRequest()->getQueryParam('stream')) {
            $schemaSet->addFilter(new Filter('stream', $stream));
        }

        $schemaSet->addFilter(new Filter('offsetEnd', 0));

        $schemaSet->setOrderBy([
            new OrderBy('stream')
        ]);

        return $this->getDefaultReadResponse(
            $schemaSet,
            new SchemasResponse()
        );
    }

    /**
     * @SWG\Get(
     *     path="/v0.1/current-schemas/{streamName}",
     *     summary="Get a current Schema",
     *     tags={"schemas"},
     *     operationId="getCurrentSchema",
     *     consumes={"application/json"},
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         description="Name of Stream",
     *         in="path",
     *         name="streamName",
     *         required=true,
     *         type="string",
     *         format="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="Successful operation",
     *         @SWG\Schema(ref="#/definitions/SchemaResponse")
     *     ),
     *     @SWG\Response(
     *         response="404",
     *         description="Not found",
     *         @SWG\Schema(ref="#/definitions/ErrorResponse")
     *     ),
     *     @SWG\Response(
     *         response="500",
     *         description="Generic server error",
     *         @SWG\Schema(ref="#/definitions/ErrorResponse")
     *     )
     * )
     */
    public function getCurrentSchema($streamName)
    {
        $schema = new Schema();

        $schema->addFilter(new Filter('stream', $streamName));
        $schema->addFilter(new Filter('offsetEnd', 0));

        return $this->getDefaultReadResponse(
            $schema,
            new SchemasResponse()
        );
    }
}
