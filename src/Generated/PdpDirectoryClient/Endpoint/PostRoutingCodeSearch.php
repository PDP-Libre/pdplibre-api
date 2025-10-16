<?php

namespace PdpLibre\Generated\PdpFPdpDirectoryClient\Endpoint;

class PostRoutingCodeSearch extends \PdpLibre\Generated\PdpFPdpDirectoryClient\Runtime\Client\BaseEndpoint implements \PdpLibre\Generated\PdpFPdpDirectoryClient\Runtime\Client\Endpoint
{
    protected $accept;
    /**
     * Search for routing codes that meet all the criteria passed as parameters and return the routing codes in the desired format.
     *
     * @param \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\RoutingCodeSearch $requestBody 
     * @param array $headerParameters {
     *     @var string $Accept-Language Specifies the language in which the resource is requested.
     * }
     * @param array $accept Accept content header application/json|application/problem+json
     */
    public function __construct(\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\RoutingCodeSearch $requestBody, array $headerParameters = [], array $accept = [])
    {
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
        $this->accept = $accept;
    }
    use \PdpLibre\Generated\PdpFPdpDirectoryClient\Runtime\Client\EndpointTrait;
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
        if ($this->body instanceof \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\RoutingCodeSearch) {
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
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostRoutingCodeSearchBadRequestException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostRoutingCodeSearchUnauthorizedException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostRoutingCodeSearchForbiddenException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostRoutingCodeSearchNotFoundException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostRoutingCodeSearchRequestTimeoutException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostRoutingCodeSearchUnprocessableEntityException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostRoutingCodeSearchTooManyRequestsException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostRoutingCodeSearchInternalServerErrorException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostRoutingCodeSearchNotImplementedException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostRoutingCodeSearchServiceUnavailableException
     *
     * @return null|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\RoutingCodeSearchPost200Response|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'PdpLibre\Generated\PdpFPdpDirectoryClient\Model\RoutingCodeSearchPost200Response', 'json');
        }
        if (is_null($contentType) === false && (206 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'PdpLibre\Generated\PdpFPdpDirectoryClient\Model\RoutingCodeSearchPost200Response', 'json');
        }
        if (400 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostRoutingCodeSearchBadRequestException($response);
        }
        if (401 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostRoutingCodeSearchUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostRoutingCodeSearchForbiddenException($response);
        }
        if (404 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostRoutingCodeSearchNotFoundException($response);
        }
        if (408 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostRoutingCodeSearchRequestTimeoutException($response);
        }
        if (422 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostRoutingCodeSearchUnprocessableEntityException($response);
        }
        if (429 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostRoutingCodeSearchTooManyRequestsException($response);
        }
        if (500 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostRoutingCodeSearchInternalServerErrorException($response);
        }
        if (501 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostRoutingCodeSearchNotImplementedException($response);
        }
        if (503 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostRoutingCodeSearchServiceUnavailableException($response);
        }
        if (mb_strpos($contentType, 'application/problem+json') !== false) {
            return $serializer->deserialize($body, 'PdpLibre\Generated\PdpFPdpDirectoryClient\Model\Error', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer_auth'];
    }
}