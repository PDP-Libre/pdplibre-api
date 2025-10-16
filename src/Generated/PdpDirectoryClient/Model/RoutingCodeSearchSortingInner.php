<?php

namespace PdpLibre\Generated\PdpFPdpDirectoryClient\Model;

class RoutingCodeSearchSortingInner extends \ArrayObject
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
     * Fields of the routing code resource.
     *
     * @var string
     */
    protected $field;
    /**
     * Sorting order (ascending or descending)
     *
     * @var string
     */
    protected $order;
    /**
     * Fields of the routing code resource.
     *
     * @return string
     */
    public function getField(): string
    {
        return $this->field;
    }
    /**
     * Fields of the routing code resource.
     *
     * @param string $field
     *
     * @return self
     */
    public function setField(string $field): self
    {
        $this->initialized['field'] = true;
        $this->field = $field;
        return $this;
    }
    /**
     * Sorting order (ascending or descending)
     *
     * @return string
     */
    public function getOrder(): string
    {
        return $this->order;
    }
    /**
     * Sorting order (ascending or descending)
     *
     * @param string $order
     *
     * @return self
     */
    public function setOrder(string $order): self
    {
        $this->initialized['order'] = true;
        $this->order = $order;
        return $this;
    }
}