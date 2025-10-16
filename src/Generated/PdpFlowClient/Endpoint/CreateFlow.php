<?php

namespace App\Generated\PdpFlowClient\Endpoint;

class CreateFlow extends \App\Generated\PdpFlowClient\Runtime\Client\BaseEndpoint implements \App\Generated\PdpFlowClient\Runtime\Client\Endpoint
{
    /**
    * Submit a flow. A flow is a single-invoice file, with :
     - an XML/PDF file with the data of the invoice
    
    The flow is created with a `flowInfo` object, allowing to qualify the flow.
     
    A flow can be :
     - an invoice (CII, UBL, Factur-X,...) 
     - a lifecycle (CDAR) 
     - or a e-reporting file
    
    *
    * @param null|\App\Generated\PdpFlowClient\Model\V1FlowsPostBody $requestBody 
    * @param array $headerParameters {
    *     @var string $Request-Id Header parameter used to correlate logs from several components
    * }
    */
    public function __construct(?\App\Generated\PdpFlowClient\Model\V1FlowsPostBody $requestBody = null, array $headerParameters = [])
    {
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }
    use \App\Generated\PdpFlowClient\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/v1/flows';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \App\Generated\PdpFlowClient\Model\V1FlowsPostBody) {
            $bodyBuilder = new \Http\Message\MultipartStream\MultipartStreamBuilder($streamFactory);
            $formParameters = $serializer->normalize($this->body, 'json');
            foreach ($formParameters as $key => $value) {
                $value = is_int($value) ? (string) $value : $value;
                $bodyBuilder->addResource($key, $value);
            }
            return [['Content-Type' => ['multipart/form-data; boundary="' . ($bodyBuilder->getBoundary() . '"')]], $bodyBuilder->build()];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['Request-Id']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('Request-Id', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \App\Generated\PdpFlowClient\Exception\CreateFlowBadRequestException
     * @throws \App\Generated\PdpFlowClient\Exception\CreateFlowUnauthorizedException
     * @throws \App\Generated\PdpFlowClient\Exception\CreateFlowForbiddenException
     * @throws \App\Generated\PdpFlowClient\Exception\CreateFlowInternalServerErrorException
     * @throws \App\Generated\PdpFlowClient\Exception\CreateFlowServiceUnavailableException
     *
     * @return null|\App\Generated\PdpFlowClient\Model\FullFlowInfo
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (202 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'App\Generated\PdpFlowClient\Model\FullFlowInfo', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \App\Generated\PdpFlowClient\Exception\CreateFlowBadRequestException($serializer->deserialize($body, 'App\Generated\PdpFlowClient\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \App\Generated\PdpFlowClient\Exception\CreateFlowUnauthorizedException($serializer->deserialize($body, 'App\Generated\PdpFlowClient\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \App\Generated\PdpFlowClient\Exception\CreateFlowForbiddenException($serializer->deserialize($body, 'App\Generated\PdpFlowClient\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \App\Generated\PdpFlowClient\Exception\CreateFlowInternalServerErrorException($serializer->deserialize($body, 'App\Generated\PdpFlowClient\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \App\Generated\PdpFlowClient\Exception\CreateFlowServiceUnavailableException($serializer->deserialize($body, 'App\Generated\PdpFlowClient\Model\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['BearerAuth'];
    }
}