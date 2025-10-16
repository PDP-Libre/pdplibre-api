<?php

namespace PdpLibre\Generated\PdpFPdpDirectoryClient\Endpoint;

class GetDirectoryLineCode{addressingIdentifier} extends \PdpLibre\Generated\PdpFPdpDirectoryClient\Runtime\Client\BaseEndpoint implements \PdpLibre\Generated\PdpFPdpDirectoryClient\Runtime\Client\Endpoint
{
    protected $addressing-identifier;
    protected $accept;
    /**
     * Retrieve the data from the directory line corresponding to the identifier passed in parameters.
     *
     * @param string $addressingIdentifier Corresponds to the address identifier of the directory line.
     * @param array $queryParameters {
     *     @var string $observationDate When the observation date is indicated, the information in effect on that date is returned. When it is not indicated, the information in effect on the current date is returned.
     *     @var array $include Relations to include in the response.
     *     @var array $champs Fields of the Directory Line resource.
     * }
     * @param array $headerParameters {
     *     @var string $Accept-Language Specifies the language in which the resource is requested.
     * }
     * @param array $accept Accept content header application/json|application/problem+json
     */
    public function __construct(string $addressingIdentifier, array $queryParameters = [], array $headerParameters = [], array $accept = [])
    {
        $this->addressing-identifier = $addressingIdentifier;
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
        return str_replace(['{addressing-identifier}'], [$this->addressing-identifier], '/directory-line/code:{addressing-identifier}');
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
        $optionsResolver->setDefined(['observationDate', 'include', 'champs']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('observationDate', ['string']);
        $optionsResolver->addAllowedTypes('include', ['array']);
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
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetDirectoryLineCode{addressingIdentifier}BadRequestException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetDirectoryLineCode{addressingIdentifier}UnauthorizedException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetDirectoryLineCode{addressingIdentifier}ForbiddenException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetDirectoryLineCode{addressingIdentifier}NotFoundException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetDirectoryLineCode{addressingIdentifier}RequestTimeoutException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetDirectoryLineCode{addressingIdentifier}UnprocessableEntityException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetDirectoryLineCode{addressingIdentifier}TooManyRequestsException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetDirectoryLineCode{addressingIdentifier}InternalServerErrorException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetDirectoryLineCode{addressingIdentifier}NotImplementedException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetDirectoryLineCode{addressingIdentifier}ServiceUnavailableException
     *
     * @return null|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCode|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'PdpLibre\Generated\PdpFPdpDirectoryClient\Model\DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCode', 'json');
        }
        if (400 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetDirectoryLineCode{addressingIdentifier}BadRequestException($response);
        }
        if (401 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetDirectoryLineCode{addressingIdentifier}UnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetDirectoryLineCode{addressingIdentifier}ForbiddenException($response);
        }
        if (404 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetDirectoryLineCode{addressingIdentifier}NotFoundException($response);
        }
        if (408 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetDirectoryLineCode{addressingIdentifier}RequestTimeoutException($response);
        }
        if (422 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetDirectoryLineCode{addressingIdentifier}UnprocessableEntityException($response);
        }
        if (429 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetDirectoryLineCode{addressingIdentifier}TooManyRequestsException($response);
        }
        if (500 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetDirectoryLineCode{addressingIdentifier}InternalServerErrorException($response);
        }
        if (501 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetDirectoryLineCode{addressingIdentifier}NotImplementedException($response);
        }
        if (503 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetDirectoryLineCode{addressingIdentifier}ServiceUnavailableException($response);
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