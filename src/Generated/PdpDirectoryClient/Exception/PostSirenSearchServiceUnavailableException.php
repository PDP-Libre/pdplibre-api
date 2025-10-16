<?php

namespace App\Generated\PdpDirectoryClient\Exception;

class PostSirenSearchServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Service unavailable.');
        $this->response = $response;
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}