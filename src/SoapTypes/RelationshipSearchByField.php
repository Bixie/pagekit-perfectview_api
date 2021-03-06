<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewMethodInterface;

class RelationshipSearchByField implements PerfectviewMethodInterface
{

    /**
     * @var ApiCredentials
     */
    protected $credentials = null;

    /**
     * @var guid
     */
    protected $relationshipEntityTypeId = null;

    /**
     * @var ArrayOfPvFieldValueData
     */
    protected $fieldValues = null;

    /**
     * @var int
     */
    protected $pageNumber = null;

    /**
     * @var int
     */
    protected $pageSize = null;

    /**
     * @var bool
     */
    protected $includeFields = null;

    /**
     * @param ApiCredentials $credentials
     * @return $this
     */
    public function setCredentials($credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return ApiCredentials
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    /**
     * @param guid $relationshipEntityTypeId
     * @return $this
     */
    public function setRelationshipEntityTypeId($relationshipEntityTypeId)
    {
        $this->relationshipEntityTypeId = $relationshipEntityTypeId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getRelationshipEntityTypeId()
    {
        return $this->relationshipEntityTypeId;
    }

    /**
     * @param ArrayOfPvFieldValueData $fieldValues
     * @return $this
     */
    public function setFieldValues($fieldValues)
    {
        $this->fieldValues = $fieldValues;
        return $this;
    }

    /**
     * @return ArrayOfPvFieldValueData
     */
    public function getFieldValues()
    {
        return $this->fieldValues;
    }

    /**
     * @param int $pageNumber
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        $this->pageNumber = $pageNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getPageNumber()
    {
        return $this->pageNumber;
    }

    /**
     * @param int $pageSize
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * @return int
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * @param bool $includeFields
     * @return $this
     */
    public function setIncludeFields($includeFields)
    {
        $this->includeFields = $includeFields;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIncludeFields()
    {
        return $this->includeFields;
    }


}

