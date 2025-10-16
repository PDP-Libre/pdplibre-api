<?php

namespace App\Generated\PdpDirectoryClient\Model;

class SearchDirectoryLineSortingInner extends \ArrayObject
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
     * Fields of the directory line resource
     *
     * @var string
     */
    protected $field;
    /**
     * Sorting order (ascending or descending)
     *
     * @var string
     */
    protected $sortingOrder;
    /**
     * Fields of the directory line resource
     *
     * @return string
     */
    public function getField(): string
    {
        return $this->field;
    }
    /**
     * Fields of the directory line resource
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
    public function getSortingOrder(): string
    {
        return $this->sortingOrder;
    }
    /**
     * Sorting order (ascending or descending)
     *
     * @param string $sortingOrder
     *
     * @return self
     */
    public function setSortingOrder(string $sortingOrder): self
    {
        $this->initialized['sortingOrder'] = true;
        $this->sortingOrder = $sortingOrder;
        return $this;
    }
}