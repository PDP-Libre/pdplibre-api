<?php

namespace PdpLibre\Generated\PdpFPdpDirectoryClient\Model;

class CreateDirectoryLineBodyAddressingInformation
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
     * SIRET Number
     *
     * @var string
     */
    protected $siret;
    /**
     * Routing identifier od a routing code.
     *
     * @var string
     */
    protected $routingIdentifier;
    /**
     * suffix of the directory line which defines an address mesh not attached to a facility
     *
     * @var string
     */
    protected $addressingSuffix;
    /**
     * Platform registration number
     *
     * @var string
     */
    protected $platformRegistrationNumber;
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
     * Platform registration number
     *
     * @return string
     */
    public function getPlatformRegistrationNumber(): string
    {
        return $this->platformRegistrationNumber;
    }
    /**
     * Platform registration number
     *
     * @param string $platformRegistrationNumber
     *
     * @return self
     */
    public function setPlatformRegistrationNumber(string $platformRegistrationNumber): self
    {
        $this->initialized['platformRegistrationNumber'] = true;
        $this->platformRegistrationNumber = $platformRegistrationNumber;
        return $this;
    }
}