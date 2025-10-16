<?php

namespace PdpLibre\Generated\PdpFPdpDirectoryClient\Endpoint;

class PostSirenSearch extends \PdpLibre\Generated\PdpFPdpDirectoryClient\Runtime\Client\BaseEndpoint implements \PdpLibre\Generated\PdpFPdpDirectoryClient\Runtime\Client\Endpoint
{
    protected $accept;
    /**
     * Multi-criteria company search.
     *
     * @param null|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSiren $requestBody 
     * @param array $headerParameters {
     *     @var string $Accept-Language Specifies the language in which the resource is requested.
     * }
     * @param array $accept Accept content header application/json|application/problem+json
     */
    public function __construct(?\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSiren $requestBody = null, array $headerParameters = [], array $accept = [])
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
        return '/siren/search';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSiren) {
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
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostSirenSearchBadRequestException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostSirenSearchUnauthorizedException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostSirenSearchForbiddenException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostSirenSearchNotFoundException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostSirenSearchRequestTimeoutException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostSirenSearchUnprocessableEntityException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostSirenSearchTooManyRequestsException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostSirenSearchInternalServerErrorException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostSirenSearchNotImplementedException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostSirenSearchServiceUnavailableException
     *
     * @return null|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SirenSearchPost200Response|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SirenSearchPost200Response', 'json');
        }
        if (is_null($contentType) === false && (206 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SirenSearchPost200Response', 'json');
        }
        if (400 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostSirenSearchBadRequestException($response);
        }
        if (401 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostSirenSearchUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostSirenSearchForbiddenException($response);
        }
        if (404 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostSirenSearchNotFoundException($response);
        }
        if (408 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostSirenSearchRequestTimeoutException($response);
        }
        if (422 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostSirenSearchUnprocessableEntityException($response);
        }
        if (429 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostSirenSearchTooManyRequestsException($response);
        }
        if (500 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostSirenSearchInternalServerErrorException($response);
        }
        if (501 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostSirenSearchNotImplementedException($response);
        }
        if (503 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostSirenSearchServiceUnavailableException($response);
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