<?php

namespace App\Generated\PdpFlowClient\Endpoint;

class SearchFlow extends \App\Generated\PdpFlowClient\Runtime\Client\BaseEndpoint implements \App\Generated\PdpFlowClient\Runtime\Client\Endpoint
{
    /**
    * Retrieves a set of flows matching the provided search criteria:
     - When setting flowId, do not specify other criteria
     - Need at least one criterion to be specified
     - Assuming a logical AND when combining criteria
     - Assuming a logical OR for criteria allowing a list of values
    >  
    Pagination works with pages:
     - In the request, provide the page to be returned
     - In the response, the total count of items
    
    *
    * @param null|\App\Generated\PdpFlowClient\Model\SearchFlowParams $requestBody 
    * @param array $headerParameters {
    *     @var string $Request-Id Header parameter used to correlate logs from several components
    * }
    */
    public function __construct(?\App\Generated\PdpFlowClient\Model\SearchFlowParams $requestBody = null, array $headerParameters = [])
    {
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }
    use \App\Generated\PdpFlowClient\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/v1/flows/search';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \App\Generated\PdpFlowClient\Model\SearchFlowParams) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['Request-Id']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('Request-Id', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \App\Generated\PdpFlowClient\Exception\SearchFlowBadRequestException
     * @throws \App\Generated\PdpFlowClient\Exception\SearchFlowUnauthorizedException
     * @throws \App\Generated\PdpFlowClient\Exception\SearchFlowForbiddenException
     * @throws \App\Generated\PdpFlowClient\Exception\SearchFlowInternalServerErrorException
     * @throws \App\Generated\PdpFlowClient\Exception\SearchFlowServiceUnavailableException
     *
     * @return null|\App\Generated\PdpFlowClient\Model\SearchFlowContent
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'App\Generated\PdpFlowClient\Model\SearchFlowContent', 'json');
        }
        if (is_null($contentType) === false && (206 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'App\Generated\PdpFlowClient\Model\SearchFlowContent', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \App\Generated\PdpFlowClient\Exception\SearchFlowBadRequestException($serializer->deserialize($body, 'App\Generated\PdpFlowClient\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \App\Generated\PdpFlowClient\Exception\SearchFlowUnauthorizedException($serializer->deserialize($body, 'App\Generated\PdpFlowClient\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \App\Generated\PdpFlowClient\Exception\SearchFlowForbiddenException($serializer->deserialize($body, 'App\Generated\PdpFlowClient\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \App\Generated\PdpFlowClient\Exception\SearchFlowInternalServerErrorException($serializer->deserialize($body, 'App\Generated\PdpFlowClient\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \App\Generated\PdpFlowClient\Exception\SearchFlowServiceUnavailableException($serializer->deserialize($body, 'App\Generated\PdpFlowClient\Model\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['BearerAuth'];
    }
}