<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewMethodInterface;

class RelationAddNote implements PerfectviewMethodInterface
{

    /**
     * @var ApiCredentials
     */
    protected $credentials = null;

    /**
     * @var guid
     */
    protected $relationId = null;

    /**
     * @var string
     */
    protected $text = null;

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
     * @param guid $relationId
     * @return $this
     */
    public function setRelationId($relationId)
    {
        $this->relationId = $relationId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getRelationId()
    {
        return $this->relationId;
    }

    /**
     * @param string $text
     * @return $this
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }


}

