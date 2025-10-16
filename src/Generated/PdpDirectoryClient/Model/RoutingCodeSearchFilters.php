<?php

namespace PdpLibre\Generated\PdpFPdpDirectoryClient\Model;

class RoutingCodeSearchFilters extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var RoutingCodeSearchFiltersRoutingIdentifier
     */
    protected $routingIdentifier;
    /**
     * 
     *
     * @var SearchSiretFiltersSiret
     */
    protected $siret;
    /**
     * 
     *
     * @var RoutingCodeSearchFiltersRoutingCodeName
     */
    protected $routingCodeName;
    /**
     * 
     *
     * @var RoutingCodeSearchFiltersAdministrativeStatus
     */
    protected $administrativeStatus;
    /**
     * 
     *
     * @var SearchSiretFiltersAddressLines
     */
    protected $addressLines;
    /**
     * 
     *
     * @var SearchSiretFiltersPostalCode
     */
    protected $postalCode;
    /**
     * 
     *
     * @var SearchSiretFiltersLocality
     */
    protected $locality;
    /**
     * 
     *
     * @var SearchSirenFiltersHistory
     */
    protected $history;
    /**
     * 
     *
     * @return RoutingCodeSearchFiltersRoutingIdentifier
     */
    public function getRoutingIdentifier(): RoutingCodeSearchFiltersRoutingIdentifier
    {
        return $this->routingIdentifier;
    }
    /**
     * 
     *
     * @param RoutingCodeSearchFiltersRoutingIdentifier $routingIdentifier
     *
     * @return self
     */
    public function setRoutingIdentifier(RoutingCodeSearchFiltersRoutingIdentifier $routingIdentifier): self
    {
        $this->initialized['routingIdentifier'] = true;
        $this->routingIdentifier = $routingIdentifier;
        return $this;
    }
    /**
     * 
     *
     * @return SearchSiretFiltersSiret
     */
    public function getSiret(): SearchSiretFiltersSiret
    {
        return $this->siret;
    }
    /**
     * 
     *
     * @param SearchSiretFiltersSiret $siret
     *
     * @return self
     */
    public function setSiret(SearchSiretFiltersSiret $siret): self
    {
        $this->initialized['siret'] = true;
        $this->siret = $siret;
        return $this;
    }
    /**
     * 
     *
     * @return RoutingCodeSearchFiltersRoutingCodeName
     */
    public function getRoutingCodeName(): RoutingCodeSearchFiltersRoutingCodeName
    {
        return $this->routingCodeName;
    }
    /**
     * 
     *
     * @param RoutingCodeSearchFiltersRoutingCodeName $routingCodeName
     *
     * @return self
     */
    public function setRoutingCodeName(RoutingCodeSearchFiltersRoutingCodeName $routingCodeName): self
    {
        $this->initialized['routingCodeName'] = true;
        $this->routingCodeName = $routingCodeName;
        return $this;
    }
    /**
     * 
     *
     * @return RoutingCodeSearchFiltersAdministrativeStatus
     */
    public function getAdministrativeStatus(): RoutingCodeSearchFiltersAdministrativeStatus
    {
        return $this->administrativeStatus;
    }
    /**
     * 
     *
     * @param RoutingCodeSearchFiltersAdministrativeStatus $administrativeStatus
     *
     * @return self
     */
    public function setAdministrativeStatus(RoutingCodeSearchFiltersAdministrativeStatus $administrativeStatus): self
    {
        $this->initialized['administrativeStatus'] = true;
        $this->administrativeStatus = $administrativeStatus;
        return $this;
    }
    /**
     * 
     *
     * @return SearchSiretFiltersAddressLines
     */
    public function getAddressLines(): SearchSiretFiltersAddressLines
    {
        return $this->addressLines;
    }
    /**
     * 
     *
     * @param SearchSiretFiltersAddressLines $addressLines
     *
     * @return self
     */
    public function setAddressLines(SearchSiretFiltersAddressLines $addressLines): self
    {
        $this->initialized['addressLines'] = true;
        $this->addressLines = $addressLines;
        return $this;
    }
    /**
     * 
     *
     * @return SearchSiretFiltersPostalCode
     */
    public function getPostalCode(): SearchSiretFiltersPostalCode
    {
        return $this->postalCode;
    }
    /**
     * 
     *
     * @param SearchSiretFiltersPostalCode $postalCode
     *
     * @return self
     */
    public function setPostalCode(SearchSiretFiltersPostalCode $postalCode): self
    {
        $this->initialized['postalCode'] = true;
        $this->postalCode = $postalCode;
        return $this;
    }
    /**
     * 
     *
     * @return SearchSiretFiltersLocality
     */
    public function getLocality(): SearchSiretFiltersLocality
    {
        return $this->locality;
    }
    /**
     * 
     *
     * @param SearchSiretFiltersLocality $locality
     *
     * @return self
     */
    public function setLocality(SearchSiretFiltersLocality $locality): self
    {
        $this->initialized['locality'] = true;
        $this->locality = $locality;
        return $this;
    }
    /**
     * 
     *
     * @return SearchSirenFiltersHistory
     */
    public function getHistory(): SearchSirenFiltersHistory
    {
        return $this->history;
    }
    /**
     * 
     *
     * @param SearchSirenFiltersHistory $history
     *
     * @return self
     */
    public function setHistory(SearchSirenFiltersHistory $history): self
    {
        $this->initialized['history'] = true;
        $this->history = $history;
        return $this;
    }
}