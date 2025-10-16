<?php

namespace PdpLibre\Generated\PdpFPdpDirectoryClient\Model;

class LegalUnitPayloadIncluded extends \ArrayObject
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
     * SIREN number
     *
     * @var string
     */
    protected $siren;
    /**
     * Business name
     *
     * @var string
     */
    protected $businessName;
    /**
     * Business structure type
     *
     * @var string
     */
    protected $entityType;
    /**
     * Refers to the administrative status of the legal unit (Active; Closed).
     *
     * @var string
     */
    protected $administrativeStatus;
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
     * Business name
     *
     * @return string
     */
    public function getBusinessName(): string
    {
        return $this->businessName;
    }
    /**
     * Business name
     *
     * @param string $businessName
     *
     * @return self
     */
    public function setBusinessName(string $businessName): self
    {
        $this->initialized['businessName'] = true;
        $this->businessName = $businessName;
        return $this;
    }
    /**
     * Business structure type
     *
     * @return string
     */
    public function getEntityType(): string
    {
        return $this->entityType;
    }
    /**
     * Business structure type
     *
     * @param string $entityType
     *
     * @return self
     */
    public function setEntityType(string $entityType): self
    {
        $this->initialized['entityType'] = true;
        $this->entityType = $entityType;
        return $this;
    }
    /**
     * Refers to the administrative status of the legal unit (Active; Closed).
     *
     * @return string
     */
    public function getAdministrativeStatus(): string
    {
        return $this->administrativeStatus;
    }
    /**
     * Refers to the administrative status of the legal unit (Active; Closed).
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
}