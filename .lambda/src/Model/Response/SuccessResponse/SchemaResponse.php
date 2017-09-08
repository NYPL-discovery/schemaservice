<?php
namespace NYPL\Services\Model\Response\SuccessResponse;

use NYPL\Services\Model\DataModel\BaseSchema\Schema;
use NYPL\Starter\Model\Response\SuccessResponse;

/**
 * @SWG\Definition(title="SchemaResponse", type="object")
 */
class SchemaResponse extends SuccessResponse
{
    /**
     * @SWG\Property
     * @var Schema
     */
    public $data;
}
