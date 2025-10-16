<?php

namespace PdpLibre\Generated\PdpFPdpDirectoryClient\Exception;

class PatchDirectoryLineIdInstance{idInstance}UnauthorizedException extends UnauthorizedException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Unauthorized. The request requires user authentication.');
        $this->response = $response;
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}