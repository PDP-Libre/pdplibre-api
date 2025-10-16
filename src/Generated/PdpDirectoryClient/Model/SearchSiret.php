<?php

namespace PdpLibre\Generated\PdpFPdpDirectoryClient\Model;

class SearchSiret extends \ArrayObject
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
     * @var SearchSiretFilters
     */
    protected $filters;
    /**
     * Sorting criteria on a field and an order (ascending or descending).
     *
     * @var list<SearchSiretSortingInner>
     */
    protected $sorting;
    /**
     * Allows you to filter the desired fields in the response.
     *
     * @var list<string>
     */
    protected $champs;
    /**
     * 
     *
     * @var list<string>
     */
    protected $inclure;
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
     * @return SearchSiretFilters
     */
    public function getFilters(): SearchSiretFilters
    {
        return $this->filters;
    }
    /**
     * 
     *
     * @param SearchSiretFilters $filters
     *
     * @return self
     */
    public function setFilters(SearchSiretFilters $filters): self
    {
        $this->initialized['filters'] = true;
        $this->filters = $filters;
        return $this;
    }
    /**
     * Sorting criteria on a field and an order (ascending or descending).
     *
     * @return list<SearchSiretSortingInner>
     */
    public function getSorting(): array
    {
        return $this->sorting;
    }
    /**
     * Sorting criteria on a field and an order (ascending or descending).
     *
     * @param list<SearchSiretSortingInner> $sorting
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
    public function getChamps(): array
    {
        return $this->champs;
    }
    /**
     * Allows you to filter the desired fields in the response.
     *
     * @param list<string> $champs
     *
     * @return self
     */
    public function setChamps(array $champs): self
    {
        $this->initialized['champs'] = true;
        $this->champs = $champs;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>
     */
    public function getInclure(): array
    {
        return $this->inclure;
    }
    /**
     * 
     *
     * @param list<string> $inclure
     *
     * @return self
     */
    public function setInclure(array $inclure): self
    {
        $this->initialized['inclure'] = true;
        $this->inclure = $inclure;
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