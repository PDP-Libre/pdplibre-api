<?php

namespace App\Generated\PdpDirectoryClient\Endpoint;

class GetRoutingCodeIdInstance{idInstance} extends \App\Generated\PdpDirectoryClient\Runtime\Client\BaseEndpoint implements \App\Generated\PdpDirectoryClient\Runtime\Client\Endpoint
{
    protected $id-instance;
    protected $accept;
    /**
     * Retrieve the Routing Code data corresponding to the Instance ID.
     *
     * @param int $idInstance Corresponds to the instance id of a legal unit.
     * @param array $queryParameters {
     *     @var array $champs Fields of the Routing Code resource
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
    use \App\Generated\PdpDirectoryClient\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{id-instance}'], [$this->id-instance], '/routing-code/id-instance:{id-instance}');
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
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetRoutingCodeIdInstance{idInstance}BadRequestException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetRoutingCodeIdInstance{idInstance}UnauthorizedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetRoutingCodeIdInstance{idInstance}ForbiddenException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetRoutingCodeIdInstance{idInstance}NotFoundException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetRoutingCodeIdInstance{idInstance}RequestTimeoutException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetRoutingCodeIdInstance{idInstance}UnprocessableEntityException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetRoutingCodeIdInstance{idInstance}TooManyRequestsException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetRoutingCodeIdInstance{idInstance}InternalServerErrorException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetRoutingCodeIdInstance{idInstance}NotImplementedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetRoutingCodeIdInstance{idInstance}ServiceUnavailableException
     *
     * @return null|\App\Generated\PdpDirectoryClient\Model\RoutingCodePayloadHistory|\App\Generated\PdpDirectoryClient\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'App\Generated\PdpDirectoryClient\Model\RoutingCodePayloadHistory', 'json');
        }
        if (400 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\GetRoutingCodeIdInstance{idInstance}BadRequestException($response);
        }
        if (401 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\GetRoutingCodeIdInstance{idInstance}UnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\GetRoutingCodeIdInstance{idInstance}ForbiddenException($response);
        }
        if (404 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\GetRoutingCodeIdInstance{idInstance}NotFoundException($response);
        }
        if (408 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\GetRoutingCodeIdInstance{idInstance}RequestTimeoutException($response);
        }
        if (422 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\GetRoutingCodeIdInstance{idInstance}UnprocessableEntityException($response);
        }
        if (429 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\GetRoutingCodeIdInstance{idInstance}TooManyRequestsException($response);
        }
        if (500 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\GetRoutingCodeIdInstance{idInstance}InternalServerErrorException($response);
        }
        if (501 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\GetRoutingCodeIdInstance{idInstance}NotImplementedException($response);
        }
        if (503 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\GetRoutingCodeIdInstance{idInstance}ServiceUnavailableException($response);
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