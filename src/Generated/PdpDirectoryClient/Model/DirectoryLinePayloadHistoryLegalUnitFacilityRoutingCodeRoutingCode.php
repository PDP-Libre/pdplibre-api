<?php

namespace App\Generated\PdpDirectoryClient\Model;

class DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCodeRoutingCode extends \ArrayObject
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
     * Routing identifier od a routing code.
     *
     * @var string
     */
    protected $routingIdentifier;
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
     * Indicates whether the public structure requires a legal commitment number. This attribute is only returned if the directory line is defined for a public structure at the SIREN / SIRET or SIREN / SIRET / Routing code level.
     *
     * @var bool
     */
    protected $managesLegalCommitment;
    /**
     * Administrative status of the routing code.
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
     * Routing identifier od a routing code.
     *
     * @return string
     */
    public function getRoutingIdentifier(): string
    {
        return $this->routingIdentifier;
    }
    /**
     * Routing identifier od a routing code.
     *
     * @param string $routingIdentifier
     *
     * @return self
     */
    public function setRoutingIdentifier(string $routingIdentifier): self
    {
        $this->initialized['routingIdentifier'] = true;
        $this->routingIdentifier = $routingIdentifier;
        return $this;
    }
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
     * Indicates whether the public structure requires a legal commitment number. This attribute is only returned if the directory line is defined for a public structure at the SIREN / SIRET or SIREN / SIRET / Routing code level.
     *
     * @return bool
     */
    public function getManagesLegalCommitment(): bool
    {
        return $this->managesLegalCommitment;
    }
    /**
     * Indicates whether the public structure requires a legal commitment number. This attribute is only returned if the directory line is defined for a public structure at the SIREN / SIRET or SIREN / SIRET / Routing code level.
     *
     * @param bool $managesLegalCommitment
     *
     * @return self
     */
    public function setManagesLegalCommitment(bool $managesLegalCommitment): self
    {
        $this->initialized['managesLegalCommitment'] = true;
        $this->managesLegalCommitment = $managesLegalCommitment;
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
}