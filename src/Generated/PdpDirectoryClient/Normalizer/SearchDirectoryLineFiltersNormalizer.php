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
class SearchDirectoryLineFiltersNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \App\Generated\PdpDirectoryClient\Model\SearchDirectoryLineFilters::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \App\Generated\PdpDirectoryClient\Model\SearchDirectoryLineFilters::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \App\Generated\PdpDirectoryClient\Model\SearchDirectoryLineFilters();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('addressingIdentifier', $data)) {
            $object->setAddressingIdentifier($this->denormalizer->denormalize($data['addressingIdentifier'], \App\Generated\PdpDirectoryClient\Model\SearchDirectoryLineFiltersAddressingIdentifier::class, 'json', $context));
            unset($data['addressingIdentifier']);
        }
        if (\array_key_exists('platformRegistrationNumber', $data)) {
            $object->setPlatformRegistrationNumber($this->denormalizer->denormalize($data['platformRegistrationNumber'], \App\Generated\PdpDirectoryClient\Model\SearchDirectoryLineFiltersPlatformRegistrationNumber::class, 'json', $context));
            unset($data['platformRegistrationNumber']);
        }
        if (\array_key_exists('siren', $data)) {
            $object->setSiren($this->denormalizer->denormalize($data['siren'], \App\Generated\PdpDirectoryClient\Model\SearchSirenFiltersSiren::class, 'json', $context));
            unset($data['siren']);
        }
        if (\array_key_exists('siret', $data)) {
            $object->setSiret($this->denormalizer->denormalize($data['siret'], \App\Generated\PdpDirectoryClient\Model\SearchSiretFiltersSiret::class, 'json', $context));
            unset($data['siret']);
        }
        if (\array_key_exists('routingIdentifier', $data)) {
            $object->setRoutingIdentifier($this->denormalizer->denormalize($data['routingIdentifier'], \App\Generated\PdpDirectoryClient\Model\RoutingCodeSearchFiltersRoutingIdentifier::class, 'json', $context));
            unset($data['routingIdentifier']);
        }
        if (\array_key_exists('addressingSuffix', $data)) {
            $object->setAddressingSuffix($this->denormalizer->denormalize($data['addressingSuffix'], \App\Generated\PdpDirectoryClient\Model\SearchDirectoryLineFiltersAddressingSuffix::class, 'json', $context));
            unset($data['addressingSuffix']);
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
        if ($data->isInitialized('addressingIdentifier') && null !== $data->getAddressingIdentifier()) {
            $dataArray['addressingIdentifier'] = $this->normalizer->normalize($data->getAddressingIdentifier(), 'json', $context);
        }
        if ($data->isInitialized('platformRegistrationNumber') && null !== $data->getPlatformRegistrationNumber()) {
            $dataArray['platformRegistrationNumber'] = $this->normalizer->normalize($data->getPlatformRegistrationNumber(), 'json', $context);
        }
        if ($data->isInitialized('siren') && null !== $data->getSiren()) {
            $dataArray['siren'] = $this->normalizer->normalize($data->getSiren(), 'json', $context);
        }
        if ($data->isInitialized('siret') && null !== $data->getSiret()) {
            $dataArray['siret'] = $this->normalizer->normalize($data->getSiret(), 'json', $context);
        }
        if ($data->isInitialized('routingIdentifier') && null !== $data->getRoutingIdentifier()) {
            $dataArray['routingIdentifier'] = $this->normalizer->normalize($data->getRoutingIdentifier(), 'json', $context);
        }
        if ($data->isInitialized('addressingSuffix') && null !== $data->getAddressingSuffix()) {
            $dataArray['addressingSuffix'] = $this->normalizer->normalize($data->getAddressingSuffix(), 'json', $context);
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
        return [\App\Generated\PdpDirectoryClient\Model\SearchDirectoryLineFilters::class => false];
    }
}