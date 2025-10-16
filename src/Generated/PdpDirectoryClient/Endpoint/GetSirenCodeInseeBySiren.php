<?php

namespace App\Generated\PdpDirectoryClient\Endpoint;

class GetSirenCodeInseeBySiren extends \App\Generated\PdpDirectoryClient\Runtime\Client\BaseEndpoint implements \App\Generated\PdpDirectoryClient\Runtime\Client\Endpoint
{
    protected $siren;
    protected $accept;
    /**
     * Returns the details of a company (legal unit) identified by the SIREN number passed as a parameter.
     *
     * @param string $siren Corresponds to the SIREN number of a legal unit.
     * @param array $queryParameters {
     *     @var string $observationDate When the observation date is indicated, the information in effect on that date is returned. When it is not indicated, the information in effect on the current date is returned.
     *     @var array $champs Fields of the SIREN resource
     * }
     * @param array $headerParameters {
     *     @var string $Accept-Language Specifies the language in which the resource is requested.
     * }
     * @param array $accept Accept content header application/json|application/problem+json
     */
    public function __construct(string $siren, array $queryParameters = [], array $headerParameters = [], array $accept = [])
    {
        $this->siren = $siren;
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
        return str_replace(['{siren}'], [$this->siren], '/siren/code-insee:{siren}');
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
        $optionsResolver->setDefined(['observationDate', 'champs']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('observationDate', ['string']);
        $optionsResolver->addAllowedTypes('champs', ['array']);
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
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSirenCodeInseeBySirenBadRequestException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSirenCodeInseeBySirenUnauthorizedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSirenCodeInseeBySirenForbiddenException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSirenCodeInseeBySirenNotFoundException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSirenCodeInseeBySirenRequestTimeoutException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSirenCodeInseeBySirenUnprocessableEntityException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSirenCodeInseeBySirenTooManyRequestsException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSirenCodeInseeBySirenInternalServerErrorException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSirenCodeInseeBySirenNotImplementedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSirenCodeInseeBySirenServiceUnavailableException
     *
     * @return null|\App\Generated\PdpDirectoryClient\Model\LegalUnitPayloadHistory|\App\Generated\PdpDirectoryClient\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'App\Generated\PdpDirectoryClient\Model\LegalUnitPayloadHistory', 'json');
        }
        if (400 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\GetSirenCodeInseeBySirenBadRequestException($response);
        }
        if (401 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\GetSirenCodeInseeBySirenUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\GetSirenCodeInseeBySirenForbiddenException($response);
        }
        if (404 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\GetSirenCodeInseeBySirenNotFoundException($response);
        }
        if (408 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\GetSirenCodeInseeBySirenRequestTimeoutException($response);
        }
        if (422 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\GetSirenCodeInseeBySirenUnprocessableEntityException($response);
        }
        if (429 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\GetSirenCodeInseeBySirenTooManyRequestsException($response);
        }
        if (500 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\GetSirenCodeInseeBySirenInternalServerErrorException($response);
        }
        if (501 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\GetSirenCodeInseeBySirenNotImplementedException($response);
        }
        if (503 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\GetSirenCodeInseeBySirenServiceUnavailableException($response);
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