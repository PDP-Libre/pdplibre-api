<?php

namespace App\Generated\PdpDirectoryClient\Model;

class SearchDirectoryLineFilters extends \ArrayObject
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
     * @var SearchDirectoryLineFiltersAddressingIdentifier
     */
    protected $addressingIdentifier;
    /**
     * 
     *
     * @var SearchDirectoryLineFiltersPlatformRegistrationNumber
     */
    protected $platformRegistrationNumber;
    /**
     * 
     *
     * @var SearchSirenFiltersSiren
     */
    protected $siren;
    /**
     * 
     *
     * @var SearchSiretFiltersSiret
     */
    protected $siret;
    /**
     * 
     *
     * @var RoutingCodeSearchFiltersRoutingIdentifier
     */
    protected $routingIdentifier;
    /**
     * 
     *
     * @var SearchDirectoryLineFiltersAddressingSuffix
     */
    protected $addressingSuffix;
    /**
     * 
     *
     * @var SearchSirenFiltersHistory
     */
    protected $history;
    /**
     * 
     *
     * @return SearchDirectoryLineFiltersAddressingIdentifier
     */
    public function getAddressingIdentifier(): SearchDirectoryLineFiltersAddressingIdentifier
    {
        return $this->addressingIdentifier;
    }
    /**
     * 
     *
     * @param SearchDirectoryLineFiltersAddressingIdentifier $addressingIdentifier
     *
     * @return self
     */
    public function setAddressingIdentifier(SearchDirectoryLineFiltersAddressingIdentifier $addressingIdentifier): self
    {
        $this->initialized['addressingIdentifier'] = true;
        $this->addressingIdentifier = $addressingIdentifier;
        return $this;
    }
    /**
     * 
     *
     * @return SearchDirectoryLineFiltersPlatformRegistrationNumber
     */
    public function getPlatformRegistrationNumber(): SearchDirectoryLineFiltersPlatformRegistrationNumber
    {
        return $this->platformRegistrationNumber;
    }
    /**
     * 
     *
     * @param SearchDirectoryLineFiltersPlatformRegistrationNumber $platformRegistrationNumber
     *
     * @return self
     */
    public function setPlatformRegistrationNumber(SearchDirectoryLineFiltersPlatformRegistrationNumber $platformRegistrationNumber): self
    {
        $this->initialized['platformRegistrationNumber'] = true;
        $this->platformRegistrationNumber = $platformRegistrationNumber;
        return $this;
    }
    /**
     * 
     *
     * @return SearchSirenFiltersSiren
     */
    public function getSiren(): SearchSirenFiltersSiren
    {
        return $this->siren;
    }
    /**
     * 
     *
     * @param SearchSirenFiltersSiren $siren
     *
     * @return self
     */
    public function setSiren(SearchSirenFiltersSiren $siren): self
    {
        $this->initialized['siren'] = true;
        $this->siren = $siren;
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
     * @return SearchDirectoryLineFiltersAddressingSuffix
     */
    public function getAddressingSuffix(): SearchDirectoryLineFiltersAddressingSuffix
    {
        return $this->addressingSuffix;
    }
    /**
     * 
     *
     * @param SearchDirectoryLineFiltersAddressingSuffix $addressingSuffix
     *
     * @return self
     */
    public function setAddressingSuffix(SearchDirectoryLineFiltersAddressingSuffix $addressingSuffix): self
    {
        $this->initialized['addressingSuffix'] = true;
        $this->addressingSuffix = $addressingSuffix;
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