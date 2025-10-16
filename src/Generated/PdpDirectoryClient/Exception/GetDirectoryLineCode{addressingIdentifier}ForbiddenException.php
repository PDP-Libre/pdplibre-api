<?php

namespace PdpLibre\Generated\PdpFPdpDirectoryClient\Exception;

class GetDirectoryLineCode{addressingIdentifier}ForbiddenException extends ForbiddenException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Forbidden. The server understood the request but denied access or access is not authorized.');
        $this->response = $response;
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}