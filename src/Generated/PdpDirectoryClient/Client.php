<?php

namespace PdpLibre\Generated\PdpFPdpDirectoryClient;

class Client extends \PdpLibre\Generated\PdpFPdpDirectoryClient\Runtime\Client\Client
{
    /**
     * Multi-criteria company search.
     *
     * @param null|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSiren $requestBody 
     * @param array $headerParameters {
     *     @var string $Accept-Language Specifies the language in which the resource is requested.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|application/problem+json
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostSirenSearchBadRequestException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostSirenSearchUnauthorizedException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostSirenSearchForbiddenException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostSirenSearchNotFoundException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostSirenSearchRequestTimeoutException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostSirenSearchUnprocessableEntityException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostSirenSearchTooManyRequestsException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostSirenSearchInternalServerErrorException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostSirenSearchNotImplementedException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostSirenSearchServiceUnavailableException
     *
     * @return null|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SirenSearchPost200Response|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function postSirenSearch(?\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSiren $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \PdpLibre\Generated\PdpFPdpDirectoryClient\Endpoint\PostSirenSearch($requestBody, $headerParameters, $accept), $fetch);
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
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSirenCodeInseeBySirenBadRequestException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSirenCodeInseeBySirenUnauthorizedException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSirenCodeInseeBySirenForbiddenException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSirenCodeInseeBySirenNotFoundException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSirenCodeInseeBySirenRequestTimeoutException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSirenCodeInseeBySirenUnprocessableEntityException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSirenCodeInseeBySirenTooManyRequestsException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSirenCodeInseeBySirenInternalServerErrorException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSirenCodeInseeBySirenNotImplementedException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSirenCodeInseeBySirenServiceUnavailableException
     *
     * @return null|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\LegalUnitPayloadHistory|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getSirenCodeInseeBySiren(string $siren, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \PdpLibre\Generated\PdpFPdpDirectoryClient\Endpoint\GetSirenCodeInseeBySiren($siren, $queryParameters, $headerParameters, $accept), $fetch);
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
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSirenIdInstance{idInstance}BadRequestException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSirenIdInstance{idInstance}UnauthorizedException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSirenIdInstance{idInstance}ForbiddenException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSirenIdInstance{idInstance}NotFoundException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSirenIdInstance{idInstance}RequestTimeoutException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSirenIdInstance{idInstance}UnprocessableEntityException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSirenIdInstance{idInstance}TooManyRequestsException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSirenIdInstance{idInstance}InternalServerErrorException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSirenIdInstance{idInstance}NotImplementedException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSirenIdInstance{idInstance}ServiceUnavailableException
     *
     * @return null|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\LegalUnitPayloadHistory|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getSirenIdInstance{idInstance}(int $idInstance, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \PdpLibre\Generated\PdpFPdpDirectoryClient\Endpoint\GetSirenIdInstance{idInstance}($idInstance, $queryParameters, $headerParameters, $accept), $fetch);
    }
    /**
     * Multi-criteria search for facilities.
     *
     * @param null|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSiret $requestBody 
     * @param array $headerParameters {
     *     @var string $Accept-Language Specifies the language in which the resource is requested.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|application/problem+json
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostSiretSearchBadRequestException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostSiretSearchUnauthorizedException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostSiretSearchForbiddenException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostSiretSearchNotFoundException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostSiretSearchRequestTimeoutException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostSiretSearchUnprocessableEntityException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostSiretSearchTooManyRequestsException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostSiretSearchInternalServerErrorException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostSiretSearchNotImplementedException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostSiretSearchServiceUnavailableException
     *
     * @return null|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SiretSearchPost200Response|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function postSiretSearch(?\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSiret $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \PdpLibre\Generated\PdpFPdpDirectoryClient\Endpoint\PostSiretSearch($requestBody, $headerParameters, $accept), $fetch);
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
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSiretCodeInseeBySiretBadRequestException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSiretCodeInseeBySiretUnauthorizedException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSiretCodeInseeBySiretForbiddenException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSiretCodeInseeBySiretNotFoundException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSiretCodeInseeBySiretRequestTimeoutException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSiretCodeInseeBySiretUnprocessableEntityException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSiretCodeInseeBySiretTooManyRequestsException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSiretCodeInseeBySiretInternalServerErrorException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSiretCodeInseeBySiretNotImplementedException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSiretCodeInseeBySiretServiceUnavailableException
     *
     * @return null|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\FacilityPayloadHistoryUle|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getSiretCodeInseeBySiret(string $siret, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \PdpLibre\Generated\PdpFPdpDirectoryClient\Endpoint\GetSiretCodeInseeBySiret($siret, $queryParameters, $headerParameters, $accept), $fetch);
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
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSiretIdInstance{idInstance}BadRequestException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSiretIdInstance{idInstance}UnauthorizedException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSiretIdInstance{idInstance}ForbiddenException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSiretIdInstance{idInstance}NotFoundException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSiretIdInstance{idInstance}RequestTimeoutException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSiretIdInstance{idInstance}UnprocessableEntityException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSiretIdInstance{idInstance}TooManyRequestsException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSiretIdInstance{idInstance}InternalServerErrorException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSiretIdInstance{idInstance}NotImplementedException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetSiretIdInstance{idInstance}ServiceUnavailableException
     *
     * @return null|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\FacilityPayloadHistory|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getSiretIdInstance{idInstance}(int $idInstance, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \PdpLibre\Generated\PdpFPdpDirectoryClient\Endpoint\GetSiretIdInstance{idInstance}($idInstance, $queryParameters, $headerParameters, $accept), $fetch);
    }
    /**
     * Creating a routing code.
     *
     * @param \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\CreateRoutingCodeBody $requestBody 
     * @param array $headerParameters {
     *     @var string $Accept-Language Specifies the language in which the resource is requested.
     *     @var array $PPF-affiliations Indicates the user's active affiliations in SIREN/SIRET/Service format. Only the SIREN is mandatory.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|application/problem+json
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostRoutingCodeBadRequestException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostRoutingCodeUnauthorizedException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostRoutingCodeForbiddenException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostRoutingCodeNotFoundException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostRoutingCodeRequestTimeoutException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostRoutingCodeUnprocessableEntityException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostRoutingCodeTooManyRequestsException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostRoutingCodeInternalServerErrorException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostRoutingCodeNotImplementedException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostRoutingCodeServiceUnavailableException
     *
     * @return null|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\RoutingCodePost201Response|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function postRoutingCode(\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\CreateRoutingCodeBody $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \PdpLibre\Generated\PdpFPdpDirectoryClient\Endpoint\PostRoutingCode($requestBody, $headerParameters, $accept), $fetch);
    }
    /**
     * Search for routing codes that meet all the criteria passed as parameters and return the routing codes in the desired format.
     *
     * @param \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\RoutingCodeSearch $requestBody 
     * @param array $headerParameters {
     *     @var string $Accept-Language Specifies the language in which the resource is requested.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|application/problem+json
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostRoutingCodeSearchBadRequestException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostRoutingCodeSearchUnauthorizedException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostRoutingCodeSearchForbiddenException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostRoutingCodeSearchNotFoundException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostRoutingCodeSearchRequestTimeoutException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostRoutingCodeSearchUnprocessableEntityException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostRoutingCodeSearchTooManyRequestsException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostRoutingCodeSearchInternalServerErrorException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostRoutingCodeSearchNotImplementedException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostRoutingCodeSearchServiceUnavailableException
     *
     * @return null|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\RoutingCodeSearchPost200Response|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function postRoutingCodeSearch(\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\RoutingCodeSearch $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \PdpLibre\Generated\PdpFPdpDirectoryClient\Endpoint\PostRoutingCodeSearch($requestBody, $headerParameters, $accept), $fetch);
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
     * @return null|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\RoutingCodePayloadHistoryLegalUnitFacility|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getRoutingCodeSiretBySiretCode{routingIdentifier}(string $siret, string $routingIdentifier, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \PdpLibre\Generated\PdpFPdpDirectoryClient\Endpoint\GetRoutingCodeSiretBySiretCode{routingIdentifier}($siret, $routingIdentifier, $queryParameters, $headerParameters, $accept), $fetch);
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
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetRoutingCodeIdInstance{idInstance}BadRequestException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetRoutingCodeIdInstance{idInstance}UnauthorizedException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetRoutingCodeIdInstance{idInstance}ForbiddenException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetRoutingCodeIdInstance{idInstance}NotFoundException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetRoutingCodeIdInstance{idInstance}RequestTimeoutException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetRoutingCodeIdInstance{idInstance}UnprocessableEntityException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetRoutingCodeIdInstance{idInstance}TooManyRequestsException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetRoutingCodeIdInstance{idInstance}InternalServerErrorException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetRoutingCodeIdInstance{idInstance}NotImplementedException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetRoutingCodeIdInstance{idInstance}ServiceUnavailableException
     *
     * @return null|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\RoutingCodePayloadHistory|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getRoutingCodeIdInstance{idInstance}(int $idInstance, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \PdpLibre\Generated\PdpFPdpDirectoryClient\Endpoint\GetRoutingCodeIdInstance{idInstance}($idInstance, $queryParameters, $headerParameters, $accept), $fetch);
    }
    /**
     * Partially update a private routing code.
     *
     * @param int $idInstance Corresponds to the instance id of a legal unit.
     * @param \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\UpdatePatchRoutingCodeBody $requestBody 
     * @param array $headerParameters {
     *     @var string $Accept-Language Specifies the language in which the resource is requested.
     *     @var array $PPF-affiliations Indicates the user's active affiliations in SIREN/SIRET/Service format. Only the SIREN is mandatory.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|application/problem+json
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PatchRoutingCodeIdInstance{idInstance}BadRequestException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PatchRoutingCodeIdInstance{idInstance}UnauthorizedException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PatchRoutingCodeIdInstance{idInstance}ForbiddenException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PatchRoutingCodeIdInstance{idInstance}NotFoundException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PatchRoutingCodeIdInstance{idInstance}RequestTimeoutException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PatchRoutingCodeIdInstance{idInstance}UnprocessableEntityException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PatchRoutingCodeIdInstance{idInstance}TooManyRequestsException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PatchRoutingCodeIdInstance{idInstance}InternalServerErrorException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PatchRoutingCodeIdInstance{idInstance}NotImplementedException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PatchRoutingCodeIdInstance{idInstance}ServiceUnavailableException
     *
     * @return null|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\RoutingCodePost201Response|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function patchRoutingCodeIdInstance{idInstance}(int $idInstance, \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\UpdatePatchRoutingCodeBody $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \PdpLibre\Generated\PdpFPdpDirectoryClient\Endpoint\PatchRoutingCodeIdInstance{idInstance}($idInstance, $requestBody, $headerParameters, $accept), $fetch);
    }
    /**
     * Completely update a private routing code.
     *
     * @param int $idInstance Corresponds to the instance id of a legal unit.
     * @param \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\UpdatePutRoutingCodeBody $requestBody 
     * @param array $headerParameters {
     *     @var string $Accept-Language Specifies the language in which the resource is requested.
     *     @var array $PPF-affiliations Indicates the user's active affiliations in SIREN/SIRET/Service format. Only the SIREN is mandatory.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|application/problem+json
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
     * @return null|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\RoutingCodePost201Response|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function putRoutingCodeIdInstance{idInstance}(int $idInstance, \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\UpdatePutRoutingCodeBody $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \PdpLibre\Generated\PdpFPdpDirectoryClient\Endpoint\PutRoutingCodeIdInstance{idInstance}($idInstance, $requestBody, $headerParameters, $accept), $fetch);
    }
    /**
     * Search for directory lines that meet all the criteria passed as parameters and return the results in the desired format.
     *
     * @param null|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchDirectoryLine $requestBody 
     * @param array $headerParameters {
     *     @var string $Accept-Language Specifies the language in which the resource is requested.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|application/problem+json
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostDirectoryLineSearchBadRequestException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostDirectoryLineSearchUnauthorizedException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostDirectoryLineSearchForbiddenException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostDirectoryLineSearchNotFoundException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostDirectoryLineSearchRequestTimeoutException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostDirectoryLineSearchUnprocessableEntityException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostDirectoryLineSearchTooManyRequestsException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostDirectoryLineSearchInternalServerErrorException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostDirectoryLineSearchNotImplementedException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostDirectoryLineSearchServiceUnavailableException
     *
     * @return null|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\DirectoryLineSearchPost200Response|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function postDirectoryLineSearch(?\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchDirectoryLine $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \PdpLibre\Generated\PdpFPdpDirectoryClient\Endpoint\PostDirectoryLineSearch($requestBody, $headerParameters, $accept), $fetch);
    }
    /**
     * Creation of a new directory line for a SIREN, a SIRET or a ROUTING CODE.
     *
     * @param \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\CreateDirectoryLineBody $requestBody 
     * @param array $headerParameters {
     *     @var string $Accept-Language Specifies the language in which the resource is requested.
     *     @var array $PPF-affiliations Indicates the user's active affiliations in SIREN/SIRET/Service format. Only the SIREN is mandatory.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|application/problem+json
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostDirectoryLineBadRequestException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostDirectoryLineUnauthorizedException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostDirectoryLineForbiddenException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostDirectoryLineNotFoundException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostDirectoryLineRequestTimeoutException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostDirectoryLineUnprocessableEntityException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostDirectoryLineTooManyRequestsException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostDirectoryLineInternalServerErrorException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostDirectoryLineNotImplementedException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PostDirectoryLineServiceUnavailableException
     *
     * @return null|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\DirectoryLinePost201Response|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function postDirectoryLine(\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\CreateDirectoryLineBody $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \PdpLibre\Generated\PdpFPdpDirectoryClient\Endpoint\PostDirectoryLine($requestBody, $headerParameters, $accept), $fetch);
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
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetDirectoryLineCode{addressingIdentifier}BadRequestException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetDirectoryLineCode{addressingIdentifier}UnauthorizedException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetDirectoryLineCode{addressingIdentifier}ForbiddenException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetDirectoryLineCode{addressingIdentifier}NotFoundException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetDirectoryLineCode{addressingIdentifier}RequestTimeoutException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetDirectoryLineCode{addressingIdentifier}UnprocessableEntityException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetDirectoryLineCode{addressingIdentifier}TooManyRequestsException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetDirectoryLineCode{addressingIdentifier}InternalServerErrorException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetDirectoryLineCode{addressingIdentifier}NotImplementedException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetDirectoryLineCode{addressingIdentifier}ServiceUnavailableException
     *
     * @return null|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCode|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getDirectoryLineCode{addressingIdentifier}(string $addressingIdentifier, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \PdpLibre\Generated\PdpFPdpDirectoryClient\Endpoint\GetDirectoryLineCode{addressingIdentifier}($addressingIdentifier, $queryParameters, $headerParameters, $accept), $fetch);
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
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\DeleteDirectoryLineIdInstance{idInstance}BadRequestException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\DeleteDirectoryLineIdInstance{idInstance}UnauthorizedException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\DeleteDirectoryLineIdInstance{idInstance}ForbiddenException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\DeleteDirectoryLineIdInstance{idInstance}NotFoundException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\DeleteDirectoryLineIdInstance{idInstance}RequestTimeoutException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\DeleteDirectoryLineIdInstance{idInstance}UnprocessableEntityException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\DeleteDirectoryLineIdInstance{idInstance}TooManyRequestsException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\DeleteDirectoryLineIdInstance{idInstance}InternalServerErrorException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\DeleteDirectoryLineIdInstance{idInstance}NotImplementedException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\DeleteDirectoryLineIdInstance{idInstance}ServiceUnavailableException
     *
     * @return null|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function deleteDirectoryLineIdInstance{idInstance}(int $idInstance, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PdpLibre\Generated\PdpFPdpDirectoryClient\Endpoint\DeleteDirectoryLineIdInstance{idInstance}($idInstance, $headerParameters), $fetch);
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
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetDirectoryLineIdInstance{idInstance}BadRequestException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetDirectoryLineIdInstance{idInstance}UnauthorizedException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetDirectoryLineIdInstance{idInstance}ForbiddenException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetDirectoryLineIdInstance{idInstance}NotFoundException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetDirectoryLineIdInstance{idInstance}RequestTimeoutException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetDirectoryLineIdInstance{idInstance}UnprocessableEntityException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetDirectoryLineIdInstance{idInstance}TooManyRequestsException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetDirectoryLineIdInstance{idInstance}InternalServerErrorException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetDirectoryLineIdInstance{idInstance}NotImplementedException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetDirectoryLineIdInstance{idInstance}ServiceUnavailableException
     *
     * @return null|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\DirectoryLinePayloadHistory|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getDirectoryLineIdInstance{idInstance}(int $idInstance, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \PdpLibre\Generated\PdpFPdpDirectoryClient\Endpoint\GetDirectoryLineIdInstance{idInstance}($idInstance, $queryParameters, $headerParameters, $accept), $fetch);
    }
    /**
     * Partially updates a directory line.
     *
     * @param int $idInstance Corresponds to the instance id of a legal unit.
     * @param \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\UpdatePatchDirectoryLineBody $requestBody 
     * @param array $headerParameters {
     *     @var string $Accept-Language Specifies the language in which the resource is requested.
     *     @var array $PPF-affiliations Indicates the user's active affiliations in SIREN/SIRET/Service format. Only the SIREN is mandatory.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|application/problem+json
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PatchDirectoryLineIdInstance{idInstance}BadRequestException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PatchDirectoryLineIdInstance{idInstance}UnauthorizedException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PatchDirectoryLineIdInstance{idInstance}ForbiddenException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PatchDirectoryLineIdInstance{idInstance}NotFoundException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PatchDirectoryLineIdInstance{idInstance}RequestTimeoutException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PatchDirectoryLineIdInstance{idInstance}UnprocessableEntityException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PatchDirectoryLineIdInstance{idInstance}TooManyRequestsException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PatchDirectoryLineIdInstance{idInstance}InternalServerErrorException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PatchDirectoryLineIdInstance{idInstance}NotImplementedException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PatchDirectoryLineIdInstance{idInstance}ServiceUnavailableException
     *
     * @return null|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\DirectoryLinePost201Response|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function patchDirectoryLineIdInstance{idInstance}(int $idInstance, \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\UpdatePatchDirectoryLineBody $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \PdpLibre\Generated\PdpFPdpDirectoryClient\Endpoint\PatchDirectoryLineIdInstance{idInstance}($idInstance, $requestBody, $headerParameters, $accept), $fetch);
    }
    /**
     * Completely update a directory line.
     *
     * @param int $idInstance Corresponds to the instance id of a legal unit.
     * @param \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\UpdatePutDirectoryLineBody $requestBody 
     * @param array $headerParameters {
     *     @var string $Accept-Language Specifies the language in which the resource is requested.
     *     @var array $PPF-affiliations Indicates the user's active affiliations in SIREN/SIRET/Service format. Only the SIREN is mandatory.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/json|application/problem+json
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PutDirectoryLineIdInstance{idInstance}BadRequestException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PutDirectoryLineIdInstance{idInstance}UnauthorizedException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PutDirectoryLineIdInstance{idInstance}ForbiddenException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PutDirectoryLineIdInstance{idInstance}NotFoundException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PutDirectoryLineIdInstance{idInstance}RequestTimeoutException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PutDirectoryLineIdInstance{idInstance}UnprocessableEntityException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PutDirectoryLineIdInstance{idInstance}TooManyRequestsException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PutDirectoryLineIdInstance{idInstance}InternalServerErrorException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PutDirectoryLineIdInstance{idInstance}NotImplementedException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\PutDirectoryLineIdInstance{idInstance}ServiceUnavailableException
     *
     * @return null|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\DirectoryLinePost201Response|\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function putDirectoryLineIdInstance{idInstance}(int $idInstance, \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\UpdatePutDirectoryLineBody $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \PdpLibre\Generated\PdpFPdpDirectoryClient\Endpoint\PutDirectoryLineIdInstance{idInstance}($idInstance, $requestBody, $headerParameters, $accept), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetHealthInternalServerErrorException
     * @throws \PdpLibre\Generated\PdpFPdpDirectoryClient\Exception\GetHealthServiceUnavailableException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getHealth(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \PdpLibre\Generated\PdpFPdpDirectoryClient\Endpoint\GetHealth(), $fetch);
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
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}