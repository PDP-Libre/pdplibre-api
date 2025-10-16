<?php

namespace PdpLibre\Generated\PdpFPdpDirectoryClient\Model;

class FacilityPayloadHistoryUleB2gAdditionalData extends \ArrayObject
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
     * Indicates whether the public structure acts as project manager for work invoices in addition to receiving simple invoices. This attribute is only returned if the directory line is defined for a public structure at the SIREN / SIRET or SIREN / SIRET / Routing code level.
     *
     * @var bool
     */
    protected $pm;
    /**
     * Indicates whether the public structure only acts as a project manager; if so, it can only receive invoices for work. This attribute is only returned if the directory line is defined for a public structure at the SIREN/SIRET or SIREN/SIRET/Routing code level.
     *
     * @var bool
     */
    protected $pmOnly;
    /**
     * Indicates whether the public structure manages the payment status of invoices. This attribute is only returned if the directory line is defined for a public structure at the SIREN / SIRET or SIREN / SIRET / Routing code level.
     *
     * @var bool
     */
    protected $managesPaymentStatus;
    /**
     * Indicates whether the public structure requires a legal commitment number. This attribute is only returned if the directory line is defined for a public structure at the SIREN / SIRET or SIREN / SIRET / Routing code level.
     *
     * @var bool
     */
    protected $managesLegalCommitmentCode;
    /**
     * Indicates whether the public structure requires a service code or a commitment code in its exchanges. This attribute is only returned if the directory line is defined for a public structure at the SIREN / SIRET or SIREN / SIRET / Routing code level.
     *
     * @var bool
     */
    protected $managesLegalCommitmentOrServiceCode;
    /**
     * Indicates whether the structure requires a service code. This attribute is only returned if the directory line is defined for a public structure at the SIREN / SIRET or SIREN / SIRET / Routing code level.
     *
     * @var bool
     */
    protected $serviceCodeStatus;
    /**
     * Indicates whether the public structure acts as project manager for work invoices in addition to receiving simple invoices. This attribute is only returned if the directory line is defined for a public structure at the SIREN / SIRET or SIREN / SIRET / Routing code level.
     *
     * @return bool
     */
    public function getPm(): bool
    {
        return $this->pm;
    }
    /**
     * Indicates whether the public structure acts as project manager for work invoices in addition to receiving simple invoices. This attribute is only returned if the directory line is defined for a public structure at the SIREN / SIRET or SIREN / SIRET / Routing code level.
     *
     * @param bool $pm
     *
     * @return self
     */
    public function setPm(bool $pm): self
    {
        $this->initialized['pm'] = true;
        $this->pm = $pm;
        return $this;
    }
    /**
     * Indicates whether the public structure only acts as a project manager; if so, it can only receive invoices for work. This attribute is only returned if the directory line is defined for a public structure at the SIREN/SIRET or SIREN/SIRET/Routing code level.
     *
     * @return bool
     */
    public function getPmOnly(): bool
    {
        return $this->pmOnly;
    }
    /**
     * Indicates whether the public structure only acts as a project manager; if so, it can only receive invoices for work. This attribute is only returned if the directory line is defined for a public structure at the SIREN/SIRET or SIREN/SIRET/Routing code level.
     *
     * @param bool $pmOnly
     *
     * @return self
     */
    public function setPmOnly(bool $pmOnly): self
    {
        $this->initialized['pmOnly'] = true;
        $this->pmOnly = $pmOnly;
        return $this;
    }
    /**
     * Indicates whether the public structure manages the payment status of invoices. This attribute is only returned if the directory line is defined for a public structure at the SIREN / SIRET or SIREN / SIRET / Routing code level.
     *
     * @return bool
     */
    public function getManagesPaymentStatus(): bool
    {
        return $this->managesPaymentStatus;
    }
    /**
     * Indicates whether the public structure manages the payment status of invoices. This attribute is only returned if the directory line is defined for a public structure at the SIREN / SIRET or SIREN / SIRET / Routing code level.
     *
     * @param bool $managesPaymentStatus
     *
     * @return self
     */
    public function setManagesPaymentStatus(bool $managesPaymentStatus): self
    {
        $this->initialized['managesPaymentStatus'] = true;
        $this->managesPaymentStatus = $managesPaymentStatus;
        return $this;
    }
    /**
     * Indicates whether the public structure requires a legal commitment number. This attribute is only returned if the directory line is defined for a public structure at the SIREN / SIRET or SIREN / SIRET / Routing code level.
     *
     * @return bool
     */
    public function getManagesLegalCommitmentCode(): bool
    {
        return $this->managesLegalCommitmentCode;
    }
    /**
     * Indicates whether the public structure requires a legal commitment number. This attribute is only returned if the directory line is defined for a public structure at the SIREN / SIRET or SIREN / SIRET / Routing code level.
     *
     * @param bool $managesLegalCommitmentCode
     *
     * @return self
     */
    public function setManagesLegalCommitmentCode(bool $managesLegalCommitmentCode): self
    {
        $this->initialized['managesLegalCommitmentCode'] = true;
        $this->managesLegalCommitmentCode = $managesLegalCommitmentCode;
        return $this;
    }
    /**
     * Indicates whether the public structure requires a service code or a commitment code in its exchanges. This attribute is only returned if the directory line is defined for a public structure at the SIREN / SIRET or SIREN / SIRET / Routing code level.
     *
     * @return bool
     */
    public function getManagesLegalCommitmentOrServiceCode(): bool
    {
        return $this->managesLegalCommitmentOrServiceCode;
    }
    /**
     * Indicates whether the public structure requires a service code or a commitment code in its exchanges. This attribute is only returned if the directory line is defined for a public structure at the SIREN / SIRET or SIREN / SIRET / Routing code level.
     *
     * @param bool $managesLegalCommitmentOrServiceCode
     *
     * @return self
     */
    public function setManagesLegalCommitmentOrServiceCode(bool $managesLegalCommitmentOrServiceCode): self
    {
        $this->initialized['managesLegalCommitmentOrServiceCode'] = true;
        $this->managesLegalCommitmentOrServiceCode = $managesLegalCommitmentOrServiceCode;
        return $this;
    }
    /**
     * Indicates whether the structure requires a service code. This attribute is only returned if the directory line is defined for a public structure at the SIREN / SIRET or SIREN / SIRET / Routing code level.
     *
     * @return bool
     */
    public function getServiceCodeStatus(): bool
    {
        return $this->serviceCodeStatus;
    }
    /**
     * Indicates whether the structure requires a service code. This attribute is only returned if the directory line is defined for a public structure at the SIREN / SIRET or SIREN / SIRET / Routing code level.
     *
     * @param bool $serviceCodeStatus
     *
     * @return self
     */
    public function setServiceCodeStatus(bool $serviceCodeStatus): self
    {
        $this->initialized['serviceCodeStatus'] = true;
        $this->serviceCodeStatus = $serviceCodeStatus;
        return $this;
    }
}