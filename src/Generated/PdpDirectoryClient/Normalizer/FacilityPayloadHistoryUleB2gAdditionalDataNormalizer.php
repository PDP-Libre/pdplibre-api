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
class FacilityPayloadHistoryUleB2gAdditionalDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\FacilityPayloadHistoryUleB2gAdditionalData::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\FacilityPayloadHistoryUleB2gAdditionalData::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\FacilityPayloadHistoryUleB2gAdditionalData();
        if (\array_key_exists('pm', $data) && \is_int($data['pm'])) {
            $data['pm'] = (bool) $data['pm'];
        }
        if (\array_key_exists('pmOnly', $data) && \is_int($data['pmOnly'])) {
            $data['pmOnly'] = (bool) $data['pmOnly'];
        }
        if (\array_key_exists('managesPaymentStatus', $data) && \is_int($data['managesPaymentStatus'])) {
            $data['managesPaymentStatus'] = (bool) $data['managesPaymentStatus'];
        }
        if (\array_key_exists('managesLegalCommitmentCode', $data) && \is_int($data['managesLegalCommitmentCode'])) {
            $data['managesLegalCommitmentCode'] = (bool) $data['managesLegalCommitmentCode'];
        }
        if (\array_key_exists('managesLegalCommitmentOrServiceCode', $data) && \is_int($data['managesLegalCommitmentOrServiceCode'])) {
            $data['managesLegalCommitmentOrServiceCode'] = (bool) $data['managesLegalCommitmentOrServiceCode'];
        }
        if (\array_key_exists('serviceCodeStatus', $data) && \is_int($data['serviceCodeStatus'])) {
            $data['serviceCodeStatus'] = (bool) $data['serviceCodeStatus'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('pm', $data)) {
            $object->setPm($data['pm']);
            unset($data['pm']);
        }
        if (\array_key_exists('pmOnly', $data)) {
            $object->setPmOnly($data['pmOnly']);
            unset($data['pmOnly']);
        }
        if (\array_key_exists('managesPaymentStatus', $data)) {
            $object->setManagesPaymentStatus($data['managesPaymentStatus']);
            unset($data['managesPaymentStatus']);
        }
        if (\array_key_exists('managesLegalCommitmentCode', $data)) {
            $object->setManagesLegalCommitmentCode($data['managesLegalCommitmentCode']);
            unset($data['managesLegalCommitmentCode']);
        }
        if (\array_key_exists('managesLegalCommitmentOrServiceCode', $data)) {
            $object->setManagesLegalCommitmentOrServiceCode($data['managesLegalCommitmentOrServiceCode']);
            unset($data['managesLegalCommitmentOrServiceCode']);
        }
        if (\array_key_exists('serviceCodeStatus', $data)) {
            $object->setServiceCodeStatus($data['serviceCodeStatus']);
            unset($data['serviceCodeStatus']);
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
        if ($data->isInitialized('pm') && null !== $data->getPm()) {
            $dataArray['pm'] = $data->getPm();
        }
        if ($data->isInitialized('pmOnly') && null !== $data->getPmOnly()) {
            $dataArray['pmOnly'] = $data->getPmOnly();
        }
        if ($data->isInitialized('managesPaymentStatus') && null !== $data->getManagesPaymentStatus()) {
            $dataArray['managesPaymentStatus'] = $data->getManagesPaymentStatus();
        }
        if ($data->isInitialized('managesLegalCommitmentCode') && null !== $data->getManagesLegalCommitmentCode()) {
            $dataArray['managesLegalCommitmentCode'] = $data->getManagesLegalCommitmentCode();
        }
        if ($data->isInitialized('managesLegalCommitmentOrServiceCode') && null !== $data->getManagesLegalCommitmentOrServiceCode()) {
            $dataArray['managesLegalCommitmentOrServiceCode'] = $data->getManagesLegalCommitmentOrServiceCode();
        }
        if ($data->isInitialized('serviceCodeStatus') && null !== $data->getServiceCodeStatus()) {
            $dataArray['serviceCodeStatus'] = $data->getServiceCodeStatus();
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
        return [\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\FacilityPayloadHistoryUleB2gAdditionalData::class => false];
    }
}