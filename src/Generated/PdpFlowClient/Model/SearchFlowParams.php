<?php

namespace App\Generated\PdpFlowClient\Model;

class SearchFlowParams extends \ArrayObject
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
    protected $offset = 0;
    /**
     * Maximum number of results that may be returned
     *
     * @var int
     */
    protected $limit = 25;
    /**
     * Filtering criteria, at least one is required
     *
     * @var mixed
     */
    protected $where;
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
     * Maximum number of results that may be returned
     *
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }
    /**
     * Maximum number of results that may be returned
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
    public function getWhere()
    {
        return $this->where;
    }
    /**
     * Filtering criteria, at least one is required
     *
     * @param mixed $where
     *
     * @return self
     */
    public function setWhere($where): self
    {
        $this->initialized['where'] = true;
        $this->where = $where;
        return $this;
    }
}