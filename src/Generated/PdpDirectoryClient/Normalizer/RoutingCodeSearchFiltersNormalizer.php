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
class RoutingCodeSearchFiltersNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \App\Generated\PdpDirectoryClient\Model\RoutingCodeSearchFilters::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \App\Generated\PdpDirectoryClient\Model\RoutingCodeSearchFilters::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \App\Generated\PdpDirectoryClient\Model\RoutingCodeSearchFilters();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('routingIdentifier', $data)) {
            $object->setRoutingIdentifier($this->denormalizer->denormalize($data['routingIdentifier'], \App\Generated\PdpDirectoryClient\Model\RoutingCodeSearchFiltersRoutingIdentifier::class, 'json', $context));
            unset($data['routingIdentifier']);
        }
        if (\array_key_exists('siret', $data)) {
            $object->setSiret($this->denormalizer->denormalize($data['siret'], \App\Generated\PdpDirectoryClient\Model\SearchSiretFiltersSiret::class, 'json', $context));
            unset($data['siret']);
        }
        if (\array_key_exists('routingCodeName', $data)) {
            $object->setRoutingCodeName($this->denormalizer->denormalize($data['routingCodeName'], \App\Generated\PdpDirectoryClient\Model\RoutingCodeSearchFiltersRoutingCodeName::class, 'json', $context));
            unset($data['routingCodeName']);
        }
        if (\array_key_exists('administrativeStatus', $data)) {
            $object->setAdministrativeStatus($this->denormalizer->denormalize($data['administrativeStatus'], \App\Generated\PdpDirectoryClient\Model\RoutingCodeSearchFiltersAdministrativeStatus::class, 'json', $context));
            unset($data['administrativeStatus']);
        }
        if (\array_key_exists('addressLines', $data)) {
            $object->setAddressLines($this->denormalizer->denormalize($data['addressLines'], \App\Generated\PdpDirectoryClient\Model\SearchSiretFiltersAddressLines::class, 'json', $context));
            unset($data['addressLines']);
        }
        if (\array_key_exists('postalCode', $data)) {
            $object->setPostalCode($this->denormalizer->denormalize($data['postalCode'], \App\Generated\PdpDirectoryClient\Model\SearchSiretFiltersPostalCode::class, 'json', $context));
            unset($data['postalCode']);
        }
        if (\array_key_exists('locality', $data)) {
            $object->setLocality($this->denormalizer->denormalize($data['locality'], \App\Generated\PdpDirectoryClient\Model\SearchSiretFiltersLocality::class, 'json', $context));
            unset($data['locality']);
        }
        if (\array_key_exists('history', $data)) {
            $object->setHistory($this->denormalizer->denormalize($data['history'], \App\Generated\PdpDirectoryClient\Model\SearchSirenFiltersHistory::class, 'json', $context));
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
        if ($data->isInitialized('routingIdentifier') && null !== $data->getRoutingIdentifier()) {
            $dataArray['routingIdentifier'] = $this->normalizer->normalize($data->getRoutingIdentifier(), 'json', $context);
        }
        if ($data->isInitialized('siret') && null !== $data->getSiret()) {
            $dataArray['siret'] = $this->normalizer->normalize($data->getSiret(), 'json', $context);
        }
        if ($data->isInitialized('routingCodeName') && null !== $data->getRoutingCodeName()) {
            $dataArray['routingCodeName'] = $this->normalizer->normalize($data->getRoutingCodeName(), 'json', $context);
        }
        if ($data->isInitialized('administrativeStatus') && null !== $data->getAdministrativeStatus()) {
            $dataArray['administrativeStatus'] = $this->normalizer->normalize($data->getAdministrativeStatus(), 'json', $context);
        }
        if ($data->isInitialized('addressLines') && null !== $data->getAddressLines()) {
            $dataArray['addressLines'] = $this->normalizer->normalize($data->getAddressLines(), 'json', $context);
        }
        if ($data->isInitialized('postalCode') && null !== $data->getPostalCode()) {
            $dataArray['postalCode'] = $this->normalizer->normalize($data->getPostalCode(), 'json', $context);
        }
        if ($data->isInitialized('locality') && null !== $data->getLocality()) {
            $dataArray['locality'] = $this->normalizer->normalize($data->getLocality(), 'json', $context);
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
        return [\App\Generated\PdpDirectoryClient\Model\RoutingCodeSearchFilters::class => false];
    }
}