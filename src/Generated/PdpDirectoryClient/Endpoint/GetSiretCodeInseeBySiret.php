<?php

namespace App\Generated\PdpDirectoryClient\Endpoint;

class GetSiretCodeInseeBySiret extends \App\Generated\PdpDirectoryClient\Runtime\Client\BaseEndpoint implements \App\Generated\PdpDirectoryClient\Runtime\Client\Endpoint
{
    protected $siret;
    protected $accept;
    /**
     * Returns the details of a facility associated to a SIRET.
     *
     * @param string $siret Corresponds to the SIRET number of a facility.
     * @param array $queryParameters {
     *     @var string $observationDate When the observation date is indicated, the information in effect on that date is returned. When it is not indicated, the information in effect on the current date is returned.
     *     @var array $fields Fields of a SIRET resource.
     *     @var array $include Relations to include in the response.
     * }
     * @param array $headerParameters {
     *     @var string $Accept-Language Specifies the language in which the resource is requested.
     * }
     * @param array $accept Accept content header application/json|application/problem+json
     */
    public function __construct(string $siret, array $queryParameters = [], array $headerParameters = [], array $accept = [])
    {
        $this->siret = $siret;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
        $this->accept = $accept;
    }
    use \App\Generated\PdpDirectoryClient\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{siret}'], [$this->siret], '/siret/code-insee:{siret}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/json', 'application/problem+json']];
        }
        return $this->accept;
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['observationDate', 'fields', 'include']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('observationDate', ['string']);
        $optionsResolver->addAllowedTypes('fields', ['array']);
        $optionsResolver->addAllowedTypes('include', ['array']);
        return $optionsResolver;
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
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSiretCodeInseeBySiretBadRequestException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSiretCodeInseeBySiretUnauthorizedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSiretCodeInseeBySiretForbiddenException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSiretCodeInseeBySiretNotFoundException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSiretCodeInseeBySiretRequestTimeoutException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSiretCodeInseeBySiretUnprocessableEntityException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSiretCodeInseeBySiretTooManyRequestsException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSiretCodeInseeBySiretInternalServerErrorException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSiretCodeInseeBySiretNotImplementedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSiretCodeInseeBySiretServiceUnavailableException
     *
     * @return null|\App\Generated\PdpDirectoryClient\Model\FacilityPayloadHistoryUle|\App\Generated\PdpDirectoryClient\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'App\Generated\PdpDirectoryClient\Model\FacilityPayloadHistoryUle', 'json');
        }
        if (400 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\GetSiretCodeInseeBySiretBadRequestException($response);
        }
        if (401 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\GetSiretCodeInseeBySiretUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\GetSiretCodeInseeBySiretForbiddenException($response);
        }
        if (404 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\GetSiretCodeInseeBySiretNotFoundException($response);
        }
        if (408 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\GetSiretCodeInseeBySiretRequestTimeoutException($response);
        }
        if (422 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\GetSiretCodeInseeBySiretUnprocessableEntityException($response);
        }
        if (429 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\GetSiretCodeInseeBySiretTooManyRequestsException($response);
        }
        if (500 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\GetSiretCodeInseeBySiretInternalServerErrorException($response);
        }
        if (501 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\GetSiretCodeInseeBySiretNotImplementedException($response);
        }
        if (503 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\GetSiretCodeInseeBySiretServiceUnavailableException($response);
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