<?php

namespace PdpLibre\Generated\PdpFlowClient\Model;

class V1FlowsPostBody extends \ArrayObject
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
    * Signaling of the flow:
    >The tracking id is an external identifier and is used to track the flow by the sender
    >The sha256 is the footprint of the attached file:
    >- if provided in the request: it should be checked once received
    >- if not provided in the request: it should be computed and returned in the response
    
    *
    * @var FlowInfo
    */
    protected $flowInfo;
    /**
     * Flow file
     *
     * @var string
     */
    protected $file;
    /**
    * Signaling of the flow:
    >The tracking id is an external identifier and is used to track the flow by the sender
    >The sha256 is the footprint of the attached file:
    >- if provided in the request: it should be checked once received
    >- if not provided in the request: it should be computed and returned in the response
    
    *
    * @return FlowInfo
    */
    public function getFlowInfo(): FlowInfo
    {
        return $this->flowInfo;
    }
    /**
    * Signaling of the flow:
    >The tracking id is an external identifier and is used to track the flow by the sender
    >The sha256 is the footprint of the attached file:
    >- if provided in the request: it should be checked once received
    >- if not provided in the request: it should be computed and returned in the response
    
    *
    * @param FlowInfo $flowInfo
    *
    * @return self
    */
    public function setFlowInfo(FlowInfo $flowInfo): self
    {
        $this->initialized['flowInfo'] = true;
        $this->flowInfo = $flowInfo;
        return $this;
    }
    /**
     * Flow file
     *
     * @return string
     */
    public function getFile(): string
    {
        return $this->file;
    }
    /**
     * Flow file
     *
     * @param string $file
     *
     * @return self
     */
    public function setFile(string $file): self
    {
        $this->initialized['file'] = true;
        $this->file = $file;
        return $this;
    }
}