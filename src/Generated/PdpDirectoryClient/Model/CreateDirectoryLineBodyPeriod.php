<?php

namespace App\Generated\PdpDirectoryClient\Model;

class CreateDirectoryLineBodyPeriod extends \ArrayObject
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
}