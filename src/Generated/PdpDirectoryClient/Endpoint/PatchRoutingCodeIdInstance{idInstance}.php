<?php

namespace App\Generated\PdpDirectoryClient\Endpoint;

class PatchRoutingCodeIdInstance{idInstance} extends \App\Generated\PdpDirectoryClient\Runtime\Client\BaseEndpoint implements \App\Generated\PdpDirectoryClient\Runtime\Client\Endpoint
{
    protected $id-instance;
    protected $accept;
    /**
     * Partially update a private routing code.
     *
     * @param int $idInstance Corresponds to the instance id of a legal unit.
     * @param \App\Generated\PdpDirectoryClient\Model\UpdatePatchRoutingCodeBody $requestBody 
     * @param array $headerParameters {
     *     @var string $Accept-Language Specifies the language in which the resource is requested.
     *     @var array $PPF-affiliations Indicates the user's active affiliations in SIREN/SIRET/Service format. Only the SIREN is mandatory.
     * }
     * @param array $accept Accept content header application/json|application/problem+json
     */
    public function __construct(int $idInstance, \App\Generated\PdpDirectoryClient\Model\UpdatePatchRoutingCodeBody $requestBody, array $headerParameters = [], array $accept = [])
    {
        $this->id-instance = $idInstance;
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
        $this->accept = $accept;
    }
    use \App\Generated\PdpDirectoryClient\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PATCH';
    }
    public function getUri(): string
    {
        return str_replace(['{id-instance}'], [$this->id-instance], '/routing-code/id-instance:{id-instance}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \App\Generated\PdpDirectoryClient\Model\UpdatePatchRoutingCodeBody) {
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
     * @throws \App\Generated\PdpDirectoryClient\Exception\PatchRoutingCodeIdInstance{idInstance}BadRequestException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PatchRoutingCodeIdInstance{idInstance}UnauthorizedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PatchRoutingCodeIdInstance{idInstance}ForbiddenException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PatchRoutingCodeIdInstance{idInstance}NotFoundException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PatchRoutingCodeIdInstance{idInstance}RequestTimeoutException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PatchRoutingCodeIdInstance{idInstance}UnprocessableEntityException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PatchRoutingCodeIdInstance{idInstance}TooManyRequestsException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PatchRoutingCodeIdInstance{idInstance}InternalServerErrorException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PatchRoutingCodeIdInstance{idInstance}NotImplementedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PatchRoutingCodeIdInstance{idInstance}ServiceUnavailableException
     *
     * @return null|\App\Generated\PdpDirectoryClient\Model\RoutingCodePost201Response|\App\Generated\PdpDirectoryClient\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'App\Generated\PdpDirectoryClient\Model\RoutingCodePost201Response', 'json');
        }
        if (206 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PatchRoutingCodeIdInstance{idInstance}BadRequestException($response);
        }
        if (401 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PatchRoutingCodeIdInstance{idInstance}UnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PatchRoutingCodeIdInstance{idInstance}ForbiddenException($response);
        }
        if (404 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PatchRoutingCodeIdInstance{idInstance}NotFoundException($response);
        }
        if (408 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PatchRoutingCodeIdInstance{idInstance}RequestTimeoutException($response);
        }
        if (422 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PatchRoutingCodeIdInstance{idInstance}UnprocessableEntityException($response);
        }
        if (429 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PatchRoutingCodeIdInstance{idInstance}TooManyRequestsException($response);
        }
        if (500 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PatchRoutingCodeIdInstance{idInstance}InternalServerErrorException($response);
        }
        if (501 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PatchRoutingCodeIdInstance{idInstance}NotImplementedException($response);
        }
        if (503 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PatchRoutingCodeIdInstance{idInstance}ServiceUnavailableException($response);
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