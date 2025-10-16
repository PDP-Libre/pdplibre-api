<?php

namespace App\Generated\PdpDirectoryClient;

class Client extends \App\Generated\PdpDirectoryClient\Runtime\Client\Client
{
    /**
     * Multi-criteria company search.
     *
     * @param null|\App\Generated\PdpDirectoryClient\Model\SearchSiren $requestBody
     * @param array $headerParameters {
     *     @var string $Accept-Language Specifies the language in which the resource is requested.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|application/problem+json
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostSirenSearchBadRequestException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostSirenSearchUnauthorizedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostSirenSearchForbiddenException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostSirenSearchNotFoundException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostSirenSearchRequestTimeoutException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostSirenSearchUnprocessableEntityException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostSirenSearchTooManyRequestsException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostSirenSearchInternalServerErrorException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostSirenSearchNotImplementedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostSirenSearchServiceUnavailableException
     *
     * @return null|\App\Generated\PdpDirectoryClient\Model\SirenSearchPost200Response|\App\Generated\PdpDirectoryClient\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function postSirenSearch(?\App\Generated\PdpDirectoryClient\Model\SearchSiren $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \App\Generated\PdpDirectoryClient\Endpoint\PostSirenSearch($requestBody, $headerParameters, $accept), $fetch);
    }
    /**
     * Returns the details of a company (legal unit) identified by the SIREN number passed as a parameter.
     *
     * @param string $siren Corresponds to the SIREN number of a legal unit.
     * @param array $queryParameters {
     *     @var string $observationDate When the observation date is indicated, the information in effect on that date is returned. When it is not indicated, the information in effect on the current date is returned.
     *     @var array $champs Fields of the SIREN resource
     * }
     * @param array $headerParameters {
     *     @var string $Accept-Language Specifies the language in which the resource is requested.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|application/problem+json
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSirenCodeInseeBySirenBadRequestException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSirenCodeInseeBySirenUnauthorizedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSirenCodeInseeBySirenForbiddenException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSirenCodeInseeBySirenNotFoundException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSirenCodeInseeBySirenRequestTimeoutException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSirenCodeInseeBySirenUnprocessableEntityException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSirenCodeInseeBySirenTooManyRequestsException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSirenCodeInseeBySirenInternalServerErrorException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSirenCodeInseeBySirenNotImplementedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSirenCodeInseeBySirenServiceUnavailableException
     *
     * @return null|\App\Generated\PdpDirectoryClient\Model\LegalUnitPayloadHistory|\App\Generated\PdpDirectoryClient\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getSirenCodeInseeBySiren(string $siren, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \App\Generated\PdpDirectoryClient\Endpoint\GetSirenCodeInseeBySiren($siren, $queryParameters, $headerParameters, $accept), $fetch);
    }
    /**
     * Returns the details of a company (legal unit) identified by the id-instance passed as a parameter.
     *
     * @param int $idInstance Corresponds to the instance id of a legal unit.
     * @param array $queryParameters {
     *     @var array $champs Fields of the SIREN resource
     * }
     * @param array $headerParameters {
     *     @var string $Accept-Language Specifies the language in which the resource is requested.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|application/problem+json
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSirenIdInstanceBadRequestException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSirenIdInstanceUnauthorizedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSirenIdInstanceForbiddenException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSirenIdInstanceNotFoundException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSirenIdInstanceRequestTimeoutException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSirenIdInstanceUnprocessableEntityException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSirenIdInstanceTooManyRequestsException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSirenIdInstanceInternalServerErrorException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSirenIdInstanceNotImplementedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSirenIdInstanceServiceUnavailableException
     *
     * @return null|\App\Generated\PdpDirectoryClient\Model\LegalUnitPayloadHistory|\App\Generated\PdpDirectoryClient\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getSirenIdInstance(int $idInstance, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \App\Generated\PdpDirectoryClient\Endpoint\GetSirenIdInstance($idInstance, $queryParameters, $headerParameters, $accept), $fetch);
    }
    /**
     * Multi-criteria search for facilities.
     *
     * @param null|\App\Generated\PdpDirectoryClient\Model\SearchSiret $requestBody
     * @param array $headerParameters {
     *     @var string $Accept-Language Specifies the language in which the resource is requested.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|application/problem+json
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostSiretSearchBadRequestException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostSiretSearchUnauthorizedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostSiretSearchForbiddenException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostSiretSearchNotFoundException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostSiretSearchRequestTimeoutException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostSiretSearchUnprocessableEntityException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostSiretSearchTooManyRequestsException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostSiretSearchInternalServerErrorException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostSiretSearchNotImplementedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostSiretSearchServiceUnavailableException
     *
     * @return null|\App\Generated\PdpDirectoryClient\Model\SiretSearchPost200Response|\App\Generated\PdpDirectoryClient\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function postSiretSearch(?\App\Generated\PdpDirectoryClient\Model\SearchSiret $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \App\Generated\PdpDirectoryClient\Endpoint\PostSiretSearch($requestBody, $headerParameters, $accept), $fetch);
    }
    /**
     * Returns the details of a facility associated to a SIRET.
     *
     * @param string $siret Corresponds to the SIRET number of a facility.
     * @param array $queryParameters {
     *     @var string $observationDate When the observation date is indicated, the information in effect on that date is returned. When it is not indicated, the information in effect on the current date is returned.
     *     @var array $fields Fields of a SIRET resource.
     *     @var array $include Relations to include in the response.
     * }
     * @param array $headerParameters {
     *     @var string $Accept-Language Specifies the language in which the resource is requested.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|application/problem+json
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSiretCodeInseeBySiretBadRequestException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSiretCodeInseeBySiretUnauthorizedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSiretCodeInseeBySiretForbiddenException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSiretCodeInseeBySiretNotFoundException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSiretCodeInseeBySiretRequestTimeoutException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSiretCodeInseeBySiretUnprocessableEntityException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSiretCodeInseeBySiretTooManyRequestsException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSiretCodeInseeBySiretInternalServerErrorException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSiretCodeInseeBySiretNotImplementedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSiretCodeInseeBySiretServiceUnavailableException
     *
     * @return null|\App\Generated\PdpDirectoryClient\Model\FacilityPayloadHistoryUle|\App\Generated\PdpDirectoryClient\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getSiretCodeInseeBySiret(string $siret, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \App\Generated\PdpDirectoryClient\Endpoint\GetSiretCodeInseeBySiret($siret, $queryParameters, $headerParameters, $accept), $fetch);
    }
    /**
     * Returns the details of a facility according to an instance-id.
     *
     * @param int $idInstance Corresponds to the instance id of a legal unit.
     * @param array $queryParameters {
     *     @var array $champs Fields of a SIRET resource.
     * }
     * @param array $headerParameters {
     *     @var string $Accept-Language Specifies the language in which the resource is requested.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|application/problem+json
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSiretIdInstanceBadRequestException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSiretIdInstanceUnauthorizedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSiretIdInstanceForbiddenException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSiretIdInstanceNotFoundException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSiretIdInstanceRequestTimeoutException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSiretIdInstanceUnprocessableEntityException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSiretIdInstanceTooManyRequestsException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSiretIdInstanceInternalServerErrorException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSiretIdInstanceNotImplementedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetSiretIdInstanceServiceUnavailableException
     *
     * @return null|\App\Generated\PdpDirectoryClient\Model\FacilityPayloadHistory|\App\Generated\PdpDirectoryClient\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getSiretIdInstance(int $idInstance, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \App\Generated\PdpDirectoryClient\Endpoint\GetSiretIdInstance($idInstance, $queryParameters, $headerParameters, $accept), $fetch);
    }
    /**
     * Creating a routing code.
     *
     * @param \App\Generated\PdpDirectoryClient\Model\CreateRoutingCodeBody $requestBody
     * @param array $headerParameters {
     *     @var string $Accept-Language Specifies the language in which the resource is requested.
     *     @var array $PPF-affiliations Indicates the user's active affiliations in SIREN/SIRET/Service format. Only the SIREN is mandatory.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|application/problem+json
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostRoutingCodeBadRequestException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostRoutingCodeUnauthorizedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostRoutingCodeForbiddenException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostRoutingCodeNotFoundException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostRoutingCodeRequestTimeoutException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostRoutingCodeUnprocessableEntityException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostRoutingCodeTooManyRequestsException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostRoutingCodeInternalServerErrorException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostRoutingCodeNotImplementedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostRoutingCodeServiceUnavailableException
     *
     * @return null|\App\Generated\PdpDirectoryClient\Model\RoutingCodePost201Response|\App\Generated\PdpDirectoryClient\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function postRoutingCode(\App\Generated\PdpDirectoryClient\Model\CreateRoutingCodeBody $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \App\Generated\PdpDirectoryClient\Endpoint\PostRoutingCode($requestBody, $headerParameters, $accept), $fetch);
    }
    /**
     * Search for routing codes that meet all the criteria passed as parameters and return the routing codes in the desired format.
     *
     * @param \App\Generated\PdpDirectoryClient\Model\RoutingCodeSearch $requestBody
     * @param array $headerParameters {
     *     @var string $Accept-Language Specifies the language in which the resource is requested.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|application/problem+json
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostRoutingCodeSearchBadRequestException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostRoutingCodeSearchUnauthorizedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostRoutingCodeSearchForbiddenException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostRoutingCodeSearchNotFoundException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostRoutingCodeSearchRequestTimeoutException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostRoutingCodeSearchUnprocessableEntityException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostRoutingCodeSearchTooManyRequestsException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostRoutingCodeSearchInternalServerErrorException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostRoutingCodeSearchNotImplementedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostRoutingCodeSearchServiceUnavailableException
     *
     * @return null|\App\Generated\PdpDirectoryClient\Model\RoutingCodeSearchPost200Response|\App\Generated\PdpDirectoryClient\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function postRoutingCodeSearch(\App\Generated\PdpDirectoryClient\Model\RoutingCodeSearch $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \App\Generated\PdpDirectoryClient\Endpoint\PostRoutingCodeSearch($requestBody, $headerParameters, $accept), $fetch);
    }
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
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|application/problem+json
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetRoutingCodeSiretBySiretCodeBadRequestException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetRoutingCodeSiretBySiretCodeUnauthorizedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetRoutingCodeSiretBySiretCodeForbiddenException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetRoutingCodeSiretBySiretCodeNotFoundException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetRoutingCodeSiretBySiretCodeRequestTimeoutException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetRoutingCodeSiretBySiretCodeUnprocessableEntityException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetRoutingCodeSiretBySiretCodeTooManyRequestsException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetRoutingCodeSiretBySiretCodeInternalServerErrorException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetRoutingCodeSiretBySiretCodeNotImplementedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetRoutingCodeSiretBySiretCodeServiceUnavailableException
     *
     * @return null|\App\Generated\PdpDirectoryClient\Model\RoutingCodePayloadHistoryLegalUnitFacility|\App\Generated\PdpDirectoryClient\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getRoutingCodeSiretBySiretCode(string $siret, string $routingIdentifier, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \App\Generated\PdpDirectoryClient\Endpoint\GetRoutingCodeSiretBySiretCode($siret, $routingIdentifier, $queryParameters, $headerParameters, $accept), $fetch);
    }
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
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|application/problem+json
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetRoutingCodeIdInstanceBadRequestException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetRoutingCodeIdInstanceUnauthorizedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetRoutingCodeIdInstanceForbiddenException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetRoutingCodeIdInstanceNotFoundException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetRoutingCodeIdInstanceRequestTimeoutException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetRoutingCodeIdInstanceUnprocessableEntityException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetRoutingCodeIdInstanceTooManyRequestsException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetRoutingCodeIdInstanceInternalServerErrorException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetRoutingCodeIdInstanceNotImplementedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetRoutingCodeIdInstanceServiceUnavailableException
     *
     * @return null|\App\Generated\PdpDirectoryClient\Model\RoutingCodePayloadHistory|\App\Generated\PdpDirectoryClient\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getRoutingCodeIdInstance(int $idInstance, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \App\Generated\PdpDirectoryClient\Endpoint\GetRoutingCodeIdInstance($idInstance, $queryParameters, $headerParameters, $accept), $fetch);
    }
    /**
     * Partially update a private routing code.
     *
     * @param int $idInstance Corresponds to the instance id of a legal unit.
     * @param \App\Generated\PdpDirectoryClient\Model\UpdatePatchRoutingCodeBody $requestBody
     * @param array $headerParameters {
     *     @var string $Accept-Language Specifies the language in which the resource is requested.
     *     @var array $PPF-affiliations Indicates the user's active affiliations in SIREN/SIRET/Service format. Only the SIREN is mandatory.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|application/problem+json
     * @throws \App\Generated\PdpDirectoryClient\Exception\PatchRoutingCodeIdInstanceBadRequestException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PatchRoutingCodeIdInstanceUnauthorizedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PatchRoutingCodeIdInstanceForbiddenException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PatchRoutingCodeIdInstanceNotFoundException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PatchRoutingCodeIdInstanceRequestTimeoutException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PatchRoutingCodeIdInstanceUnprocessableEntityException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PatchRoutingCodeIdInstanceTooManyRequestsException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PatchRoutingCodeIdInstanceInternalServerErrorException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PatchRoutingCodeIdInstanceNotImplementedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PatchRoutingCodeIdInstanceServiceUnavailableException
     *
     * @return null|\App\Generated\PdpDirectoryClient\Model\RoutingCodePost201Response|\App\Generated\PdpDirectoryClient\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function patchRoutingCodeIdInstance(int $idInstance, \App\Generated\PdpDirectoryClient\Model\UpdatePatchRoutingCodeBody $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \App\Generated\PdpDirectoryClient\Endpoint\PatchRoutingCodeIdInstance($idInstance, $requestBody, $headerParameters, $accept), $fetch);
    }
    /**
     * Completely update a private routing code.
     *
     * @param int $idInstance Corresponds to the instance id of a legal unit.
     * @param \App\Generated\PdpDirectoryClient\Model\UpdatePutRoutingCodeBody $requestBody
     * @param array $headerParameters {
     *     @var string $Accept-Language Specifies the language in which the resource is requested.
     *     @var array $PPF-affiliations Indicates the user's active affiliations in SIREN/SIRET/Service format. Only the SIREN is mandatory.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|application/problem+json
     * @throws \App\Generated\PdpDirectoryClient\Exception\PutRoutingCodeIdInstanceBadRequestException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PutRoutingCodeIdInstanceUnauthorizedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PutRoutingCodeIdInstanceForbiddenException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PutRoutingCodeIdInstanceNotFoundException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PutRoutingCodeIdInstanceRequestTimeoutException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PutRoutingCodeIdInstanceUnprocessableEntityException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PutRoutingCodeIdInstanceTooManyRequestsException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PutRoutingCodeIdInstanceInternalServerErrorException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PutRoutingCodeIdInstanceNotImplementedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PutRoutingCodeIdInstanceServiceUnavailableException
     *
     * @return null|\App\Generated\PdpDirectoryClient\Model\RoutingCodePost201Response|\App\Generated\PdpDirectoryClient\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function putRoutingCodeIdInstance(int $idInstance, \App\Generated\PdpDirectoryClient\Model\UpdatePutRoutingCodeBody $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \App\Generated\PdpDirectoryClient\Endpoint\PutRoutingCodeIdInstance($idInstance, $requestBody, $headerParameters, $accept), $fetch);
    }
    /**
     * Search for directory lines that meet all the criteria passed as parameters and return the results in the desired format.
     *
     * @param null|\App\Generated\PdpDirectoryClient\Model\SearchDirectoryLine $requestBody
     * @param array $headerParameters {
     *     @var string $Accept-Language Specifies the language in which the resource is requested.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|application/problem+json
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineSearchBadRequestException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineSearchUnauthorizedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineSearchForbiddenException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineSearchNotFoundException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineSearchRequestTimeoutException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineSearchUnprocessableEntityException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineSearchTooManyRequestsException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineSearchInternalServerErrorException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineSearchNotImplementedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineSearchServiceUnavailableException
     *
     * @return null|\App\Generated\PdpDirectoryClient\Model\DirectoryLineSearchPost200Response|\App\Generated\PdpDirectoryClient\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function postDirectoryLineSearch(?\App\Generated\PdpDirectoryClient\Model\SearchDirectoryLine $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \App\Generated\PdpDirectoryClient\Endpoint\PostDirectoryLineSearch($requestBody, $headerParameters, $accept), $fetch);
    }
    /**
     * Creation of a new directory line for a SIREN, a SIRET or a ROUTING CODE.
     *
     * @param \App\Generated\PdpDirectoryClient\Model\CreateDirectoryLineBody $requestBody
     * @param array $headerParameters {
     *     @var string $Accept-Language Specifies the language in which the resource is requested.
     *     @var array $PPF-affiliations Indicates the user's active affiliations in SIREN/SIRET/Service format. Only the SIREN is mandatory.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|application/problem+json
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineBadRequestException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineUnauthorizedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineForbiddenException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineNotFoundException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineRequestTimeoutException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineUnprocessableEntityException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineTooManyRequestsException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineInternalServerErrorException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineNotImplementedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PostDirectoryLineServiceUnavailableException
     *
     * @return null|\App\Generated\PdpDirectoryClient\Model\DirectoryLinePost201Response|\App\Generated\PdpDirectoryClient\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function postDirectoryLine(\App\Generated\PdpDirectoryClient\Model\CreateDirectoryLineBody $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \App\Generated\PdpDirectoryClient\Endpoint\PostDirectoryLine($requestBody, $headerParameters, $accept), $fetch);
    }
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
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|application/problem+json
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetDirectoryLineCodeBadRequestException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetDirectoryLineCodeUnauthorizedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetDirectoryLineCodeForbiddenException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetDirectoryLineCodeNotFoundException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetDirectoryLineCodeRequestTimeoutException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetDirectoryLineCodeUnprocessableEntityException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetDirectoryLineCodeTooManyRequestsException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetDirectoryLineCodeInternalServerErrorException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetDirectoryLineCodeNotImplementedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetDirectoryLineCodeServiceUnavailableException
     *
     * @return null|\App\Generated\PdpDirectoryClient\Model\DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCode|\App\Generated\PdpDirectoryClient\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getDirectoryLineCode(string $addressingIdentifier, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \App\Generated\PdpDirectoryClient\Endpoint\GetDirectoryLineCode($addressingIdentifier, $queryParameters, $headerParameters, $accept), $fetch);
    }
    /**
     * Delete a directory line.
     *
     * @param int $idInstance Corresponds to the instance id of a legal unit.
     * @param array $headerParameters {
     *     @var string $Accept-Language Specifies the language in which the resource is requested.
     *     @var array $PPF-affiliations Indicates the user's active affiliations in SIREN/SIRET/Service format. Only the SIREN is mandatory.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \App\Generated\PdpDirectoryClient\Exception\DeleteDirectoryLineIdInstanceBadRequestException
     * @throws \App\Generated\PdpDirectoryClient\Exception\DeleteDirectoryLineIdInstanceUnauthorizedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\DeleteDirectoryLineIdInstanceForbiddenException
     * @throws \App\Generated\PdpDirectoryClient\Exception\DeleteDirectoryLineIdInstanceNotFoundException
     * @throws \App\Generated\PdpDirectoryClient\Exception\DeleteDirectoryLineIdInstanceRequestTimeoutException
     * @throws \App\Generated\PdpDirectoryClient\Exception\DeleteDirectoryLineIdInstanceUnprocessableEntityException
     * @throws \App\Generated\PdpDirectoryClient\Exception\DeleteDirectoryLineIdInstanceTooManyRequestsException
     * @throws \App\Generated\PdpDirectoryClient\Exception\DeleteDirectoryLineIdInstanceInternalServerErrorException
     * @throws \App\Generated\PdpDirectoryClient\Exception\DeleteDirectoryLineIdInstanceNotImplementedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\DeleteDirectoryLineIdInstanceServiceUnavailableException
     *
     * @return null|\App\Generated\PdpDirectoryClient\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function deleteDirectoryLineIdInstance(int $idInstance, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PdpDirectoryClient\Endpoint\DeleteDirectoryLineIdInstance($idInstance, $headerParameters), $fetch);
    }
    /**
     * Retrieve the data from the directory line corresponding to the identifier passed in parameters.
     *
     * @param int $idInstance Corresponds to the instance id of a legal unit.
     * @param array $queryParameters {
     *     @var array $champs Fields of the Directory Line resource.
     * }
     * @param array $headerParameters {
     *     @var string $Accept-Language Specifies the language in which the resource is requested.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|application/problem+json
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetDirectoryLineIdInstanceBadRequestException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetDirectoryLineIdInstanceUnauthorizedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetDirectoryLineIdInstanceForbiddenException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetDirectoryLineIdInstanceNotFoundException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetDirectoryLineIdInstanceRequestTimeoutException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetDirectoryLineIdInstanceUnprocessableEntityException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetDirectoryLineIdInstanceTooManyRequestsException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetDirectoryLineIdInstanceInternalServerErrorException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetDirectoryLineIdInstanceNotImplementedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetDirectoryLineIdInstanceServiceUnavailableException
     *
     * @return null|\App\Generated\PdpDirectoryClient\Model\DirectoryLinePayloadHistory|\App\Generated\PdpDirectoryClient\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getDirectoryLineIdInstance(int $idInstance, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \App\Generated\PdpDirectoryClient\Endpoint\GetDirectoryLineIdInstance($idInstance, $queryParameters, $headerParameters, $accept), $fetch);
    }
    /**
     * Partially updates a directory line.
     *
     * @param int $idInstance Corresponds to the instance id of a legal unit.
     * @param \App\Generated\PdpDirectoryClient\Model\UpdatePatchDirectoryLineBody $requestBody
     * @param array $headerParameters {
     *     @var string $Accept-Language Specifies the language in which the resource is requested.
     *     @var array $PPF-affiliations Indicates the user's active affiliations in SIREN/SIRET/Service format. Only the SIREN is mandatory.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|application/problem+json
     * @throws \App\Generated\PdpDirectoryClient\Exception\PatchDirectoryLineIdInstanceBadRequestException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PatchDirectoryLineIdInstanceUnauthorizedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PatchDirectoryLineIdInstanceForbiddenException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PatchDirectoryLineIdInstanceNotFoundException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PatchDirectoryLineIdInstanceRequestTimeoutException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PatchDirectoryLineIdInstanceUnprocessableEntityException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PatchDirectoryLineIdInstanceTooManyRequestsException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PatchDirectoryLineIdInstanceInternalServerErrorException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PatchDirectoryLineIdInstanceNotImplementedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PatchDirectoryLineIdInstanceServiceUnavailableException
     *
     * @return null|\App\Generated\PdpDirectoryClient\Model\DirectoryLinePost201Response|\App\Generated\PdpDirectoryClient\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function patchDirectoryLineIdInstance(int $idInstance, \App\Generated\PdpDirectoryClient\Model\UpdatePatchDirectoryLineBody $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \App\Generated\PdpDirectoryClient\Endpoint\PatchDirectoryLineIdInstance($idInstance, $requestBody, $headerParameters, $accept), $fetch);
    }
    /**
     * Completely update a directory line.
     *
     * @param int $idInstance Corresponds to the instance id of a legal unit.
     * @param \App\Generated\PdpDirectoryClient\Model\UpdatePutDirectoryLineBody $requestBody
     * @param array $headerParameters {
     *     @var string $Accept-Language Specifies the language in which the resource is requested.
     *     @var array $PPF-affiliations Indicates the user's active affiliations in SIREN/SIRET/Service format. Only the SIREN is mandatory.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|application/problem+json
     * @throws \App\Generated\PdpDirectoryClient\Exception\PutDirectoryLineIdInstanceBadRequestException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PutDirectoryLineIdInstanceUnauthorizedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PutDirectoryLineIdInstanceForbiddenException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PutDirectoryLineIdInstanceNotFoundException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PutDirectoryLineIdInstanceRequestTimeoutException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PutDirectoryLineIdInstanceUnprocessableEntityException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PutDirectoryLineIdInstanceTooManyRequestsException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PutDirectoryLineIdInstanceInternalServerErrorException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PutDirectoryLineIdInstanceNotImplementedException
     * @throws \App\Generated\PdpDirectoryClient\Exception\PutDirectoryLineIdInstanceServiceUnavailableException
     *
     * @return null|\App\Generated\PdpDirectoryClient\Model\DirectoryLinePost201Response|\App\Generated\PdpDirectoryClient\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function putDirectoryLineIdInstance(int $idInstance, \App\Generated\PdpDirectoryClient\Model\UpdatePutDirectoryLineBody $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \App\Generated\PdpDirectoryClient\Endpoint\PutDirectoryLineIdInstance($idInstance, $requestBody, $headerParameters, $accept), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetHealthInternalServerErrorException
     * @throws \App\Generated\PdpDirectoryClient\Exception\GetHealthServiceUnavailableException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getHealth(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \App\Generated\PdpDirectoryClient\Endpoint\GetHealth(), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUriFactory()->createUri('https://{sub-domain}.{domain}/directory-service');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \App\Generated\PdpDirectoryClient\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}
