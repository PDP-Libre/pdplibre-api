<?php

namespace App\Generated\PdpDirectoryClient\Endpoint;

class PatchDirectoryLineIdInstance{idInstance} extends \App\Generated\PdpDirectoryClient\Runtime\Client\BaseEndpoint implements \App\Generated\PdpDirectoryClient\Runtime\Client\Endpoint
{
    protected $id-instance;
    protected $accept;
    /**
     * Partially updates a directory line.
     *
     * @param int $idInstance Corresponds to the instance id of a legal unit.
     * @param \App\Generated\PdpDirectoryClient\Model\UpdatePatchDirectoryLineBody $requestBody 
     * @param array $headerParameters {
     *     @var string $Accept-Language Specifies the language in which the resource is requested.
     *     @var array $PPF-affiliations Indicates the user's active affiliations in SIREN/SIRET/Service format. Only the SIREN is mandatory.
     * }
     * @param array $accept Accept content header application/json|application/problem+json
     */
    public function __construct(int $idInstance, \App\Generated\PdpDirectoryClient\Model\UpdatePatchDirectoryLineBody $requestBody, array $headerParameters = [], array $accept = [])
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
        return str_replace(['{id-instance}'], [$this->id-instance], '/directory-line/id-instance:{id-instance}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \App\Generated\PdpDirectoryClient\Model\UpdatePatchDirectoryLineBody) {
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
     * @throws \App\Generated\PdpDirectoryClient\Exception\PatchDirectoryLineIdInstance{idInstance}BadRequestException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PatchDirectoryLineIdInstance{idInstance}UnauthorizedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PatchDirectoryLineIdInstance{idInstance}ForbiddenException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PatchDirectoryLineIdInstance{idInstance}NotFoundException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PatchDirectoryLineIdInstance{idInstance}RequestTimeoutException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PatchDirectoryLineIdInstance{idInstance}UnprocessableEntityException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PatchDirectoryLineIdInstance{idInstance}TooManyRequestsException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PatchDirectoryLineIdInstance{idInstance}InternalServerErrorException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PatchDirectoryLineIdInstance{idInstance}NotImplementedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PatchDirectoryLineIdInstance{idInstance}ServiceUnavailableException
     *
     * @return null|\App\Generated\PdpDirectoryClient\Model\DirectoryLinePost201Response|\App\Generated\PdpDirectoryClient\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'App\Generated\PdpDirectoryClient\Model\DirectoryLinePost201Response', 'json');
        }
        if (400 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PatchDirectoryLineIdInstance{idInstance}BadRequestException($response);
        }
        if (401 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PatchDirectoryLineIdInstance{idInstance}UnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PatchDirectoryLineIdInstance{idInstance}ForbiddenException($response);
        }
        if (404 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PatchDirectoryLineIdInstance{idInstance}NotFoundException($response);
        }
        if (408 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PatchDirectoryLineIdInstance{idInstance}RequestTimeoutException($response);
        }
        if (422 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PatchDirectoryLineIdInstance{idInstance}UnprocessableEntityException($response);
        }
        if (429 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PatchDirectoryLineIdInstance{idInstance}TooManyRequestsException($response);
        }
        if (500 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PatchDirectoryLineIdInstance{idInstance}InternalServerErrorException($response);
        }
        if (501 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PatchDirectoryLineIdInstance{idInstance}NotImplementedException($response);
        }
        if (503 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\PatchDirectoryLineIdInstance{idInstance}ServiceUnavailableException($response);
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