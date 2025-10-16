<?php

namespace PdpLibre\Generated\PdpFPdpDirectoryClient\Model;

class FacilityPayloadIncluded extends \ArrayObject
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
     * SIRET Number
     *
     * @var string
     */
    protected $siret;
    /**
     * SIREN number
     *
     * @var string
     */
    protected $siren;
    /**
     * business name
     *
     * @var string
     */
    protected $name;
    /**
     * Indicates whether the facility is listed as the main facility or not (P - Main facility / S - Secondary facility)
     *
     * @var string
     */
    protected $facilityType;
    /**
     * Diffusion status of the structure (O - Yes, P - Partially diffusible)
     *
     * @var string
     */
    protected $diffusible;
    /**
     * Facility administrative status (A - Active / F - Closed)
     *
     * @var string
     */
    protected $administrativeStatus;
    /**
     * Wrapper for postal addresses
     *
     * @var AddressRead
     */
    protected $address;
    /**
     * 
     *
     * @var FacilityPayloadHistoryUleB2gAdditionalData
     */
    protected $b2gAdditionalData;
    /**
     * SIRET Number
     *
     * @return string
     */
    public function getSiret(): string
    {
        return $this->siret;
    }
    /**
     * SIRET Number
     *
     * @param string $siret
     *
     * @return self
     */
    public function setSiret(string $siret): self
    {
        $this->initialized['siret'] = true;
        $this->siret = $siret;
        return $this;
    }
    /**
     * SIREN number
     *
     * @return string
     */
    public function getSiren(): string
    {
        return $this->siren;
    }
    /**
     * SIREN number
     *
     * @param string $siren
     *
     * @return self
     */
    public function setSiren(string $siren): self
    {
        $this->initialized['siren'] = true;
        $this->siren = $siren;
        return $this;
    }
    /**
     * business name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * business name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Indicates whether the facility is listed as the main facility or not (P - Main facility / S - Secondary facility)
     *
     * @return string
     */
    public function getFacilityType(): string
    {
        return $this->facilityType;
    }
    /**
     * Indicates whether the facility is listed as the main facility or not (P - Main facility / S - Secondary facility)
     *
     * @param string $facilityType
     *
     * @return self
     */
    public function setFacilityType(string $facilityType): self
    {
        $this->initialized['facilityType'] = true;
        $this->facilityType = $facilityType;
        return $this;
    }
    /**
     * Diffusion status of the structure (O - Yes, P - Partially diffusible)
     *
     * @return string
     */
    public function getDiffusible(): string
    {
        return $this->diffusible;
    }
    /**
     * Diffusion status of the structure (O - Yes, P - Partially diffusible)
     *
     * @param string $diffusible
     *
     * @return self
     */
    public function setDiffusible(string $diffusible): self
    {
        $this->initialized['diffusible'] = true;
        $this->diffusible = $diffusible;
        return $this;
    }
    /**
     * Facility administrative status (A - Active / F - Closed)
     *
     * @return string
     */
    public function getAdministrativeStatus(): string
    {
        return $this->administrativeStatus;
    }
    /**
     * Facility administrative status (A - Active / F - Closed)
     *
     * @param string $administrativeStatus
     *
     * @return self
     */
    public function setAdministrativeStatus(string $administrativeStatus): self
    {
        $this->initialized['administrativeStatus'] = true;
        $this->administrativeStatus = $administrativeStatus;
        return $this;
    }
    /**
     * Wrapper for postal addresses
     *
     * @return AddressRead
     */
    public function getAddress(): AddressRead
    {
        return $this->address;
    }
    /**
     * Wrapper for postal addresses
     *
     * @param AddressRead $address
     *
     * @return self
     */
    public function setAddress(AddressRead $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * 
     *
     * @return FacilityPayloadHistoryUleB2gAdditionalData
     */
    public function getB2gAdditionalData(): FacilityPayloadHistoryUleB2gAdditionalData
    {
        return $this->b2gAdditionalData;
    }
    /**
     * 
     *
     * @param FacilityPayloadHistoryUleB2gAdditionalData $b2gAdditionalData
     *
     * @return self
     */
    public function setB2gAdditionalData(FacilityPayloadHistoryUleB2gAdditionalData $b2gAdditionalData): self
    {
        $this->initialized['b2gAdditionalData'] = true;
        $this->b2gAdditionalData = $b2gAdditionalData;
        return $this;
    }
}