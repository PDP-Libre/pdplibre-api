<?php

namespace PdpLibre\Generated\PdpFPdpDirectoryClient\Model;

class SearchSirenFilters extends \ArrayObject
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
     * @var SearchSirenFiltersSiren
     */
    protected $siren;
    /**
     * 
     *
     * @var SearchSirenFiltersBusinessName
     */
    protected $businessName;
    /**
     * 
     *
     * @var SearchSirenFiltersEntityType
     */
    protected $entityType;
    /**
     * 
     *
     * @var SearchSirenFiltersAdministrativeStatus
     */
    protected $administrativeStatus;
    /**
     * 
     *
     * @var SearchSirenFiltersHistory
     */
    protected $history;
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
     * @return SearchSirenFiltersBusinessName
     */
    public function getBusinessName(): SearchSirenFiltersBusinessName
    {
        return $this->businessName;
    }
    /**
     * 
     *
     * @param SearchSirenFiltersBusinessName $businessName
     *
     * @return self
     */
    public function setBusinessName(SearchSirenFiltersBusinessName $businessName): self
    {
        $this->initialized['businessName'] = true;
        $this->businessName = $businessName;
        return $this;
    }
    /**
     * 
     *
     * @return SearchSirenFiltersEntityType
     */
    public function getEntityType(): SearchSirenFiltersEntityType
    {
        return $this->entityType;
    }
    /**
     * 
     *
     * @param SearchSirenFiltersEntityType $entityType
     *
     * @return self
     */
    public function setEntityType(SearchSirenFiltersEntityType $entityType): self
    {
        $this->initialized['entityType'] = true;
        $this->entityType = $entityType;
        return $this;
    }
    /**
     * 
     *
     * @return SearchSirenFiltersAdministrativeStatus
     */
    public function getAdministrativeStatus(): SearchSirenFiltersAdministrativeStatus
    {
        return $this->administrativeStatus;
    }
    /**
     * 
     *
     * @param SearchSirenFiltersAdministrativeStatus $administrativeStatus
     *
     * @return self
     */
    public function setAdministrativeStatus(SearchSirenFiltersAdministrativeStatus $administrativeStatus): self
    {
        $this->initialized['administrativeStatus'] = true;
        $this->administrativeStatus = $administrativeStatus;
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