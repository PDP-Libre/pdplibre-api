<?php

namespace App\Generated\PdpDirectoryClient\Model;

class RoutingCodePost201Response extends \ArrayObject
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
     * Platform instance identifier in the directory
     *
     * @var int
     */
    protected $idInstance;
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
     * Platform instance identifier in the directory
     *
     * @return int
     */
    public function getIdInstance(): int
    {
        return $this->idInstance;
    }
    /**
     * Platform instance identifier in the directory
     *
     * @param int $idInstance
     *
     * @return self
     */
    public function setIdInstance(int $idInstance): self
    {
        $this->initialized['idInstance'] = true;
        $this->idInstance = $idInstance;
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
}