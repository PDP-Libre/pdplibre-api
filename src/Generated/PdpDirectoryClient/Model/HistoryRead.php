<?php

namespace PdpLibre\Generated\PdpFPdpDirectoryClient\Model;

class HistoryRead extends \ArrayObject
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
     * Data creation date
     *
     * @var \DateTime
     */
    protected $definitionDate;
    /**
     * Effective start date of the directory line..
     *
     * @var \DateTime
     */
    protected $dateFrom;
    /**
     * Corresponds to the state of the data. O = the data is hidden and cannot be exploited. N = the data is not hidden.
     *
     * @var bool
     */
    protected $hidden;
    /**
     * Platform instance identifier in the directory
     *
     * @var int
     */
    protected $idInstance;
    /**
     * Data creation date
     *
     * @return \DateTime
     */
    public function getDefinitionDate(): \DateTime
    {
        return $this->definitionDate;
    }
    /**
     * Data creation date
     *
     * @param \DateTime $definitionDate
     *
     * @return self
     */
    public function setDefinitionDate(\DateTime $definitionDate): self
    {
        $this->initialized['definitionDate'] = true;
        $this->definitionDate = $definitionDate;
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
     * Corresponds to the state of the data. O = the data is hidden and cannot be exploited. N = the data is not hidden.
     *
     * @return bool
     */
    public function getHidden(): bool
    {
        return $this->hidden;
    }
    /**
     * Corresponds to the state of the data. O = the data is hidden and cannot be exploited. N = the data is not hidden.
     *
     * @param bool $hidden
     *
     * @return self
     */
    public function setHidden(bool $hidden): self
    {
        $this->initialized['hidden'] = true;
        $this->hidden = $hidden;
        return $this;
    }
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
}