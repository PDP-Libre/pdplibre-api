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
class DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCodePlateformNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \App\Generated\PdpDirectoryClient\Model\DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCodePlateform::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \App\Generated\PdpDirectoryClient\Model\DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCodePlateform::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \App\Generated\PdpDirectoryClient\Model\DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCodePlateform();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('platformType', $data)) {
            $object->setPlatformType($data['platformType']);
            unset($data['platformType']);
        }
        if (\array_key_exists('platformRegistrationNumber', $data)) {
            $object->setPlatformRegistrationNumber($data['platformRegistrationNumber']);
            unset($data['platformRegistrationNumber']);
        }
        if (\array_key_exists('platformBusinessName', $data)) {
            $object->setPlatformBusinessName($data['platformBusinessName']);
            unset($data['platformBusinessName']);
        }
        if (\array_key_exists('platformCommercialName', $data)) {
            $object->setPlatformCommercialName($data['platformCommercialName']);
            unset($data['platformCommercialName']);
        }
        if (\array_key_exists('platformContactAddress', $data)) {
            $object->setPlatformContactAddress($data['platformContactAddress']);
            unset($data['platformContactAddress']);
        }
        if (\array_key_exists('platformStatus', $data)) {
            $object->setPlatformStatus($data['platformStatus']);
            unset($data['platformStatus']);
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
        if ($data->isInitialized('platformType') && null !== $data->getPlatformType()) {
            $dataArray['platformType'] = $data->getPlatformType();
        }
        if ($data->isInitialized('platformRegistrationNumber') && null !== $data->getPlatformRegistrationNumber()) {
            $dataArray['platformRegistrationNumber'] = $data->getPlatformRegistrationNumber();
        }
        if ($data->isInitialized('platformBusinessName') && null !== $data->getPlatformBusinessName()) {
            $dataArray['platformBusinessName'] = $data->getPlatformBusinessName();
        }
        if ($data->isInitialized('platformCommercialName') && null !== $data->getPlatformCommercialName()) {
            $dataArray['platformCommercialName'] = $data->getPlatformCommercialName();
        }
        if ($data->isInitialized('platformContactAddress') && null !== $data->getPlatformContactAddress()) {
            $dataArray['platformContactAddress'] = $data->getPlatformContactAddress();
        }
        if ($data->isInitialized('platformStatus') && null !== $data->getPlatformStatus()) {
            $dataArray['platformStatus'] = $data->getPlatformStatus();
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
        return [\App\Generated\PdpDirectoryClient\Model\DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCodePlateform::class => false];
    }
}