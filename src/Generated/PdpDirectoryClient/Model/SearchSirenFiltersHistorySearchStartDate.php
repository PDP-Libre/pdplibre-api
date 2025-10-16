<?php

namespace App\Generated\PdpDirectoryClient\Model;

class SearchSirenFiltersHistorySearchStartDate extends \ArrayObject
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
     * search start date
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
     * search start date
     *
     * @return \DateTime
     */
    public function getValue(): \DateTime
    {
        return $this->value;
    }
    /**
     * search start date
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