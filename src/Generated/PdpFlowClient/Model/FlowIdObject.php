<?php

namespace PdpLibre\Generated\PdpFlowClient\Model;

class FlowIdObject extends \ArrayObject
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
     * Unique identifier supporting UUID but not only, for flexibility purpose
     *
     * @var string
     */
    protected $flowId;
    /**
     * Unique identifier supporting UUID but not only, for flexibility purpose
     *
     * @return string
     */
    public function getFlowId(): string
    {
        return $this->flowId;
    }
    /**
     * Unique identifier supporting UUID but not only, for flexibility purpose
     *
     * @param string $flowId
     *
     * @return self
     */
    public function setFlowId(string $flowId): self
    {
        $this->initialized['flowId'] = true;
        $this->flowId = $flowId;
        return $this;
    }
}