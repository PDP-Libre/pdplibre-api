<?php

namespace App\Generated\PdpDirectoryClient\Model;

class DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCodePlateform extends \ArrayObject
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
     * The type of platform for document reception
     *
     * @var string
     */
    protected $platformType;
    /**
     * Platform registration number
     *
     * @var string
     */
    protected $platformRegistrationNumber;
    /**
     * Business name for the company providing the platform.
     *
     * @var string
     */
    protected $platformBusinessName;
    /**
     * Commercial name for the company providing the platform.
     *
     * @var string
     */
    protected $platformCommercialName;
    /**
     * Platform contact address
     *
     * @var string
     */
    protected $platformContactAddress;
    /**
     * Status of the platform
     *
     * @var string
     */
    protected $platformStatus;
    /**
     * The type of platform for document reception
     *
     * @return string
     */
    public function getPlatformType(): string
    {
        return $this->platformType;
    }
    /**
     * The type of platform for document reception
     *
     * @param string $platformType
     *
     * @return self
     */
    public function setPlatformType(string $platformType): self
    {
        $this->initialized['platformType'] = true;
        $this->platformType = $platformType;
        return $this;
    }
    /**
     * Platform registration number
     *
     * @return string
     */
    public function getPlatformRegistrationNumber(): string
    {
        return $this->platformRegistrationNumber;
    }
    /**
     * Platform registration number
     *
     * @param string $platformRegistrationNumber
     *
     * @return self
     */
    public function setPlatformRegistrationNumber(string $platformRegistrationNumber): self
    {
        $this->initialized['platformRegistrationNumber'] = true;
        $this->platformRegistrationNumber = $platformRegistrationNumber;
        return $this;
    }
    /**
     * Business name for the company providing the platform.
     *
     * @return string
     */
    public function getPlatformBusinessName(): string
    {
        return $this->platformBusinessName;
    }
    /**
     * Business name for the company providing the platform.
     *
     * @param string $platformBusinessName
     *
     * @return self
     */
    public function setPlatformBusinessName(string $platformBusinessName): self
    {
        $this->initialized['platformBusinessName'] = true;
        $this->platformBusinessName = $platformBusinessName;
        return $this;
    }
    /**
     * Commercial name for the company providing the platform.
     *
     * @return string
     */
    public function getPlatformCommercialName(): string
    {
        return $this->platformCommercialName;
    }
    /**
     * Commercial name for the company providing the platform.
     *
     * @param string $platformCommercialName
     *
     * @return self
     */
    public function setPlatformCommercialName(string $platformCommercialName): self
    {
        $this->initialized['platformCommercialName'] = true;
        $this->platformCommercialName = $platformCommercialName;
        return $this;
    }
    /**
     * Platform contact address
     *
     * @return string
     */
    public function getPlatformContactAddress(): string
    {
        return $this->platformContactAddress;
    }
    /**
     * Platform contact address
     *
     * @param string $platformContactAddress
     *
     * @return self
     */
    public function setPlatformContactAddress(string $platformContactAddress): self
    {
        $this->initialized['platformContactAddress'] = true;
        $this->platformContactAddress = $platformContactAddress;
        return $this;
    }
    /**
     * Status of the platform
     *
     * @return string
     */
    public function getPlatformStatus(): string
    {
        return $this->platformStatus;
    }
    /**
     * Status of the platform
     *
     * @param string $platformStatus
     *
     * @return self
     */
    public function setPlatformStatus(string $platformStatus): self
    {
        $this->initialized['platformStatus'] = true;
        $this->platformStatus = $platformStatus;
        return $this;
    }
}