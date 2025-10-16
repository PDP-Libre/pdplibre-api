<?php

namespace App\Generated\PdpDirectoryClient\Model;

class SirenSearchPost200Response extends \ArrayObject
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
     * @var SearchSiren
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
     * @var list<LegalUnitPayloadHistory>
     */
    protected $results;
    /**
     * 
     *
     * @return SearchSiren
     */
    public function getSearch(): SearchSiren
    {
        return $this->search;
    }
    /**
     * 
     *
     * @param SearchSiren $search
     *
     * @return self
     */
    public function setSearch(SearchSiren $search): self
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
     * @return list<LegalUnitPayloadHistory>
     */
    public function getResults(): array
    {
        return $this->results;
    }
    /**
     * 
     *
     * @param list<LegalUnitPayloadHistory> $results
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