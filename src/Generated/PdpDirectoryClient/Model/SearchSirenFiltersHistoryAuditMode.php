<?php

namespace App\Generated\PdpDirectoryClient\Model;

class SearchSirenFiltersHistoryAuditMode extends \ArrayObject
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
     * Audit Mode.
     *
     * @var bool
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
     * Audit Mode.
     *
     * @return bool
     */
    public function getValue(): bool
    {
        return $this->value;
    }
    /**
     * Audit Mode.
     *
     * @param bool $value
     *
     * @return self
     */
    public function setValue(bool $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}