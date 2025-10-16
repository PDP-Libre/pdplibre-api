<?php

namespace PdpLibre\Generated\PdpFPdpDirectoryClient\Model;

class SearchSiretFiltersAddressLines extends \ArrayObject
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
     * \"contains\" comparison operator
     *
     * @var string
     */
    protected $op;
    /**
     * address lines of the recipient structure having defined the directory line(s).
     *
     * @var string
     */
    protected $value;
    /**
     * \"contains\" comparison operator
     *
     * @return string
     */
    public function getOp(): string
    {
        return $this->op;
    }
    /**
     * \"contains\" comparison operator
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
     * address lines of the recipient structure having defined the directory line(s).
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * address lines of the recipient structure having defined the directory line(s).
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}