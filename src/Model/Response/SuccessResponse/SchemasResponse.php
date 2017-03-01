<?php
namespace NYPL\Services\Model\Response\SuccessResponse;

use NYPL\Services\Model\DataModel\BaseSchema\Schema;
use NYPL\Starter\Model\Response\SuccessResponse;

/**
 * @SWG\Definition(title="SchemasResponse", type="object")
 */
class SchemasResponse extends SuccessResponse
{
    /**
     * @SWG\Property
     * @var Schema[]
     */
    public $data;
}
