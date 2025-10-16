<?php

namespace App\Generated\PdpFlowClient\Endpoint;

class GetFlow extends \App\Generated\PdpFlowClient\Runtime\Client\BaseEndpoint implements \App\Generated\PdpFlowClient\Runtime\Client\Endpoint
{
    protected $flowId;
    protected $accept;
    /**
    * Download a file related to a given flow:
     - an invoice
     - a life cycle
     - an e-reporting
    
    *
    * @param string $flowId Flow identifier
    * @param array $queryParameters {
    *     @var string $docType This parameter allows to provide the type of file to be uploaded, can be either one:
     - Original: the document that has been initially sent/provided by the emitter
     - Converted: the document that has been optionally converted by the system
     - ReadableView: the document that has been optionally generated as the readable file
     - Attachment: one of the attached documents, provide the optional index if needed
    
    *     @var int $docIndex If docType is an Attachment and in case there are several attached documents, it says which one to address
    
    * }
    * @param array $accept Accept content header application/octet-stream|application/json
    */
    public function __construct(string $flowId, array $queryParameters = [], array $accept = [])
    {
        $this->flowId = $flowId;
        $this->queryParameters = $queryParameters;
        $this->accept = $accept;
    }
    use \App\Generated\PdpFlowClient\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{flowId}'], [$this->flowId], '/v1/flows/{flowId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/octet-stream', 'application/json']];
        }
        return $this->accept;
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['docType', 'docIndex']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['docType' => 'Original', 'docIndex' => 1]);
        $optionsResolver->addAllowedTypes('docType', ['string']);
        $optionsResolver->addAllowedTypes('docIndex', ['int']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \App\Generated\PdpFlowClient\Exception\GetFlowBadRequestException
     * @throws \App\Generated\PdpFlowClient\Exception\GetFlowUnauthorizedException
     * @throws \App\Generated\PdpFlowClient\Exception\GetFlowForbiddenException
     * @throws \App\Generated\PdpFlowClient\Exception\GetFlowNotFoundException
     * @throws \App\Generated\PdpFlowClient\Exception\GetFlowInternalServerErrorException
     * @throws \App\Generated\PdpFlowClient\Exception\GetFlowServiceUnavailableException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \App\Generated\PdpFlowClient\Exception\GetFlowBadRequestException($serializer->deserialize($body, 'App\Generated\PdpFlowClient\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \App\Generated\PdpFlowClient\Exception\GetFlowUnauthorizedException($serializer->deserialize($body, 'App\Generated\PdpFlowClient\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \App\Generated\PdpFlowClient\Exception\GetFlowForbiddenException($serializer->deserialize($body, 'App\Generated\PdpFlowClient\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \App\Generated\PdpFlowClient\Exception\GetFlowNotFoundException($serializer->deserialize($body, 'App\Generated\PdpFlowClient\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \App\Generated\PdpFlowClient\Exception\GetFlowInternalServerErrorException($serializer->deserialize($body, 'App\Generated\PdpFlowClient\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \App\Generated\PdpFlowClient\Exception\GetFlowServiceUnavailableException($serializer->deserialize($body, 'App\Generated\PdpFlowClient\Model\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['BearerAuth'];
    }
}