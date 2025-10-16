<?php

namespace PdpLibre\Generated\PdpFPdpDirectoryClient\Model;

class UpdatePutDirectoryLineBody extends \ArrayObject
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
     * Effective end date of the directory line.
     *
     * @var \DateTime
     */
    protected $dateTo;
    /**
     * Platform registration number
     *
     * @var string
     */
    protected $platformRegistrationNumber;
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