<?php

namespace PdpLibre\Generated\PdpFPdpDirectoryClient\Exception;

class GetSirenCodeInseeBySirenTooManyRequestsException extends TooManyRequestsException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('The client has issued too many calls within a given time frame.');
        $this->response = $response;
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}