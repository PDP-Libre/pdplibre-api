<?php

namespace App\Generated\PdpDirectoryClient\Model;

class SearchSiren extends \ArrayObject
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
     * @var SearchSirenFilters
     */
    protected $filters;
    /**
     * Sorting criteria on a field and an order (ascending or descending).
     *
     * @var list<SearchSirenSortingInner>
     */
    protected $sorting;
    /**
     * Allows you to filter the desired fields in the response.
     *
     * @var list<string>
     */
    protected $fields;
    /**
     * Maximum number of results
     *
     * @var int
     */
    protected $limit;
    /**
     * Number of results to skip
     *
     * @var int
     */
    protected $ignore;
    /**
     * 
     *
     * @return SearchSirenFilters
     */
    public function getFilters(): SearchSirenFilters
    {
        return $this->filters;
    }
    /**
     * 
     *
     * @param SearchSirenFilters $filters
     *
     * @return self
     */
    public function setFilters(SearchSirenFilters $filters): self
    {
        $this->initialized['filters'] = true;
        $this->filters = $filters;
        return $this;
    }
    /**
     * Sorting criteria on a field and an order (ascending or descending).
     *
     * @return list<SearchSirenSortingInner>
     */
    public function getSorting(): array
    {
        return $this->sorting;
    }
    /**
     * Sorting criteria on a field and an order (ascending or descending).
     *
     * @param list<SearchSirenSortingInner> $sorting
     *
     * @return self
     */
    public function setSorting(array $sorting): self
    {
        $this->initialized['sorting'] = true;
        $this->sorting = $sorting;
        return $this;
    }
    /**
     * Allows you to filter the desired fields in the response.
     *
     * @return list<string>
     */
    public function getFields(): array
    {
        return $this->fields;
    }
    /**
     * Allows you to filter the desired fields in the response.
     *
     * @param list<string> $fields
     *
     * @return self
     */
    public function setFields(array $fields): self
    {
        $this->initialized['fields'] = true;
        $this->fields = $fields;
        return $this;
    }
    /**
     * Maximum number of results
     *
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }
    /**
     * Maximum number of results
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
     * Number of results to skip
     *
     * @return int
     */
    public function getIgnore(): int
    {
        return $this->ignore;
    }
    /**
     * Number of results to skip
     *
     * @param int $ignore
     *
     * @return self
     */
    public function setIgnore(int $ignore): self
    {
        $this->initialized['ignore'] = true;
        $this->ignore = $ignore;
        return $this;
    }
}