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
class DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCodeRoutingCodeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \App\Generated\PdpDirectoryClient\Model\DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCodeRoutingCode::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \App\Generated\PdpDirectoryClient\Model\DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCodeRoutingCode::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \App\Generated\PdpDirectoryClient\Model\DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCodeRoutingCode();
        if (\array_key_exists('managesLegalCommitment', $data) && \is_int($data['managesLegalCommitment'])) {
            $data['managesLegalCommitment'] = (bool) $data['managesLegalCommitment'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('routingIdentifier', $data)) {
            $object->setRoutingIdentifier($data['routingIdentifier']);
            unset($data['routingIdentifier']);
        }
        if (\array_key_exists('routingIdentifierType', $data)) {
            $object->setRoutingIdentifierType($data['routingIdentifierType']);
            unset($data['routingIdentifierType']);
        }
        if (\array_key_exists('routingCodeName', $data)) {
            $object->setRoutingCodeName($data['routingCodeName']);
            unset($data['routingCodeName']);
        }
        if (\array_key_exists('managesLegalCommitment', $data)) {
            $object->setManagesLegalCommitment($data['managesLegalCommitment']);
            unset($data['managesLegalCommitment']);
        }
        if (\array_key_exists('administrativeStatus', $data)) {
            $object->setAdministrativeStatus($data['administrativeStatus']);
            unset($data['administrativeStatus']);
        }
        if (\array_key_exists('address', $data)) {
            $object->setAddress($this->denormalizer->denormalize($data['address'], \App\Generated\PdpDirectoryClient\Model\AddressRead::class, 'json', $context));
            unset($data['address']);
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
            $dataArray['routingIdentifier'] = $data->getRoutingIdentifier();
        }
        if ($data->isInitialized('routingIdentifierType') && null !== $data->getRoutingIdentifierType()) {
            $dataArray['routingIdentifierType'] = $data->getRoutingIdentifierType();
        }
        if ($data->isInitialized('routingCodeName') && null !== $data->getRoutingCodeName()) {
            $dataArray['routingCodeName'] = $data->getRoutingCodeName();
        }
        if ($data->isInitialized('managesLegalCommitment') && null !== $data->getManagesLegalCommitment()) {
            $dataArray['managesLegalCommitment'] = $data->getManagesLegalCommitment();
        }
        if ($data->isInitialized('administrativeStatus') && null !== $data->getAdministrativeStatus()) {
            $dataArray['administrativeStatus'] = $data->getAdministrativeStatus();
        }
        if ($data->isInitialized('address') && null !== $data->getAddress()) {
            $dataArray['address'] = $this->normalizer->normalize($data->getAddress(), 'json', $context);
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
        return [\App\Generated\PdpDirectoryClient\Model\DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCodeRoutingCode::class => false];
    }
}