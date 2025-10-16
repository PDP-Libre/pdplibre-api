<?php

namespace PdpLibre\Generated\PdpFPdpDirectoryClient\Model;

class UpdatePatchRoutingCodeBody extends \ArrayObject
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
     * @var AddressPatch
     */
    protected $address;
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
     * @return AddressPatch
     */
    public function getAddress(): AddressPatch
    {
        return $this->address;
    }
    /**
     * Objet encapsulant une address.
     *
     * @param AddressPatch $address
     *
     * @return self
     */
    public function setAddress(AddressPatch $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
}