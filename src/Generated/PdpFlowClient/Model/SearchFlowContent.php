<?php

namespace PdpLibre\Generated\PdpFlowClient\Model;

class SearchFlowContent extends \ArrayObject
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
     * 
     *
     * @var int
     */
    protected $total;
    /**
     * 
     *
     * @var int
     */
    protected $offset;
    /**
     * 
     *
     * @var int
     */
    protected $limit;
    /**
     * Filtering criteria, at least one is required
     *
     * @var mixed
     */
    protected $filter;
    /**
     * 
     *
     * @var list<Flow>
     */
    protected $results;
    /**
     * 
     *
     * @return int
     */
    public function getTotal(): int
    {
        return $this->total;
    }
    /**
     * 
     *
     * @param int $total
     *
     * @return self
     */
    public function setTotal(int $total): self
    {
        $this->initialized['total'] = true;
        $this->total = $total;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOffset(): int
    {
        return $this->offset;
    }
    /**
     * 
     *
     * @param int $offset
     *
     * @return self
     */
    public function setOffset(int $offset): self
    {
        $this->initialized['offset'] = true;
        $this->offset = $offset;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }
    /**
     * 
     *
     * @param int $limit
     *
     * @return self
     */
    public function setLimit(int $limit): self
    {
        $this->initialized['limit'] = true;
        $this->limit = $limit;
        return $this;
    }
    /**
     * Filtering criteria, at least one is required
     *
     * @return mixed
     */
    public function getFilter()
    {
        return $this->filter;
    }
    /**
     * Filtering criteria, at least one is required
     *
     * @param mixed $filter
     *
     * @return self
     */
    public function setFilter($filter): self
    {
        $this->initialized['filter'] = true;
        $this->filter = $filter;
        return $this;
    }
    /**
     * 
     *
     * @return list<Flow>
     */
    public function getResults(): array
    {
        return $this->results;
    }
    /**
     * 
     *
     * @param list<Flow> $results
     *
     * @return self
     */
    public function setResults(array $results): self
    {
        $this->initialized['results'] = true;
        $this->results = $results;
        return $this;
    }
}