<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewMethodInterface;

class AttachmentGetGoogleDocsUrl implements PerfectviewMethodInterface
{

    /**
     * @var ApiCredentials
     */
    protected $credentials = null;

    /**
     * @var guid
     */
    protected $attachmentId = null;

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
     * @param guid $attachmentId
     * @return $this
     */
    public function setAttachmentId($attachmentId)
    {
        $this->attachmentId = $attachmentId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getAttachmentId()
    {
        return $this->attachmentId;
    }


}

