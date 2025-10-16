<?php

namespace App\Generated\PdpDirectoryClient\Endpoint;

class PostDirectoryLine extends \App\Generated\PdpDirectoryClient\Runtime\Client\BaseEndpoint implements \App\Generated\PdpDirectoryClient\Runtime\Client\Endpoint
{
    protected $accept;
    /**
     * Creation of a new directory line for a SIREN, a SIRET or a ROUTING CODE.
     *
     * @param \App\Generated\PdpDirectoryClient\Model\CreateDirectoryLineBody $requestBody 
     * @param array $headerParameters {
     *     @var string $Accept-Language Specifies the language in which the resource is requested.
     *     @var array $PPF-affiliations Indicates the user's active affiliations in SIREN/SIRET/Service format. Only the SIREN is mandatory.
     * }
     * @param array $accept Accept content header application/json|application/problem+json
     */
    public function __construct(\App\Generated\PdpDirectoryClient\Model\CreateDirectoryLineBody $requestBody, array $headerParameters = [], array $accept = [])
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
        return '/directory-line';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \App\Generated\PdpDirectoryClient\Model\CreateDirectoryLineBody) {
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
        $optionsResolver->setDefined(['Accept-Language', 'PPF-affiliations']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['Accept-Language' => 'fr']);
        $optionsResolver->addAllowedTypes('Accept-Language', ['string']);
        $optionsResolver->addAllowedTypes('PPF-affiliations', ['array']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineBadRequestException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineUnauthorizedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineForbiddenException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineNotFoundException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineRequestTimeoutException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineUnprocessableEntityException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineTooManyRequestsException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineInternalServerErrorException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineNotImplementedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineServiceUnavailableException
     *
     * @return null|\App\Generated\PdpDirectoryClient\Model\DirectoryLinePost201Response|\App\Generated\PdpDirectoryClient\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'App\Generated\PdpDirectoryClient\Model\DirectoryLinePost201Response', 'json');
        }
        if (400 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineBadRequestException($response);
        }
        if (401 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineForbiddenException($response);
        }
        if (404 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineNotFoundException($response);
        }
        if (408 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineRequestTimeoutException($response);
        }
        if (422 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineUnprocessableEntityException($response);
        }
        if (429 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineTooManyRequestsException($response);
        }
        if (500 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineInternalServerErrorException($response);
        }
        if (501 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineNotImplementedException($response);
        }
        if (503 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineServiceUnavailableException($response);
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