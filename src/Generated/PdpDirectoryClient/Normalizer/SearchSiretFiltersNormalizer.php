<?php

namespace App\Generated\PdpDirectoryClient\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use App\Generated\PdpDirectoryClient\Runtime\Normalizer\CheckArray;
use App\Generated\PdpDirectoryClient\Runtime\Normalizer\ValidatorTrait;
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
        return $type === \App\Generated\PdpDirectoryClient\Model\SearchSiretFilters::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \App\Generated\PdpDirectoryClient\Model\SearchSiretFilters::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \App\Generated\PdpDirectoryClient\Model\SearchSiretFilters();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('siret', $data)) {
            $object->setSiret($this->denormalizer->denormalize($data['siret'], \App\Generated\PdpDirectoryClient\Model\SearchSiretFiltersSiret::class, 'json', $context));
            unset($data['siret']);
        }
        if (\array_key_exists('siren', $data)) {
            $object->setSiren($this->denormalizer->denormalize($data['siren'], \App\Generated\PdpDirectoryClient\Model\SearchSirenFiltersSiren::class, 'json', $context));
            unset($data['siren']);
        }
        if (\array_key_exists('facilityType', $data)) {
            $object->setFacilityType($this->denormalizer->denormalize($data['facilityType'], \App\Generated\PdpDirectoryClient\Model\SearchSiretFiltersFacilityType::class, 'json', $context));
            unset($data['facilityType']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($this->denormalizer->denormalize($data['name'], \App\Generated\PdpDirectoryClient\Model\SearchSiretFiltersName::class, 'json', $context));
            unset($data['name']);
        }
        if (\array_key_exists('addressLines', $data)) {
            $object->setAddressLines($this->denormalizer->denormalize($data['addressLines'], \App\Generated\PdpDirectoryClient\Model\SearchSiretFiltersAddressLines::class, 'json', $context));
            unset($data['addressLines']);
        }
        if (\array_key_exists('postalCode', $data)) {
            $object->setPostalCode($this->denormalizer->denormalize($data['postalCode'], \App\Generated\PdpDirectoryClient\Model\SearchSiretFiltersPostalCode::class, 'json', $context));
            unset($data['postalCode']);
        }
        if (\array_key_exists('countrySubdivision', $data)) {
            $object->setCountrySubdivision($this->denormalizer->denormalize($data['countrySubdivision'], \App\Generated\PdpDirectoryClient\Model\SearchSiretFiltersCountrySubdivision::class, 'json', $context));
            unset($data['countrySubdivision']);
        }
        if (\array_key_exists('locality', $data)) {
            $object->setLocality($this->denormalizer->denormalize($data['locality'], \App\Generated\PdpDirectoryClient\Model\SearchSiretFiltersLocality::class, 'json', $context));
            unset($data['locality']);
        }
        if (\array_key_exists('administrativeStatus', $data)) {
            $object->setAdministrativeStatus($this->denormalizer->denormalize($data['administrativeStatus'], \App\Generated\PdpDirectoryClient\Model\SearchSiretFiltersAdministrativeStatus::class, 'json', $context));
            unset($data['administrativeStatus']);
        }
        if (\array_key_exists('history', $data)) {
            $object->setHistory($this->denormalizer->denormalize($data['history'], \App\Generated\PdpDirectoryClient\Model\SearchSiretFiltersHistory::class, 'json', $context));
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
        return [\App\Generated\PdpDirectoryClient\Model\SearchSiretFilters::class => false];
    }
}