<?php

namespace App\Generated\PdpFlowClient\Model;

class Error extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Short numerical or alphanumerical code that identifies precisely a unique error.
     *
     * @var string
     */
    protected $errorCode;
    /**
     * Contains information on the error. Not intended to be displayed to an end user. For security reasons, a tradeof between clarity & security shall be found.
     *
     * @var string
     */
    protected $errorMessage;
    /**
     * Short numerical or alphanumerical code that identifies precisely a unique error.
     *
     * @return string
     */
    public function getErrorCode(): string
    {
        return $this->errorCode;
    }
    /**
     * Short numerical or alphanumerical code that identifies precisely a unique error.
     *
     * @param string $errorCode
     *
     * @return self
     */
    public function setErrorCode(string $errorCode): self
    {
        $this->initialized['errorCode'] = true;
        $this->errorCode = $errorCode;
        return $this;
    }
    /**
     * Contains information on the error. Not intended to be displayed to an end user. For security reasons, a tradeof between clarity & security shall be found.
     *
     * @return string
     */
    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }
    /**
     * Contains information on the error. Not intended to be displayed to an end user. For security reasons, a tradeof between clarity & security shall be found.
     *
     * @param string $errorMessage
     *
     * @return self
     */
    public function setErrorMessage(string $errorMessage): self
    {
        $this->initialized['errorMessage'] = true;
        $this->errorMessage = $errorMessage;
        return $this;
    }
}