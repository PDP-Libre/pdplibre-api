<?php

namespace App\Generated\PdpFlowClient\Exception;

class GetHealthInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \App\Generated\PdpFlowClient\Model\Error
     */
    private $error;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\App\Generated\PdpFlowClient\Model\Error $error, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Error 500 : Server Internal Error.');
        $this->error = $error;
        $this->response = $response;
    }
    public function getError(): \App\Generated\PdpFlowClient\Model\Error
    {
        return $this->error;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}