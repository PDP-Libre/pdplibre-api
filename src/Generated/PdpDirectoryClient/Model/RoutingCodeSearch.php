<?php

namespace App\Generated\PdpDirectoryClient\Model;

class RoutingCodeSearch extends \ArrayObject
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
     * @var RoutingCodeSearchFilters
     */
    protected $filters;
    /**
     * Sorting criteria on a field and an order (ascending or descending).
     *
     * @var list<RoutingCodeSearchSortingInner>
     */
    protected $sorting;
    /**
     * Permet de filtrer les champs voulus dans la réponse.
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
     * @return RoutingCodeSearchFilters
     */
    public function getFilters(): RoutingCodeSearchFilters
    {
        return $this->filters;
    }
    /**
     * 
     *
     * @param RoutingCodeSearchFilters $filters
     *
     * @return self
     */
    public function setFilters(RoutingCodeSearchFilters $filters): self
    {
        $this->initialized['filters'] = true;
        $this->filters = $filters;
        return $this;
    }
    /**
     * Sorting criteria on a field and an order (ascending or descending).
     *
     * @return list<RoutingCodeSearchSortingInner>
     */
    public function getSorting(): array
    {
        return $this->sorting;
    }
    /**
     * Sorting criteria on a field and an order (ascending or descending).
     *
     * @param list<RoutingCodeSearchSortingInner> $sorting
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
     * Permet de filtrer les champs voulus dans la réponse.
     *
     * @return list<string>
     */
    public function getChamps(): array
    {
        return $this->champs;
    }
    /**
     * Permet de filtrer les champs voulus dans la réponse.
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