<?php

namespace App\Generated\PdpDirectoryClient\Model;

class SearchSirenFiltersHistory extends \ArrayObject
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
     * @var SearchSirenFiltersHistoryObservationDate
     */
    protected $observationDate;
    /**
     * 
     *
     * @var SearchSirenFiltersHistorySearchStartDate
     */
    protected $searchStartDate;
    /**
     * 
     *
     * @var SearchSirenFiltersHistorySearchEndDate
     */
    protected $searchEndDate;
    /**
     * 
     *
     * @var SearchSirenFiltersHistoryAuditMode
     */
    protected $auditMode;
    /**
     * 
     *
     * @return SearchSirenFiltersHistoryObservationDate
     */
    public function getObservationDate(): SearchSirenFiltersHistoryObservationDate
    {
        return $this->observationDate;
    }
    /**
     * 
     *
     * @param SearchSirenFiltersHistoryObservationDate $observationDate
     *
     * @return self
     */
    public function setObservationDate(SearchSirenFiltersHistoryObservationDate $observationDate): self
    {
        $this->initialized['observationDate'] = true;
        $this->observationDate = $observationDate;
        return $this;
    }
    /**
     * 
     *
     * @return SearchSirenFiltersHistorySearchStartDate
     */
    public function getSearchStartDate(): SearchSirenFiltersHistorySearchStartDate
    {
        return $this->searchStartDate;
    }
    /**
     * 
     *
     * @param SearchSirenFiltersHistorySearchStartDate $searchStartDate
     *
     * @return self
     */
    public function setSearchStartDate(SearchSirenFiltersHistorySearchStartDate $searchStartDate): self
    {
        $this->initialized['searchStartDate'] = true;
        $this->searchStartDate = $searchStartDate;
        return $this;
    }
    /**
     * 
     *
     * @return SearchSirenFiltersHistorySearchEndDate
     */
    public function getSearchEndDate(): SearchSirenFiltersHistorySearchEndDate
    {
        return $this->searchEndDate;
    }
    /**
     * 
     *
     * @param SearchSirenFiltersHistorySearchEndDate $searchEndDate
     *
     * @return self
     */
    public function setSearchEndDate(SearchSirenFiltersHistorySearchEndDate $searchEndDate): self
    {
        $this->initialized['searchEndDate'] = true;
        $this->searchEndDate = $searchEndDate;
        return $this;
    }
    /**
     * 
     *
     * @return SearchSirenFiltersHistoryAuditMode
     */
    public function getAuditMode(): SearchSirenFiltersHistoryAuditMode
    {
        return $this->auditMode;
    }
    /**
     * 
     *
     * @param SearchSirenFiltersHistoryAuditMode $auditMode
     *
     * @return self
     */
    public function setAuditMode(SearchSirenFiltersHistoryAuditMode $auditMode): self
    {
        $this->initialized['auditMode'] = true;
        $this->auditMode = $auditMode;
        return $this;
    }
}