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
class CreateRoutingCodeBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \App\Generated\PdpDirectoryClient\Model\CreateRoutingCodeBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \App\Generated\PdpDirectoryClient\Model\CreateRoutingCodeBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \App\Generated\PdpDirectoryClient\Model\CreateRoutingCodeBody();
        if (\array_key_exists('managesLegalCommitmentCode', $data) && \is_int($data['managesLegalCommitmentCode'])) {
            $data['managesLegalCommitmentCode'] = (bool) $data['managesLegalCommitmentCode'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('facilityNature', $data)) {
            $object->setFacilityNature($data['facilityNature']);
        }
        if (\array_key_exists('routingIdentifier', $data)) {
            $object->setRoutingIdentifier($data['routingIdentifier']);
        }
        if (\array_key_exists('siret', $data)) {
            $object->setSiret($data['siret']);
        }
        if (\array_key_exists('routingIdentifierType', $data)) {
            $object->setRoutingIdentifierType($data['routingIdentifierType']);
        }
        if (\array_key_exists('routingCodeName', $data)) {
            $object->setRoutingCodeName($data['routingCodeName']);
        }
        if (\array_key_exists('managesLegalCommitmentCode', $data)) {
            $object->setManagesLegalCommitmentCode($data['managesLegalCommitmentCode']);
        }
        if (\array_key_exists('administrativeStatus', $data)) {
            $object->setAdministrativeStatus($data['administrativeStatus']);
        }
        if (\array_key_exists('address', $data)) {
            $object->setAddress($this->denormalizer->denormalize($data['address'], \App\Generated\PdpDirectoryClient\Model\AddressEdit::class, 'json', $context));
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['facilityNature'] = $data->getFacilityNature();
        $dataArray['routingIdentifier'] = $data->getRoutingIdentifier();
        $dataArray['siret'] = $data->getSiret();
        if ($data->isInitialized('routingIdentifierType') && null !== $data->getRoutingIdentifierType()) {
            $dataArray['routingIdentifierType'] = $data->getRoutingIdentifierType();
        }
        $dataArray['routingCodeName'] = $data->getRoutingCodeName();
        if ($data->isInitialized('managesLegalCommitmentCode') && null !== $data->getManagesLegalCommitmentCode()) {
            $dataArray['managesLegalCommitmentCode'] = $data->getManagesLegalCommitmentCode();
        }
        $dataArray['administrativeStatus'] = $data->getAdministrativeStatus();
        if ($data->isInitialized('address') && null !== $data->getAddress()) {
            $dataArray['address'] = $this->normalizer->normalize($data->getAddress(), 'json', $context);
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\App\Generated\PdpDirectoryClient\Model\CreateRoutingCodeBody::class => false];
    }
}