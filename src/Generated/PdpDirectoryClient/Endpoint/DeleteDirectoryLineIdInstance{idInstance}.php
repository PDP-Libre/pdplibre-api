<?php

namespace App\Generated\PdpDirectoryClient\Endpoint;

class DeleteDirectoryLineIdInstance{idInstance} extends \App\Generated\PdpDirectoryClient\Runtime\Client\BaseEndpoint implements \App\Generated\PdpDirectoryClient\Runtime\Client\Endpoint
{
    protected $id-instance;
    /**
     * Delete a directory line.
     *
     * @param int $idInstance Corresponds to the instance id of a legal unit.
     * @param array $headerParameters {
     *     @var string $Accept-Language Specifies the language in which the resource is requested.
     *     @var array $PPF-affiliations Indicates the user's active affiliations in SIREN/SIRET/Service format. Only the SIREN is mandatory.
     * }
     */
    public function __construct(int $idInstance, array $headerParameters = [])
    {
        $this->id-instance = $idInstance;
        $this->headerParameters = $headerParameters;
    }
    use \App\Generated\PdpDirectoryClient\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{id-instance}'], [$this->id-instance], '/directory-line/id-instance:{id-instance}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/problem+json']];
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
     * @throws \App\Generated\PdpDirectoryClient\Exception\DeleteDirectoryLineIdInstance{idInstance}BadRequestException
     * @throws \App\Generated\PdpDirectoryClient\Exception\DeleteDirectoryLineIdInstance{idInstance}UnauthorizedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\DeleteDirectoryLineIdInstance{idInstance}ForbiddenException
     * @throws \App\Generated\PdpDirectoryClient\Exception\DeleteDirectoryLineIdInstance{idInstance}NotFoundException
     * @throws \App\Generated\PdpDirectoryClient\Exception\DeleteDirectoryLineIdInstance{idInstance}RequestTimeoutException
     * @throws \App\Generated\PdpDirectoryClient\Exception\DeleteDirectoryLineIdInstance{idInstance}UnprocessableEntityException
     * @throws \App\Generated\PdpDirectoryClient\Exception\DeleteDirectoryLineIdInstance{idInstance}TooManyRequestsException
     * @throws \App\Generated\PdpDirectoryClient\Exception\DeleteDirectoryLineIdInstance{idInstance}InternalServerErrorException
     * @throws \App\Generated\PdpDirectoryClient\Exception\DeleteDirectoryLineIdInstance{idInstance}NotImplementedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\DeleteDirectoryLineIdInstance{idInstance}ServiceUnavailableException
     *
     * @return null|\App\Generated\PdpDirectoryClient\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\DeleteDirectoryLineIdInstance{idInstance}BadRequestException($response);
        }
        if (401 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\DeleteDirectoryLineIdInstance{idInstance}UnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\DeleteDirectoryLineIdInstance{idInstance}ForbiddenException($response);
        }
        if (404 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\DeleteDirectoryLineIdInstance{idInstance}NotFoundException($response);
        }
        if (408 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\DeleteDirectoryLineIdInstance{idInstance}RequestTimeoutException($response);
        }
        if (422 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\DeleteDirectoryLineIdInstance{idInstance}UnprocessableEntityException($response);
        }
        if (429 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\DeleteDirectoryLineIdInstance{idInstance}TooManyRequestsException($response);
        }
        if (500 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\DeleteDirectoryLineIdInstance{idInstance}InternalServerErrorException($response);
        }
        if (501 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\DeleteDirectoryLineIdInstance{idInstance}NotImplementedException($response);
        }
        if (503 === $status) {
            throw new \App\Generated\PdpDirectoryClient\Exception\DeleteDirectoryLineIdInstance{idInstance}ServiceUnavailableException($response);
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