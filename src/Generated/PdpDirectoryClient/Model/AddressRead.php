<?php

namespace App\Generated\PdpDirectoryClient\Model;

class AddressRead extends \ArrayObject
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
     * Correspond à l’address de la structure destinataire ayant définie la ou les lignes d’annuaire.
     *
     * @var string
     */
    protected $addressLine1;
    /**
     * Correspond à l’address de la structure destinataire ayant définie la ou les lignes d’annuaire.
     *
     * @var string
     */
    protected $addressLine2;
    /**
     * Correspond à l’address de la structure destinataire ayant définie la ou les lignes d’annuaire.
     *
     * @var string
     */
    protected $addressLine3;
    /**
     * Service postal code
     *
     * @var string
     */
    protected $postalCode;
    /**
     * Subdivision of the country
     *
     * @var string
     */
    protected $countrySubdivision;
    /**
     * Municipality of the recipient structure having defined the directory line(s).
     *
     * @var string
     */
    protected $locality;
    /**
     * Correspond au code pays de la structure destinataire.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * Correspond au pays de la structure destinataire ayant définie la ou les lignes d’annuaire.
     *
     * @var string
     */
    protected $countryName;
    /**
     * Correspond à l’address de la structure destinataire ayant définie la ou les lignes d’annuaire.
     *
     * @return string
     */
    public function getAddressLine1(): string
    {
        return $this->addressLine1;
    }
    /**
     * Correspond à l’address de la structure destinataire ayant définie la ou les lignes d’annuaire.
     *
     * @param string $addressLine1
     *
     * @return self
     */
    public function setAddressLine1(string $addressLine1): self
    {
        $this->initialized['addressLine1'] = true;
        $this->addressLine1 = $addressLine1;
        return $this;
    }
    /**
     * Correspond à l’address de la structure destinataire ayant définie la ou les lignes d’annuaire.
     *
     * @return string
     */
    public function getAddressLine2(): string
    {
        return $this->addressLine2;
    }
    /**
     * Correspond à l’address de la structure destinataire ayant définie la ou les lignes d’annuaire.
     *
     * @param string $addressLine2
     *
     * @return self
     */
    public function setAddressLine2(string $addressLine2): self
    {
        $this->initialized['addressLine2'] = true;
        $this->addressLine2 = $addressLine2;
        return $this;
    }
    /**
     * Correspond à l’address de la structure destinataire ayant définie la ou les lignes d’annuaire.
     *
     * @return string
     */
    public function getAddressLine3(): string
    {
        return $this->addressLine3;
    }
    /**
     * Correspond à l’address de la structure destinataire ayant définie la ou les lignes d’annuaire.
     *
     * @param string $addressLine3
     *
     * @return self
     */
    public function setAddressLine3(string $addressLine3): self
    {
        $this->initialized['addressLine3'] = true;
        $this->addressLine3 = $addressLine3;
        return $this;
    }
    /**
     * Service postal code
     *
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }
    /**
     * Service postal code
     *
     * @param string $postalCode
     *
     * @return self
     */
    public function setPostalCode(string $postalCode): self
    {
        $this->initialized['postalCode'] = true;
        $this->postalCode = $postalCode;
        return $this;
    }
    /**
     * Subdivision of the country
     *
     * @return string
     */
    public function getCountrySubdivision(): string
    {
        return $this->countrySubdivision;
    }
    /**
     * Subdivision of the country
     *
     * @param string $countrySubdivision
     *
     * @return self
     */
    public function setCountrySubdivision(string $countrySubdivision): self
    {
        $this->initialized['countrySubdivision'] = true;
        $this->countrySubdivision = $countrySubdivision;
        return $this;
    }
    /**
     * Municipality of the recipient structure having defined the directory line(s).
     *
     * @return string
     */
    public function getLocality(): string
    {
        return $this->locality;
    }
    /**
     * Municipality of the recipient structure having defined the directory line(s).
     *
     * @param string $locality
     *
     * @return self
     */
    public function setLocality(string $locality): self
    {
        $this->initialized['locality'] = true;
        $this->locality = $locality;
        return $this;
    }
    /**
     * Correspond au code pays de la structure destinataire.
     *
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }
    /**
     * Correspond au code pays de la structure destinataire.
     *
     * @param string $countryCode
     *
     * @return self
     */
    public function setCountryCode(string $countryCode): self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;
        return $this;
    }
    /**
     * Correspond au pays de la structure destinataire ayant définie la ou les lignes d’annuaire.
     *
     * @return string
     */
    public function getCountryName(): string
    {
        return $this->countryName;
    }
    /**
     * Correspond au pays de la structure destinataire ayant définie la ou les lignes d’annuaire.
     *
     * @param string $countryName
     *
     * @return self
     */
    public function setCountryName(string $countryName): self
    {
        $this->initialized['countryName'] = true;
        $this->countryName = $countryName;
        return $this;
    }
}