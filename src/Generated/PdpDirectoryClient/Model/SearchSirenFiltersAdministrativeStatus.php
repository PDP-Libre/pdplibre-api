<?php

namespace PdpLibre\Generated\PdpFPdpDirectoryClient\Model;

class SearchSirenFiltersAdministrativeStatus extends \ArrayObject
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
     * Refers to the administrative status of the legal unit (Active; Closed).
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
     * Refers to the administrative status of the legal unit (Active; Closed).
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * Refers to the administrative status of the legal unit (Active; Closed).
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