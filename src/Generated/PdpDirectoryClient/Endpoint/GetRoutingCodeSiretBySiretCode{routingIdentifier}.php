<?php

namespace PdpLibre\Generated\PdpFPdpDirectoryClient\Endpoint;

class GetRoutingCodeSiretBySiretCode{routingIdentifier} extends \PdpLibre\Generated\PdpFPdpDirectoryClient\Runtime\Client\BaseEndpoint implements \PdpLibre\Generated\PdpFPdpDirectoryClient\Runtime\Client\Endpoint
{
    protected $siret;
    protected $routing-identifier;
    protected $accept;
    /**
     * Récupérer les données du Code Routage correspondante à l’identifiant passé en paramètres.
     *
     * @param string $siret Corresponds to the SIRET number of a facility.
     * @param string $routingIdentifier Corresponds to the routing identifier of a routing code.
     * @param array $queryParameters {
     *     @var string $observationDate When the observation date is indicated, the information in effect on that date is returned. When it is not indicated, the information in effect on the current date is returned.
     *     @var array $include Relations to include in the response.
     *     @var array $fields Fields of the Routing Code resource
     * }
     * @param array $headerParameters {
     *     @var string $Accept-Language Specifies the language in which the resource is requested.
     * }
     * @param array $accept Accept content header application/json|application/problem+json
     */
    public function __construct(string $siret, string $routingIdentifier, array $queryParameters = [], array $headerParameters = [], array $accept = [])
    {
        $this->siret = $siret;
        $this->routing-identifier = $routingIdentifier;
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
        return str_replace(['{siret}', '{routing-identifier}'], [$this->siret, $this->routing-identifier], '/routing-code/siret:{siret}/code:{routing-identifier}');
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
        $optionsResolver->setDefined(['observationDate', 'include', 'fields']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('observationDate', ['string']);
        $optionsResolver->addAllowedTypes('include', ['array']);
        $optionsResolver->addAllowedTypes('fields', ['array']);
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
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetRoutingCodeSiretBySiretCode{routingIdentifier}BadRequestException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetRoutingCodeSiretBySiretCode{routingIdentifier}UnauthorizedException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetRoutingCodeSiretBySiretCode{routingIdentifier}ForbiddenException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetRoutingCodeSiretBySiretCode{routingIdentifier}NotFoundException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetRoutingCodeSiretBySiretCode{routingIdentifier}RequestTimeoutException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetRoutingCodeSiretBySiretCode{routingIdentifier}UnprocessableEntityException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetRoutingCodeSiretBySiretCode{routingIdentifier}TooManyRequestsException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetRoutingCodeSiretBySiretCode{routingIdentifier}InternalServerErrorException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetRoutingCodeSiretBySiretCode{routingIdentifier}NotImplementedException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetRoutingCodeSiretBySiretCode{routingIdentifier}ServiceUnavailableException
     *
     * @return null|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\RoutingCodePayloadHistoryLegalUnitFacility|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'PdpLibre\Generated\PdpFPdpDirectoryClient\Model\RoutingCodePayloadHistoryLegalUnitFacility', 'json');
        }
        if (400 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetRoutingCodeSiretBySiretCode{routingIdentifier}BadRequestException($response);
        }
        if (401 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetRoutingCodeSiretBySiretCode{routingIdentifier}UnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetRoutingCodeSiretBySiretCode{routingIdentifier}ForbiddenException($response);
        }
        if (404 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetRoutingCodeSiretBySiretCode{routingIdentifier}NotFoundException($response);
        }
        if (408 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetRoutingCodeSiretBySiretCode{routingIdentifier}RequestTimeoutException($response);
        }
        if (422 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetRoutingCodeSiretBySiretCode{routingIdentifier}UnprocessableEntityException($response);
        }
        if (429 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetRoutingCodeSiretBySiretCode{routingIdentifier}TooManyRequestsException($response);
        }
        if (500 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetRoutingCodeSiretBySiretCode{routingIdentifier}InternalServerErrorException($response);
        }
        if (501 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetRoutingCodeSiretBySiretCode{routingIdentifier}NotImplementedException($response);
        }
        if (503 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetRoutingCodeSiretBySiretCode{routingIdentifier}ServiceUnavailableException($response);
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