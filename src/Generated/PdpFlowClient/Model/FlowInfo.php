<?php

namespace PdpLibre\Generated\PdpFlowClient\Model;

class FlowInfo extends \ArrayObject
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
    protected $trackingId;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * Syntax of the original file belonging to a flow
     *
     * @var string
     */
    protected $flowSyntax;
    /**
     * 
     *
     * @var string
     */
    protected $flowProfile;
    /**
     * 
     *
     * @var string
     */
    protected $sha256;
    /**
     * Unique identifier supporting UUID but not only, for flexibility purpose
     *
     * @return string
     */
    public function getTrackingId(): string
    {
        return $this->trackingId;
    }
    /**
     * Unique identifier supporting UUID but not only, for flexibility purpose
     *
     * @param string $trackingId
     *
     * @return self
     */
    public function setTrackingId(string $trackingId): self
    {
        $this->initialized['trackingId'] = true;
        $this->trackingId = $trackingId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Syntax of the original file belonging to a flow
     *
     * @return string
     */
    public function getFlowSyntax(): string
    {
        return $this->flowSyntax;
    }
    /**
     * Syntax of the original file belonging to a flow
     *
     * @param string $flowSyntax
     *
     * @return self
     */
    public function setFlowSyntax(string $flowSyntax): self
    {
        $this->initialized['flowSyntax'] = true;
        $this->flowSyntax = $flowSyntax;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFlowProfile(): string
    {
        return $this->flowProfile;
    }
    /**
     * 
     *
     * @param string $flowProfile
     *
     * @return self
     */
    public function setFlowProfile(string $flowProfile): self
    {
        $this->initialized['flowProfile'] = true;
        $this->flowProfile = $flowProfile;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSha256(): string
    {
        return $this->sha256;
    }
    /**
     * 
     *
     * @param string $sha256
     *
     * @return self
     */
    public function setSha256(string $sha256): self
    {
        $this->initialized['sha256'] = true;
        $this->sha256 = $sha256;
        return $this;
    }
}