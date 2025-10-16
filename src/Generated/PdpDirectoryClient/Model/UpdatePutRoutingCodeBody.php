<?php

namespace App\Generated\PdpDirectoryClient\Model;

class UpdatePutRoutingCodeBody extends \ArrayObject
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
     * Routing Identifier type.
     *
     * @var string
     */
    protected $routingIdentifierType;
    /**
     * Name of the directory line routing code. This attribute is only returned if the directory line is defined at the SIREN / SIRET / Routing code mesh.
     *
     * @var string
     */
    protected $routingCodeName;
    /**
     * Administrative status of the routing code.
     *
     * @var string
     */
    protected $administrativeStatus;
    /**
     * Objet encapsulant une address.
     *
     * @var AddressPut
     */
    protected $address;
    /**
     * Indicates whether the public structure requires a legal commitment number. This attribute is only returned if the directory line is defined for a public structure at the SIREN / SIRET or SIREN / SIRET / Routing code level.
     *
     * @var bool
     */
    protected $managesLegalCommitmentCode;
    /**
     * SIRET Number
     *
     * @var string
     */
    protected $siret;
    /**
     * Routing Identifier type.
     *
     * @return string
     */
    public function getRoutingIdentifierType(): string
    {
        return $this->routingIdentifierType;
    }
    /**
     * Routing Identifier type.
     *
     * @param string $routingIdentifierType
     *
     * @return self
     */
    public function setRoutingIdentifierType(string $routingIdentifierType): self
    {
        $this->initialized['routingIdentifierType'] = true;
        $this->routingIdentifierType = $routingIdentifierType;
        return $this;
    }
    /**
     * Name of the directory line routing code. This attribute is only returned if the directory line is defined at the SIREN / SIRET / Routing code mesh.
     *
     * @return string
     */
    public function getRoutingCodeName(): string
    {
        return $this->routingCodeName;
    }
    /**
     * Name of the directory line routing code. This attribute is only returned if the directory line is defined at the SIREN / SIRET / Routing code mesh.
     *
     * @param string $routingCodeName
     *
     * @return self
     */
    public function setRoutingCodeName(string $routingCodeName): self
    {
        $this->initialized['routingCodeName'] = true;
        $this->routingCodeName = $routingCodeName;
        return $this;
    }
    /**
     * Administrative status of the routing code.
     *
     * @return string
     */
    public function getAdministrativeStatus(): string
    {
        return $this->administrativeStatus;
    }
    /**
     * Administrative status of the routing code.
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
     * Objet encapsulant une address.
     *
     * @return AddressPut
     */
    public function getAddress(): AddressPut
    {
        return $this->address;
    }
    /**
     * Objet encapsulant une address.
     *
     * @param AddressPut $address
     *
     * @return self
     */
    public function setAddress(AddressPut $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
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
}