<?php

namespace App\Generated\PdpDirectoryClient\Exception;

class GetDirectoryLineIdInstance{idInstance}RequestTimeoutException extends RequestTimeoutException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Request timeout exceeded.');
        $this->response = $response;
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}