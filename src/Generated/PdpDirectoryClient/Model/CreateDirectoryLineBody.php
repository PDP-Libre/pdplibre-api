<?php

namespace App\Generated\PdpDirectoryClient\Model;

class CreateDirectoryLineBody extends \ArrayObject
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
     * @var CreateDirectoryLineBodyPeriod
     */
    protected $period;
    /**
     * 
     *
     * @var CreateDirectoryLineBodyAddressingInformation
     */
    protected $addressingInformation;
    /**
     * 
     *
     * @return CreateDirectoryLineBodyPeriod
     */
    public function getPeriod(): CreateDirectoryLineBodyPeriod
    {
        return $this->period;
    }
    /**
     * 
     *
     * @param CreateDirectoryLineBodyPeriod $period
     *
     * @return self
     */
    public function setPeriod(CreateDirectoryLineBodyPeriod $period): self
    {
        $this->initialized['period'] = true;
        $this->period = $period;
        return $this;
    }
    /**
     * 
     *
     * @return CreateDirectoryLineBodyAddressingInformation
     */
    public function getAddressingInformation(): CreateDirectoryLineBodyAddressingInformation
    {
        return $this->addressingInformation;
    }
    /**
     * 
     *
     * @param CreateDirectoryLineBodyAddressingInformation $addressingInformation
     *
     * @return self
     */
    public function setAddressingInformation(CreateDirectoryLineBodyAddressingInformation $addressingInformation): self
    {
        $this->initialized['addressingInformation'] = true;
        $this->addressingInformation = $addressingInformation;
        return $this;
    }
}