<?php

namespace App\Generated\PdpDirectoryClient\Model;

class DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCode extends \ArrayObject
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
     * Addressing identifier of the directory line.
     *
     * @var string
     */
    protected $addressingIdentifier;
    /**
     * SIREN number
     *
     * @var string
     */
    protected $siren;
    /**
     * SIRET Number
     *
     * @var string
     */
    protected $siret;
    /**
     * suffix of the directory line which defines an address mesh not attached to a facility
     *
     * @var string
     */
    protected $addressingSuffix;
    /**
     * Creation date of the directory line.
     *
     * @var \DateTime
     */
    protected $creationDate;
    /**
     * Effective start date of the directory line..
     *
     * @var \DateTime
     */
    protected $dateFrom;
    /**
     * Effective end date of the directory line.
     *
     * @var \DateTime
     */
    protected $dateTo;
    /**
     * Effective end date
     *
     * @var \DateTime
     */
    protected $effectiveEndDate;
    /**
     * Creator of the directory line.
     *
     * @var string
     */
    protected $createdBy;
    /**
     * Wrapper for history
     *
     * @var HistoryRead
     */
    protected $history;
    /**
     * 
     *
     * @var DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCodeRoutingCode
     */
    protected $routingCode;
    /**
     * 
     *
     * @var DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCodePlateform
     */
    protected $plateform;
    /**
     * 
     *
     * @var LegalUnitPayloadIncludedNoSiren
     */
    protected $legalUnit;
    /**
     * 
     *
     * @var FacilityPayloadIncluded
     */
    protected $facility;
    /**
     * Addressing identifier of the directory line.
     *
     * @return string
     */
    public function getAddressingIdentifier(): string
    {
        return $this->addressingIdentifier;
    }
    /**
     * Addressing identifier of the directory line.
     *
     * @param string $addressingIdentifier
     *
     * @return self
     */
    public function setAddressingIdentifier(string $addressingIdentifier): self
    {
        $this->initialized['addressingIdentifier'] = true;
        $this->addressingIdentifier = $addressingIdentifier;
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
     * suffix of the directory line which defines an address mesh not attached to a facility
     *
     * @return string
     */
    public function getAddressingSuffix(): string
    {
        return $this->addressingSuffix;
    }
    /**
     * suffix of the directory line which defines an address mesh not attached to a facility
     *
     * @param string $addressingSuffix
     *
     * @return self
     */
    public function setAddressingSuffix(string $addressingSuffix): self
    {
        $this->initialized['addressingSuffix'] = true;
        $this->addressingSuffix = $addressingSuffix;
        return $this;
    }
    /**
     * Creation date of the directory line.
     *
     * @return \DateTime
     */
    public function getCreationDate(): \DateTime
    {
        return $this->creationDate;
    }
    /**
     * Creation date of the directory line.
     *
     * @param \DateTime $creationDate
     *
     * @return self
     */
    public function setCreationDate(\DateTime $creationDate): self
    {
        $this->initialized['creationDate'] = true;
        $this->creationDate = $creationDate;
        return $this;
    }
    /**
     * Effective start date of the directory line..
     *
     * @return \DateTime
     */
    public function getDateFrom(): \DateTime
    {
        return $this->dateFrom;
    }
    /**
     * Effective start date of the directory line..
     *
     * @param \DateTime $dateFrom
     *
     * @return self
     */
    public function setDateFrom(\DateTime $dateFrom): self
    {
        $this->initialized['dateFrom'] = true;
        $this->dateFrom = $dateFrom;
        return $this;
    }
    /**
     * Effective end date of the directory line.
     *
     * @return \DateTime
     */
    public function getDateTo(): \DateTime
    {
        return $this->dateTo;
    }
    /**
     * Effective end date of the directory line.
     *
     * @param \DateTime $dateTo
     *
     * @return self
     */
    public function setDateTo(\DateTime $dateTo): self
    {
        $this->initialized['dateTo'] = true;
        $this->dateTo = $dateTo;
        return $this;
    }
    /**
     * Effective end date
     *
     * @return \DateTime
     */
    public function getEffectiveEndDate(): \DateTime
    {
        return $this->effectiveEndDate;
    }
    /**
     * Effective end date
     *
     * @param \DateTime $effectiveEndDate
     *
     * @return self
     */
    public function setEffectiveEndDate(\DateTime $effectiveEndDate): self
    {
        $this->initialized['effectiveEndDate'] = true;
        $this->effectiveEndDate = $effectiveEndDate;
        return $this;
    }
    /**
     * Creator of the directory line.
     *
     * @return string
     */
    public function getCreatedBy(): string
    {
        return $this->createdBy;
    }
    /**
     * Creator of the directory line.
     *
     * @param string $createdBy
     *
     * @return self
     */
    public function setCreatedBy(string $createdBy): self
    {
        $this->initialized['createdBy'] = true;
        $this->createdBy = $createdBy;
        return $this;
    }
    /**
     * Wrapper for history
     *
     * @return HistoryRead
     */
    public function getHistory(): HistoryRead
    {
        return $this->history;
    }
    /**
     * Wrapper for history
     *
     * @param HistoryRead $history
     *
     * @return self
     */
    public function setHistory(HistoryRead $history): self
    {
        $this->initialized['history'] = true;
        $this->history = $history;
        return $this;
    }
    /**
     * 
     *
     * @return DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCodeRoutingCode
     */
    public function getRoutingCode(): DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCodeRoutingCode
    {
        return $this->routingCode;
    }
    /**
     * 
     *
     * @param DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCodeRoutingCode $routingCode
     *
     * @return self
     */
    public function setRoutingCode(DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCodeRoutingCode $routingCode): self
    {
        $this->initialized['routingCode'] = true;
        $this->routingCode = $routingCode;
        return $this;
    }
    /**
     * 
     *
     * @return DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCodePlateform
     */
    public function getPlateform(): DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCodePlateform
    {
        return $this->plateform;
    }
    /**
     * 
     *
     * @param DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCodePlateform $plateform
     *
     * @return self
     */
    public function setPlateform(DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCodePlateform $plateform): self
    {
        $this->initialized['plateform'] = true;
        $this->plateform = $plateform;
        return $this;
    }
    /**
     * 
     *
     * @return LegalUnitPayloadIncludedNoSiren
     */
    public function getLegalUnit(): LegalUnitPayloadIncludedNoSiren
    {
        return $this->legalUnit;
    }
    /**
     * 
     *
     * @param LegalUnitPayloadIncludedNoSiren $legalUnit
     *
     * @return self
     */
    public function setLegalUnit(LegalUnitPayloadIncludedNoSiren $legalUnit): self
    {
        $this->initialized['legalUnit'] = true;
        $this->legalUnit = $legalUnit;
        return $this;
    }
    /**
     * 
     *
     * @return FacilityPayloadIncluded
     */
    public function getFacility(): FacilityPayloadIncluded
    {
        return $this->facility;
    }
    /**
     * 
     *
     * @param FacilityPayloadIncluded $facility
     *
     * @return self
     */
    public function setFacility(FacilityPayloadIncluded $facility): self
    {
        $this->initialized['facility'] = true;
        $this->facility = $facility;
        return $this;
    }
}