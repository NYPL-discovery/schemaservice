<?php
namespace NYPL\Services\Model\DataModel\BaseSchema;

use NYPL\Services\Model\DataModel\BaseSchema;
use NYPL\Starter\Model\ModelInterface\MessageInterface;
use NYPL\Starter\Model\ModelInterface\ReadInterface;
use NYPL\Starter\Model\ModelTrait\DBCreateTrait;
use NYPL\Starter\Model\ModelTrait\DBReadTrait;
use NYPL\Starter\Model\ModelTrait\DBUpdateTrait;

/**
 * @SWG\Definition(title="Schema", type="object", required={"id"})
 */
class Schema extends BaseSchema implements MessageInterface, ReadInterface
{
    use DBCreateTrait, DBReadTrait, DBUpdateTrait;

    /**
     * @SWG\Property(example=1)
     * @var int
     */
    public $id;

    /**
     * @SWG\Property(example=0)
     * @var int
     */
    public $offsetBegin = 0;

    /**
     * @SWG\Property(example=123)
     * @var int
     */
    public $offsetEnd = 0;

    /**
     * @SWG\Property(type="object")
     * @var array
     */
    public $schemaObject = [];

    public function getSchema()
    {
        return
            [
                "name" => "Schema",
                "type" => "record",
                "fields" => [
                    ["name" => "id", "type" => "int"],
                    ["name" => "stream", "type" => "string"],
                    ["name" => "offsetBegin", "type" => "int"],
                    ["name" => "offsetEnd", "type" => "int"],
                    ["name" => "schema", "type" => "string"]
                ]
            ];
    }

    public function getIdFields()
    {
        return ["id", "schemaObject"];
    }

    public function getSequenceId()
    {
        return "schema_id_seq";
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = (int) $id;
    }

    /**
     * @return int
     */
    public function getOffsetBegin()
    {
        return $this->offsetBegin;
    }

    /**
     * @param int $offsetBegin
     */
    public function setOffsetBegin($offsetBegin)
    {
        $this->offsetBegin = (int) $offsetBegin;
    }

    /**
     * @return int
     */
    public function getOffsetEnd()
    {
        return $this->offsetEnd;
    }

    /**
     * @param int $offsetEnd
     */
    public function setOffsetEnd($offsetEnd)
    {
        $this->offsetEnd = (int) $offsetEnd;
    }

    /**
     * @return array
     */
    public function getSchemaObject()
    {
        return $this->schemaObject;
    }

    /**
     * @param array $schemaObject
     */
    public function setSchemaObject($schemaObject)
    {
        $this->schemaObject = $schemaObject;
    }

    public function setSchema($schema)
    {
        parent::setSchema($schema);

        if ($schema) {
            $this->setSchemaObject(json_decode($schema, true));
        }
    }
}
