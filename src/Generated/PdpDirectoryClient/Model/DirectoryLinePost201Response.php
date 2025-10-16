<?php

namespace PdpLibre\Generated\PdpFPdpDirectoryClient\Model;

class DirectoryLinePost201Response extends \ArrayObject
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
     * Addressing identifier of the directory line.
     *
     * @var string
     */
    protected $addressingIdentifier;
    /**
     * Effective start date of the directory line..
     *
     * @var \DateTime
     */
    protected $dateFrom;
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
}