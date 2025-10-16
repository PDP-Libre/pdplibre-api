<?php

namespace PdpLibre\Generated\PdpFPdpDirectoryClient\Model;

class SearchSiretFilters extends \ArrayObject
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
     * @var SearchSiretFiltersSiret
     */
    protected $siret;
    /**
     * 
     *
     * @var SearchSirenFiltersSiren
     */
    protected $siren;
    /**
     * 
     *
     * @var SearchSiretFiltersFacilityType
     */
    protected $facilityType;
    /**
     * 
     *
     * @var SearchSiretFiltersName
     */
    protected $name;
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
     * @var SearchSiretFiltersCountrySubdivision
     */
    protected $countrySubdivision;
    /**
     * 
     *
     * @var SearchSiretFiltersLocality
     */
    protected $locality;
    /**
     * 
     *
     * @var SearchSiretFiltersAdministrativeStatus
     */
    protected $administrativeStatus;
    /**
     * 
     *
     * @var SearchSiretFiltersHistory
     */
    protected $history;
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
     * @return SearchSiretFiltersFacilityType
     */
    public function getFacilityType(): SearchSiretFiltersFacilityType
    {
        return $this->facilityType;
    }
    /**
     * 
     *
     * @param SearchSiretFiltersFacilityType $facilityType
     *
     * @return self
     */
    public function setFacilityType(SearchSiretFiltersFacilityType $facilityType): self
    {
        $this->initialized['facilityType'] = true;
        $this->facilityType = $facilityType;
        return $this;
    }
    /**
     * 
     *
     * @return SearchSiretFiltersName
     */
    public function getName(): SearchSiretFiltersName
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param SearchSiretFiltersName $name
     *
     * @return self
     */
    public function setName(SearchSiretFiltersName $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
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
     * @return SearchSiretFiltersCountrySubdivision
     */
    public function getCountrySubdivision(): SearchSiretFiltersCountrySubdivision
    {
        return $this->countrySubdivision;
    }
    /**
     * 
     *
     * @param SearchSiretFiltersCountrySubdivision $countrySubdivision
     *
     * @return self
     */
    public function setCountrySubdivision(SearchSiretFiltersCountrySubdivision $countrySubdivision): self
    {
        $this->initialized['countrySubdivision'] = true;
        $this->countrySubdivision = $countrySubdivision;
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
     * @return SearchSiretFiltersAdministrativeStatus
     */
    public function getAdministrativeStatus(): SearchSiretFiltersAdministrativeStatus
    {
        return $this->administrativeStatus;
    }
    /**
     * 
     *
     * @param SearchSiretFiltersAdministrativeStatus $administrativeStatus
     *
     * @return self
     */
    public function setAdministrativeStatus(SearchSiretFiltersAdministrativeStatus $administrativeStatus): self
    {
        $this->initialized['administrativeStatus'] = true;
        $this->administrativeStatus = $administrativeStatus;
        return $this;
    }
    /**
     * 
     *
     * @return SearchSiretFiltersHistory
     */
    public function getHistory(): SearchSiretFiltersHistory
    {
        return $this->history;
    }
    /**
     * 
     *
     * @param SearchSiretFiltersHistory $history
     *
     * @return self
     */
    public function setHistory(SearchSiretFiltersHistory $history): self
    {
        $this->initialized['history'] = true;
        $this->history = $history;
        return $this;
    }
}