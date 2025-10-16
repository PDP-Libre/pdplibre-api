<?php

namespace App\Generated\PdpDirectoryClient\Exception;

class GetRoutingCodeIdInstance{idInstance}NotImplementedException extends NotImplementedException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Not implemented.');
        $this->response = $response;
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}