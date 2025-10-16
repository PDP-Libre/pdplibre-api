<?php

namespace App\Generated\PdpDirectoryClient\Model;

class SiretSearchPost200Response extends \ArrayObject
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
     * @var SearchSiret
     */
    protected $search;
    /**
     * The total number of results
     *
     * @var int
     */
    protected $totalNumberResults;
    /**
     * 
     *
     * @var list<FacilityPayloadHistoryUle>
     */
    protected $results;
    /**
     * 
     *
     * @return SearchSiret
     */
    public function getSearch(): SearchSiret
    {
        return $this->search;
    }
    /**
     * 
     *
     * @param SearchSiret $search
     *
     * @return self
     */
    public function setSearch(SearchSiret $search): self
    {
        $this->initialized['search'] = true;
        $this->search = $search;
        return $this;
    }
    /**
     * The total number of results
     *
     * @return int
     */
    public function getTotalNumberResults(): int
    {
        return $this->totalNumberResults;
    }
    /**
     * The total number of results
     *
     * @param int $totalNumberResults
     *
     * @return self
     */
    public function setTotalNumberResults(int $totalNumberResults): self
    {
        $this->initialized['totalNumberResults'] = true;
        $this->totalNumberResults = $totalNumberResults;
        return $this;
    }
    /**
     * 
     *
     * @return list<FacilityPayloadHistoryUle>
     */
    public function getResults(): array
    {
        return $this->results;
    }
    /**
     * 
     *
     * @param list<FacilityPayloadHistoryUle> $results
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