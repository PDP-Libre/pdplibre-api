<?php

namespace App\Generated\PdpFlowClient\Model;

class Acknowledgement extends \ArrayObject
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
    * >- Ok, the following checks have passed
    >>- Anti virus
    >>- Integrity checks
    >>- Technical rules checks
    >>- Business rules checks
    >- Error, one of the previous test has failed
    >- Pending, the flow is not yet integrated
    
    *
    * @var string
    */
    protected $status;
    /**
     * 
     *
     * @var list<AcknowledgementDetail>
     */
    protected $details;
    /**
    * >- Ok, the following checks have passed
    >>- Anti virus
    >>- Integrity checks
    >>- Technical rules checks
    >>- Business rules checks
    >- Error, one of the previous test has failed
    >- Pending, the flow is not yet integrated
    
    *
    * @return string
    */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
    * >- Ok, the following checks have passed
    >>- Anti virus
    >>- Integrity checks
    >>- Technical rules checks
    >>- Business rules checks
    >- Error, one of the previous test has failed
    >- Pending, the flow is not yet integrated
    
    *
    * @param string $status
    *
    * @return self
    */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return list<AcknowledgementDetail>
     */
    public function getDetails(): array
    {
        return $this->details;
    }
    /**
     * 
     *
     * @param list<AcknowledgementDetail> $details
     *
     * @return self
     */
    public function setDetails(array $details): self
    {
        $this->initialized['details'] = true;
        $this->details = $details;
        return $this;
    }
}