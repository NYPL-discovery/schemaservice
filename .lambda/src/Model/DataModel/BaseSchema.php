<?php
namespace NYPL\Services\Model\DataModel;

use NYPL\Services\Model\DataModel;
use NYPL\Starter\Model\ModelTrait\TranslateTrait;

/**
 * @SWG\Definition(title="Schema", type="object", required={"id"})
 */
abstract class BaseSchema extends DataModel
{
    use TranslateTrait;

    /**
     * @SWG\Property(example="Bib")
     * @var string
     */
    public $stream = '';

    /**
     * @SWG\Property
     * @var string
     */
    public $schema;

    /**
     * @return string
     */
    public function getSchema()
    {
        return $this->schema;
    }

    /**
     * @param string $schema
     */
    public function setSchema($schema)
    {
        $this->schema = $schema;
    }

    /**
     * @return string
     */
    public function getStream()
    {
        return $this->stream;
    }

    /**
     * @param string $stream
     */
    public function setStream($stream)
    {
        $this->stream = $stream;
    }
}
