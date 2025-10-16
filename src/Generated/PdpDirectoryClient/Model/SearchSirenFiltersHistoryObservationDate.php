<?php

namespace PdpLibre\Generated\PdpFPdpDirectoryClient\Model;

class SearchSirenFiltersHistoryObservationDate extends \ArrayObject
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
     * \"strict\" comparison operator
     *
     * @var string
     */
    protected $op;
    /**
     * returns the observation date
     *
     * @var \DateTime
     */
    protected $value;
    /**
     * \"strict\" comparison operator
     *
     * @return string
     */
    public function getOp(): string
    {
        return $this->op;
    }
    /**
     * \"strict\" comparison operator
     *
     * @param string $op
     *
     * @return self
     */
    public function setOp(string $op): self
    {
        $this->initialized['op'] = true;
        $this->op = $op;
        return $this;
    }
    /**
     * returns the observation date
     *
     * @return \DateTime
     */
    public function getValue(): \DateTime
    {
        return $this->value;
    }
    /**
     * returns the observation date
     *
     * @param \DateTime $value
     *
     * @return self
     */
    public function setValue(\DateTime $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}