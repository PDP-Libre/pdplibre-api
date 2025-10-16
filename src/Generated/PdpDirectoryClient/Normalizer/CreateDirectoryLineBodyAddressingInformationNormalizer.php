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
class CreateDirectoryLineBodyAddressingInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \App\Generated\PdpDirectoryClient\Model\CreateDirectoryLineBodyAddressingInformation::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \App\Generated\PdpDirectoryClient\Model\CreateDirectoryLineBodyAddressingInformation::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \App\Generated\PdpDirectoryClient\Model\CreateDirectoryLineBodyAddressingInformation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('siren', $data)) {
            $object->setSiren($data['siren']);
        }
        if (\array_key_exists('siret', $data)) {
            $object->setSiret($data['siret']);
        }
        if (\array_key_exists('routingIdentifier', $data)) {
            $object->setRoutingIdentifier($data['routingIdentifier']);
        }
        if (\array_key_exists('addressingSuffix', $data)) {
            $object->setAddressingSuffix($data['addressingSuffix']);
        }
        if (\array_key_exists('platformRegistrationNumber', $data)) {
            $object->setPlatformRegistrationNumber($data['platformRegistrationNumber']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['siren'] = $data->getSiren();
        if ($data->isInitialized('siret') && null !== $data->getSiret()) {
            $dataArray['siret'] = $data->getSiret();
        }
        if ($data->isInitialized('routingIdentifier') && null !== $data->getRoutingIdentifier()) {
            $dataArray['routingIdentifier'] = $data->getRoutingIdentifier();
        }
        if ($data->isInitialized('addressingSuffix') && null !== $data->getAddressingSuffix()) {
            $dataArray['addressingSuffix'] = $data->getAddressingSuffix();
        }
        $dataArray['platformRegistrationNumber'] = $data->getPlatformRegistrationNumber();
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\App\Generated\PdpDirectoryClient\Model\CreateDirectoryLineBodyAddressingInformation::class => false];
    }
}