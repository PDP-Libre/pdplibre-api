<?php

namespace PdpLibre\Generated\PdpFPdpDirectoryClient\Model;

class AddressPut extends \ArrayObject
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
    protected $ligneAdresse1;
    /**
     * Correspond à l’address de la structure destinataire ayant définie la ou les lignes d’annuaire.
     *
     * @var string
     */
    protected $ligneAdresse2;
    /**
     * Correspond à l’address de la structure destinataire ayant définie la ou les lignes d’annuaire.
     *
     * @var string
     */
    protected $ligneAdresse3;
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
     * Correspond à la commune de la structure destinataire ayant définie la ou les lignes d’annuaire.
     *
     * @var string
     */
    protected $locality;
    /**
     * Correspond au code pays de la structure destinataire.
     *
     * @var string
     */
    protected $codePays;
    /**
     * Correspond à l’address de la structure destinataire ayant définie la ou les lignes d’annuaire.
     *
     * @return string
     */
    public function getLigneAdresse1(): string
    {
        return $this->ligneAdresse1;
    }
    /**
     * Correspond à l’address de la structure destinataire ayant définie la ou les lignes d’annuaire.
     *
     * @param string $ligneAdresse1
     *
     * @return self
     */
    public function setLigneAdresse1(string $ligneAdresse1): self
    {
        $this->initialized['ligneAdresse1'] = true;
        $this->ligneAdresse1 = $ligneAdresse1;
        return $this;
    }
    /**
     * Correspond à l’address de la structure destinataire ayant définie la ou les lignes d’annuaire.
     *
     * @return string
     */
    public function getLigneAdresse2(): string
    {
        return $this->ligneAdresse2;
    }
    /**
     * Correspond à l’address de la structure destinataire ayant définie la ou les lignes d’annuaire.
     *
     * @param string $ligneAdresse2
     *
     * @return self
     */
    public function setLigneAdresse2(string $ligneAdresse2): self
    {
        $this->initialized['ligneAdresse2'] = true;
        $this->ligneAdresse2 = $ligneAdresse2;
        return $this;
    }
    /**
     * Correspond à l’address de la structure destinataire ayant définie la ou les lignes d’annuaire.
     *
     * @return string
     */
    public function getLigneAdresse3(): string
    {
        return $this->ligneAdresse3;
    }
    /**
     * Correspond à l’address de la structure destinataire ayant définie la ou les lignes d’annuaire.
     *
     * @param string $ligneAdresse3
     *
     * @return self
     */
    public function setLigneAdresse3(string $ligneAdresse3): self
    {
        $this->initialized['ligneAdresse3'] = true;
        $this->ligneAdresse3 = $ligneAdresse3;
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
     * Correspond à la commune de la structure destinataire ayant définie la ou les lignes d’annuaire.
     *
     * @return string
     */
    public function getLocality(): string
    {
        return $this->locality;
    }
    /**
     * Correspond à la commune de la structure destinataire ayant définie la ou les lignes d’annuaire.
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
    public function getCodePays(): string
    {
        return $this->codePays;
    }
    /**
     * Correspond au code pays de la structure destinataire.
     *
     * @param string $codePays
     *
     * @return self
     */
    public function setCodePays(string $codePays): self
    {
        $this->initialized['codePays'] = true;
        $this->codePays = $codePays;
        return $this;
    }
}