<?php

namespace PdpLibre\Generated\PdpFPdpDirectoryClient\Endpoint;

class PostDirectoryLine extends \PdpLibre\Generated\PdpFPdpDirectoryClient\Runtime\Client\BaseEndpoint implements \PdpLibre\Generated\PdpFPdpDirectoryClient\Runtime\Client\Endpoint
{
    protected $accept;
    /**
     * Creation of a new directory line for a SIREN, a SIRET or a ROUTING CODE.
     *
     * @param \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\CreateDirectoryLineBody $requestBody 
     * @param array $headerParameters {
     *     @var string $Accept-Language Specifies the language in which the resource is requested.
     *     @var array $PPF-affiliations Indicates the user's active affiliations in SIREN/SIRET/Service format. Only the SIREN is mandatory.
     * }
     * @param array $accept Accept content header application/json|application/problem+json
     */
    public function __construct(\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\CreateDirectoryLineBody $requestBody, array $headerParameters = [], array $accept = [])
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
        return '/directory-line';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\CreateDirectoryLineBody) {
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
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostDirectoryLineBadRequestException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostDirectoryLineUnauthorizedException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostDirectoryLineForbiddenException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostDirectoryLineNotFoundException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostDirectoryLineRequestTimeoutException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostDirectoryLineUnprocessableEntityException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostDirectoryLineTooManyRequestsException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostDirectoryLineInternalServerErrorException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostDirectoryLineNotImplementedException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostDirectoryLineServiceUnavailableException
     *
     * @return null|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\DirectoryLinePost201Response|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'PdpLibre\Generated\PdpFPdpDirectoryClient\Model\DirectoryLinePost201Response', 'json');
        }
        if (400 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostDirectoryLineBadRequestException($response);
        }
        if (401 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostDirectoryLineUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostDirectoryLineForbiddenException($response);
        }
        if (404 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostDirectoryLineNotFoundException($response);
        }
        if (408 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostDirectoryLineRequestTimeoutException($response);
        }
        if (422 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostDirectoryLineUnprocessableEntityException($response);
        }
        if (429 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostDirectoryLineTooManyRequestsException($response);
        }
        if (500 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostDirectoryLineInternalServerErrorException($response);
        }
        if (501 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostDirectoryLineNotImplementedException($response);
        }
        if (503 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostDirectoryLineServiceUnavailableException($response);
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