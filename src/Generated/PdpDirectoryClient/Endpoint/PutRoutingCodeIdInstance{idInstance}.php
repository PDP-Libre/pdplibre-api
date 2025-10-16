<?php

namespace PdpLibre\Generated\PdpFPdpDirectoryClient\Endpoint;

class PutRoutingCodeIdInstance{idInstance} extends \PdpLibre\Generated\PdpFPdpDirectoryClient\Runtime\Client\BaseEndpoint implements \PdpLibre\Generated\PdpFPdpDirectoryClient\Runtime\Client\Endpoint
{
    protected $id-instance;
    protected $accept;
    /**
     * Completely update a private routing code.
     *
     * @param int $idInstance Corresponds to the instance id of a legal unit.
     * @param \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\UpdatePutRoutingCodeBody $requestBody 
     * @param array $headerParameters {
     *     @var string $Accept-Language Specifies the language in which the resource is requested.
     *     @var array $PPF-affiliations Indicates the user's active affiliations in SIREN/SIRET/Service format. Only the SIREN is mandatory.
     * }
     * @param array $accept Accept content header application/json|application/problem+json
     */
    public function __construct(int $idInstance, \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\UpdatePutRoutingCodeBody $requestBody, array $headerParameters = [], array $accept = [])
    {
        $this->id-instance = $idInstance;
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
        $this->accept = $accept;
    }
    use \PdpLibre\Generated\PdpFPdpDirectoryClient\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{id-instance}'], [$this->id-instance], '/routing-code/id-instance:{id-instance}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\UpdatePutRoutingCodeBody) {
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
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PutRoutingCodeIdInstance{idInstance}BadRequestException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PutRoutingCodeIdInstance{idInstance}UnauthorizedException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PutRoutingCodeIdInstance{idInstance}ForbiddenException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PutRoutingCodeIdInstance{idInstance}NotFoundException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PutRoutingCodeIdInstance{idInstance}RequestTimeoutException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PutRoutingCodeIdInstance{idInstance}UnprocessableEntityException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PutRoutingCodeIdInstance{idInstance}TooManyRequestsException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PutRoutingCodeIdInstance{idInstance}InternalServerErrorException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PutRoutingCodeIdInstance{idInstance}NotImplementedException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PutRoutingCodeIdInstance{idInstance}ServiceUnavailableException
     *
     * @return null|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\RoutingCodePost201Response|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'PdpLibre\Generated\PdpFPdpDirectoryClient\Model\RoutingCodePost201Response', 'json');
        }
        if (206 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PutRoutingCodeIdInstance{idInstance}BadRequestException($response);
        }
        if (401 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PutRoutingCodeIdInstance{idInstance}UnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PutRoutingCodeIdInstance{idInstance}ForbiddenException($response);
        }
        if (404 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PutRoutingCodeIdInstance{idInstance}NotFoundException($response);
        }
        if (408 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PutRoutingCodeIdInstance{idInstance}RequestTimeoutException($response);
        }
        if (422 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PutRoutingCodeIdInstance{idInstance}UnprocessableEntityException($response);
        }
        if (429 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PutRoutingCodeIdInstance{idInstance}TooManyRequestsException($response);
        }
        if (500 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PutRoutingCodeIdInstance{idInstance}InternalServerErrorException($response);
        }
        if (501 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PutRoutingCodeIdInstance{idInstance}NotImplementedException($response);
        }
        if (503 === $status) {
            throw new \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PutRoutingCodeIdInstance{idInstance}ServiceUnavailableException($response);
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