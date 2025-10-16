<?php

namespace App\Generated\PdpDirectoryClient\Endpoint;

class PostRoutingCodeSearch extends \App\Generated\PdpDirectoryClient\Runtime\Client\BaseEndpoint implements \App\Generated\PdpDirectoryClient\Runtime\Client\Endpoint
{
    protected $accept;
    /**
     * Search for routing codes that meet all the criteria passed as parameters and return the routing codes in the desired format.
     *
     * @param \App\Generated\PdpDirectoryClient\Model\RoutingCodeSearch $requestBody 
     * @param array $headerParameters {
     *     @var string $Accept-Language Specifies the language in which the resource is requested.
     * }
     * @param array $accept Accept content header application/json|application/problem+json
     */
    public function __construct(\App\Generated\PdpDirectoryClient\Model\RoutingCodeSearch $requestBody, array $headerParameters = [], array $accept = [])
    {
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
        $this->accept = $accept;
    }
    use \App\Generated\PdpDirectoryClient\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/routing-code/search';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \App\Generated\PdpDirectoryClient\Model\RoutingCodeSearch) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/json', 'application/problem+json']];
        }
        return $this->accept;
    }
    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['Accept-Language']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['Accept-Language' => 'fr']);
        $optionsResolver->addAllowedTypes('Accept-Language', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostRoutingCodeSearchBadRequestException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostRoutingCodeSearchUnauthorizedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostRoutingCodeSearchForbiddenException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostRoutingCodeSearchNotFoundException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostRoutingCodeSearchRequestTimeoutException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostRoutingCodeSearchUnprocessableEntityException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostRoutingCodeSearchTooManyRequestsException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostRoutingCodeSearchInternalServerErrorException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostRoutingCodeSearchNotImplementedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostRoutingCodeSearchServiceUnavailableException
     *
     * @return null|\App\Generated\PdpDirectoryClient\Model\RoutingCodeSearchPost200Response|\App\Generated\PdpDirectoryClient\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'App\Generated\PdpDirectoryClient\Model\RoutingCodeSearchPost200Response', 'json');
        }
        if (is_null($contentType) === false && (206 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'App\Generated\PdpDirectoryClient\Model\RoutingCodeSearchPost200Response', 'json');
        }
        if (400 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PostRoutingCodeSearchBadRequestException($response);
        }
        if (401 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PostRoutingCodeSearchUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PostRoutingCodeSearchForbiddenException($response);
        }
        if (404 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PostRoutingCodeSearchNotFoundException($response);
        }
        if (408 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PostRoutingCodeSearchRequestTimeoutException($response);
        }
        if (422 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PostRoutingCodeSearchUnprocessableEntityException($response);
        }
        if (429 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PostRoutingCodeSearchTooManyRequestsException($response);
        }
        if (500 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PostRoutingCodeSearchInternalServerErrorException($response);
        }
        if (501 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PostRoutingCodeSearchNotImplementedException($response);
        }
        if (503 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PostRoutingCodeSearchServiceUnavailableException($response);
        }
        if (mb_strpos($contentType, 'application/problem+json') !== false) {
            return $serializer->deserialize($body, 'App\Generated\PdpDirectoryClient\Model\Error', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer_auth'];
    }
}