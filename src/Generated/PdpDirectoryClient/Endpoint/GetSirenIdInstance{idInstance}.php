<?php

namespace PdpLibre\Generated\PdpFPdpDirectoryClient\Endpoint;

class GetSirenIdInstance{idInstance} extends \PdpLibre\Generated\PdpFPdpDirectoryClient\Runtime\Client\BaseEndpoint implements \PdpLibre\Generated\PdpFPdpDirectoryClient\Runtime\Client\Endpoint
{
    protected $id-instance;
    protected $accept;
    /**
     * Returns the details of a company (legal unit) identified by the id-instance passed as a parameter.
     *
     * @param int $idInstance Corresponds to the instance id of a legal unit.
     * @param array $queryParameters {
     *     @var array $champs Fields of the SIREN resource
     * }
     * @param array $headerParameters {
     *     @var string $Accept-Language Specifies the language in which the resource is requested.
     * }
     * @param array $accept Accept content header application/json|application/problem+json
     */
    public function __construct(int $idInstance, array $queryParameters = [], array $headerParameters = [], array $accept = [])
    {
        $this->id-instance = $idInstance;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
        $this->accept = $accept;
    }
    use \PdpLibre\Generated\PdpFPdpDirectoryClient\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{id-instance}'], [$this->id-instance], '/siren/id-instance:{id-instance}');
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
        $optionsResolver->setDefined(['champs']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
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
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSirenIdInstance{idInstance}BadRequestException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSirenIdInstance{idInstance}UnauthorizedException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSirenIdInstance{idInstance}ForbiddenException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSirenIdInstance{idInstance}NotFoundException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSirenIdInstance{idInstance}RequestTimeoutException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSirenIdInstance{idInstance}UnprocessableEntityException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSirenIdInstance{idInstance}TooManyRequestsException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSirenIdInstance{idInstance}InternalServerErrorException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSirenIdInstance{idInstance}NotImplementedException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSirenIdInstance{idInstance}ServiceUnavailableException
     *
     * @return null|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\LegalUnitPayloadHistory|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'PdpLibre\Generated\PdpFPdpDirectoryClient\Model\LegalUnitPayloadHistory', 'json');
        }
        if (400 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSirenIdInstance{idInstance}BadRequestException($response);
        }
        if (401 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSirenIdInstance{idInstance}UnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSirenIdInstance{idInstance}ForbiddenException($response);
        }
        if (404 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSirenIdInstance{idInstance}NotFoundException($response);
        }
        if (408 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSirenIdInstance{idInstance}RequestTimeoutException($response);
        }
        if (422 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSirenIdInstance{idInstance}UnprocessableEntityException($response);
        }
        if (429 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSirenIdInstance{idInstance}TooManyRequestsException($response);
        }
        if (500 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSirenIdInstance{idInstance}InternalServerErrorException($response);
        }
        if (501 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSirenIdInstance{idInstance}NotImplementedException($response);
        }
        if (503 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSirenIdInstance{idInstance}ServiceUnavailableException($response);
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