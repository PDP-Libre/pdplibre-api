<?php

namespace PdpLibre\Generated\PdpFPdpDirectoryClient\Model;

class DirectoryLineSearchPost200Response extends \ArrayObject
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
     * @var SearchDirectoryLine
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
     * @var list<DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCode>
     */
    protected $results;
    /**
     * 
     *
     * @return SearchDirectoryLine
     */
    public function getSearch(): SearchDirectoryLine
    {
        return $this->search;
    }
    /**
     * 
     *
     * @param SearchDirectoryLine $search
     *
     * @return self
     */
    public function setSearch(SearchDirectoryLine $search): self
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
     * @return list<DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCode>
     */
    public function getResults(): array
    {
        return $this->results;
    }
    /**
     * 
     *
     * @param list<DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCode> $results
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