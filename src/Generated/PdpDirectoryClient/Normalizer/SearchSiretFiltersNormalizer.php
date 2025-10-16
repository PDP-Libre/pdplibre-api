<?php

namespace PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PdpLibre\Generated\PdpFPdpDirectoryClient\Runtime\Normalizer\CheckArray;
use PdpLibre\Generated\PdpFPdpDirectoryClient\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class SearchSiretFiltersNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSiretFilters::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSiretFilters::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSiretFilters();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('siret', $data)) {
            $object->setSiret($this->denormalizer->denormalize($data['siret'], \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSiretFiltersSiret::class, 'json', $context));
            unset($data['siret']);
        }
        if (\array_key_exists('siren', $data)) {
            $object->setSiren($this->denormalizer->denormalize($data['siren'], \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSirenFiltersSiren::class, 'json', $context));
            unset($data['siren']);
        }
        if (\array_key_exists('facilityType', $data)) {
            $object->setFacilityType($this->denormalizer->denormalize($data['facilityType'], \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSiretFiltersFacilityType::class, 'json', $context));
            unset($data['facilityType']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($this->denormalizer->denormalize($data['name'], \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSiretFiltersName::class, 'json', $context));
            unset($data['name']);
        }
        if (\array_key_exists('addressLines', $data)) {
            $object->setAddressLines($this->denormalizer->denormalize($data['addressLines'], \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSiretFiltersAddressLines::class, 'json', $context));
            unset($data['addressLines']);
        }
        if (\array_key_exists('postalCode', $data)) {
            $object->setPostalCode($this->denormalizer->denormalize($data['postalCode'], \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSiretFiltersPostalCode::class, 'json', $context));
            unset($data['postalCode']);
        }
        if (\array_key_exists('countrySubdivision', $data)) {
            $object->setCountrySubdivision($this->denormalizer->denormalize($data['countrySubdivision'], \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSiretFiltersCountrySubdivision::class, 'json', $context));
            unset($data['countrySubdivision']);
        }
        if (\array_key_exists('locality', $data)) {
            $object->setLocality($this->denormalizer->denormalize($data['locality'], \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSiretFiltersLocality::class, 'json', $context));
            unset($data['locality']);
        }
        if (\array_key_exists('administrativeStatus', $data)) {
            $object->setAdministrativeStatus($this->denormalizer->denormalize($data['administrativeStatus'], \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSiretFiltersAdministrativeStatus::class, 'json', $context));
            unset($data['administrativeStatus']);
        }
        if (\array_key_exists('history', $data)) {
            $object->setHistory($this->denormalizer->denormalize($data['history'], \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSiretFiltersHistory::class, 'json', $context));
            unset($data['history']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('siret') && null !== $data->getSiret()) {
            $dataArray['siret'] = $this->normalizer->normalize($data->getSiret(), 'json', $context);
        }
        if ($data->isInitialized('siren') && null !== $data->getSiren()) {
            $dataArray['siren'] = $this->normalizer->normalize($data->getSiren(), 'json', $context);
        }
        if ($data->isInitialized('facilityType') && null !== $data->getFacilityType()) {
            $dataArray['facilityType'] = $this->normalizer->normalize($data->getFacilityType(), 'json', $context);
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $this->normalizer->normalize($data->getName(), 'json', $context);
        }
        if ($data->isInitialized('addressLines') && null !== $data->getAddressLines()) {
            $dataArray['addressLines'] = $this->normalizer->normalize($data->getAddressLines(), 'json', $context);
        }
        if ($data->isInitialized('postalCode') && null !== $data->getPostalCode()) {
            $dataArray['postalCode'] = $this->normalizer->normalize($data->getPostalCode(), 'json', $context);
        }
        if ($data->isInitialized('countrySubdivision') && null !== $data->getCountrySubdivision()) {
            $dataArray['countrySubdivision'] = $this->normalizer->normalize($data->getCountrySubdivision(), 'json', $context);
        }
        if ($data->isInitialized('locality') && null !== $data->getLocality()) {
            $dataArray['locality'] = $this->normalizer->normalize($data->getLocality(), 'json', $context);
        }
        if ($data->isInitialized('administrativeStatus') && null !== $data->getAdministrativeStatus()) {
            $dataArray['administrativeStatus'] = $this->normalizer->normalize($data->getAdministrativeStatus(), 'json', $context);
        }
        if ($data->isInitialized('history') && null !== $data->getHistory()) {
            $dataArray['history'] = $this->normalizer->normalize($data->getHistory(), 'json', $context);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSiretFilters::class => false];
    }
}