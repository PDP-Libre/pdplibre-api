<?php

namespace PdpLibre\Generated\PdpFPdpDirectoryClient\Exception;

class RequestTimeoutException extends \RuntimeException implements ClientException
{
    public function __construct(string $message)
    {
        parent::__construct($message, 408);
    }
}