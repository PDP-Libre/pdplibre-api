<?php

namespace App\Generated\PdpFlowClient;

class Client extends \App\Generated\PdpFlowClient\Runtime\Client\Client
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
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \App\Generated\PdpFlowClient\Exception\CreateFlowBadRequestException
    * @throws \App\Generated\PdpFlowClient\Exception\CreateFlowUnauthorizedException
    * @throws \App\Generated\PdpFlowClient\Exception\CreateFlowForbiddenException
    * @throws \App\Generated\PdpFlowClient\Exception\CreateFlowInternalServerErrorException
    * @throws \App\Generated\PdpFlowClient\Exception\CreateFlowServiceUnavailableException
    *
    * @return null|\App\Generated\PdpFlowClient\Model\FullFlowInfo|\Psr\Http\Message\ResponseInterface
    */
    public function createFlow(?\App\Generated\PdpFlowClient\Model\V1FlowsPostBody $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PdpFlowClient\Endpoint\CreateFlow($requestBody, $headerParameters), $fetch);
    }
    /**
    * Retrieves a set of flows matching the provided search criteria:
     - When setting flowId, do not specify other criteria
     - Need at least one criterion to be specified
     - Assuming a logical AND when combining criteria
     - Assuming a logical OR for criteria allowing a list of values
    >  
    Pagination works with pages:
     - In the request, provide the page to be returned
     - In the response, the total count of items
    
    *
    * @param null|\App\Generated\PdpFlowClient\Model\SearchFlowParams $requestBody 
    * @param array $headerParameters {
    *     @var string $Request-Id Header parameter used to correlate logs from several components
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \App\Generated\PdpFlowClient\Exception\SearchFlowBadRequestException
    * @throws \App\Generated\PdpFlowClient\Exception\SearchFlowUnauthorizedException
    * @throws \App\Generated\PdpFlowClient\Exception\SearchFlowForbiddenException
    * @throws \App\Generated\PdpFlowClient\Exception\SearchFlowInternalServerErrorException
    * @throws \App\Generated\PdpFlowClient\Exception\SearchFlowServiceUnavailableException
    *
    * @return null|\App\Generated\PdpFlowClient\Model\SearchFlowContent|\Psr\Http\Message\ResponseInterface
    */
    public function searchFlow(?\App\Generated\PdpFlowClient\Model\SearchFlowParams $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PdpFlowClient\Endpoint\SearchFlow($requestBody, $headerParameters), $fetch);
    }
    /**
    * Download a file related to a given flow:
     - an invoice
     - a life cycle
     - an e-reporting
    
    *
    * @param string $flowId Flow identifier
    * @param array $queryParameters {
    *     @var string $docType This parameter allows to provide the type of file to be uploaded, can be either one:
     - Original: the document that has been initially sent/provided by the emitter
     - Converted: the document that has been optionally converted by the system
     - ReadableView: the document that has been optionally generated as the readable file
     - Attachment: one of the attached documents, provide the optional index if needed
    
    *     @var int $docIndex If docType is an Attachment and in case there are several attached documents, it says which one to address
    
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/octet-stream|application/json
    * @throws \App\Generated\PdpFlowClient\Exception\GetFlowBadRequestException
    * @throws \App\Generated\PdpFlowClient\Exception\GetFlowUnauthorizedException
    * @throws \App\Generated\PdpFlowClient\Exception\GetFlowForbiddenException
    * @throws \App\Generated\PdpFlowClient\Exception\GetFlowNotFoundException
    * @throws \App\Generated\PdpFlowClient\Exception\GetFlowInternalServerErrorException
    * @throws \App\Generated\PdpFlowClient\Exception\GetFlowServiceUnavailableException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function getFlow(string $flowId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \App\Generated\PdpFlowClient\Endpoint\GetFlow($flowId, $queryParameters, $accept), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \App\Generated\PdpFlowClient\Exception\GetHealthInternalServerErrorException
     * @throws \App\Generated\PdpFlowClient\Exception\GetHealthServiceUnavailableException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getHealth(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PdpFlowClient\Endpoint\GetHealth(), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUriFactory()->createUri('https://{sub-domain}.{domain}/flow-service');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \App\Generated\PdpFlowClient\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}