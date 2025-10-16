<?php

namespace App\Generated\PdpDirectoryClient\Model;

class SearchDirectoryLineFiltersAddressingSuffix extends \ArrayObject
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
     * suffix of the directory line which defines an address mesh not attached to a facility
     *
     * @var string
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
     * suffix of the directory line which defines an address mesh not attached to a facility
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * suffix of the directory line which defines an address mesh not attached to a facility
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