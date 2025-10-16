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
class UpdatePutRoutingCodeBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \App\Generated\PdpDirectoryClient\Model\UpdatePutRoutingCodeBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \App\Generated\PdpDirectoryClient\Model\UpdatePutRoutingCodeBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \App\Generated\PdpDirectoryClient\Model\UpdatePutRoutingCodeBody();
        if (\array_key_exists('managesLegalCommitmentCode', $data) && \is_int($data['managesLegalCommitmentCode'])) {
            $data['managesLegalCommitmentCode'] = (bool) $data['managesLegalCommitmentCode'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('routingIdentifierType', $data)) {
            $object->setRoutingIdentifierType($data['routingIdentifierType']);
            unset($data['routingIdentifierType']);
        }
        if (\array_key_exists('routingCodeName', $data)) {
            $object->setRoutingCodeName($data['routingCodeName']);
            unset($data['routingCodeName']);
        }
        if (\array_key_exists('administrativeStatus', $data)) {
            $object->setAdministrativeStatus($data['administrativeStatus']);
            unset($data['administrativeStatus']);
        }
        if (\array_key_exists('address', $data)) {
            $object->setAddress($this->denormalizer->denormalize($data['address'], \App\Generated\PdpDirectoryClient\Model\AddressPut::class, 'json', $context));
            unset($data['address']);
        }
        if (\array_key_exists('managesLegalCommitmentCode', $data)) {
            $object->setManagesLegalCommitmentCode($data['managesLegalCommitmentCode']);
            unset($data['managesLegalCommitmentCode']);
        }
        if (\array_key_exists('siret', $data)) {
            $object->setSiret($data['siret']);
            unset($data['siret']);
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
        $dataArray['routingIdentifierType'] = $data->getRoutingIdentifierType();
        $dataArray['routingCodeName'] = $data->getRoutingCodeName();
        $dataArray['administrativeStatus'] = $data->getAdministrativeStatus();
        $dataArray['address'] = $this->normalizer->normalize($data->getAddress(), 'json', $context);
        $dataArray['managesLegalCommitmentCode'] = $data->getManagesLegalCommitmentCode();
        $dataArray['siret'] = $data->getSiret();
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\App\Generated\PdpDirectoryClient\Model\UpdatePutRoutingCodeBody::class => false];
    }
}