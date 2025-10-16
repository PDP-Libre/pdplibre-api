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
class LegalUnitPayloadIncludedNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \App\Generated\PdpDirectoryClient\Model\LegalUnitPayloadIncluded::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \App\Generated\PdpDirectoryClient\Model\LegalUnitPayloadIncluded::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \App\Generated\PdpDirectoryClient\Model\LegalUnitPayloadIncluded();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('siren', $data)) {
            $object->setSiren($data['siren']);
            unset($data['siren']);
        }
        if (\array_key_exists('businessName', $data)) {
            $object->setBusinessName($data['businessName']);
            unset($data['businessName']);
        }
        if (\array_key_exists('entityType', $data)) {
            $object->setEntityType($data['entityType']);
            unset($data['entityType']);
        }
        if (\array_key_exists('administrativeStatus', $data)) {
            $object->setAdministrativeStatus($data['administrativeStatus']);
            unset($data['administrativeStatus']);
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
        if ($data->isInitialized('siren') && null !== $data->getSiren()) {
            $dataArray['siren'] = $data->getSiren();
        }
        if ($data->isInitialized('businessName') && null !== $data->getBusinessName()) {
            $dataArray['businessName'] = $data->getBusinessName();
        }
        if ($data->isInitialized('entityType') && null !== $data->getEntityType()) {
            $dataArray['entityType'] = $data->getEntityType();
        }
        if ($data->isInitialized('administrativeStatus') && null !== $data->getAdministrativeStatus()) {
            $dataArray['administrativeStatus'] = $data->getAdministrativeStatus();
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
        return [\App\Generated\PdpDirectoryClient\Model\LegalUnitPayloadIncluded::class => false];
    }
}