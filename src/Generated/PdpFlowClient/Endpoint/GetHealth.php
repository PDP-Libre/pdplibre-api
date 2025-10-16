<?php

namespace App\Generated\PdpFlowClient\Endpoint;

class GetHealth extends \App\Generated\PdpFlowClient\Runtime\Client\BaseEndpoint implements \App\Generated\PdpFlowClient\Runtime\Client\Endpoint
{
    use \App\Generated\PdpFlowClient\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/v1/healthcheck';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \App\Generated\PdpFlowClient\Exception\GetHealthInternalServerErrorException
     * @throws \App\Generated\PdpFlowClient\Exception\GetHealthServiceUnavailableException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \App\Generated\PdpFlowClient\Exception\GetHealthInternalServerErrorException($serializer->deserialize($body, 'App\Generated\PdpFlowClient\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \App\Generated\PdpFlowClient\Exception\GetHealthServiceUnavailableException($serializer->deserialize($body, 'App\Generated\PdpFlowClient\Model\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['BearerAuth'];
    }
}