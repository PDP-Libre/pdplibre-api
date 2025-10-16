<?php

namespace App\Generated\PdpDirectoryClient\Endpoint;

class PostDirectoryLineSearch extends \App\Generated\PdpDirectoryClient\Runtime\Client\BaseEndpoint implements \App\Generated\PdpDirectoryClient\Runtime\Client\Endpoint
{
    protected $accept;
    /**
     * Search for directory lines that meet all the criteria passed as parameters and return the results in the desired format.
     *
     * @param null|\App\Generated\PdpDirectoryClient\Model\SearchDirectoryLine $requestBody 
     * @param array $headerParameters {
     *     @var string $Accept-Language Specifies the language in which the resource is requested.
     * }
     * @param array $accept Accept content header application/json|application/problem+json
     */
    public function __construct(?\App\Generated\PdpDirectoryClient\Model\SearchDirectoryLine $requestBody = null, array $headerParameters = [], array $accept = [])
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
        return '/directory-line/search';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \App\Generated\PdpDirectoryClient\Model\SearchDirectoryLine) {
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
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineSearchBadRequestException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineSearchUnauthorizedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineSearchForbiddenException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineSearchNotFoundException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineSearchRequestTimeoutException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineSearchUnprocessableEntityException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineSearchTooManyRequestsException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineSearchInternalServerErrorException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineSearchNotImplementedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineSearchServiceUnavailableException
     *
     * @return null|\App\Generated\PdpDirectoryClient\Model\DirectoryLineSearchPost200Response|\App\Generated\PdpDirectoryClient\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'App\Generated\PdpDirectoryClient\Model\DirectoryLineSearchPost200Response', 'json');
        }
        if (is_null($contentType) === false && (206 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'App\Generated\PdpDirectoryClient\Model\DirectoryLineSearchPost200Response', 'json');
        }
        if (400 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineSearchBadRequestException($response);
        }
        if (401 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineSearchUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineSearchForbiddenException($response);
        }
        if (404 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineSearchNotFoundException($response);
        }
        if (408 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineSearchRequestTimeoutException($response);
        }
        if (422 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineSearchUnprocessableEntityException($response);
        }
        if (429 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineSearchTooManyRequestsException($response);
        }
        if (500 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineSearchInternalServerErrorException($response);
        }
        if (501 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineSearchNotImplementedException($response);
        }
        if (503 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineSearchServiceUnavailableException($response);
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