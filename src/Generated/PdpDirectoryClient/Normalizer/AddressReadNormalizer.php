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
class AddressReadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\AddressRead::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\AddressRead::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\AddressRead();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('addressLine1', $data)) {
            $object->setAddressLine1($data['addressLine1']);
            unset($data['addressLine1']);
        }
        if (\array_key_exists('addressLine2', $data)) {
            $object->setAddressLine2($data['addressLine2']);
            unset($data['addressLine2']);
        }
        if (\array_key_exists('addressLine3', $data)) {
            $object->setAddressLine3($data['addressLine3']);
            unset($data['addressLine3']);
        }
        if (\array_key_exists('postalCode', $data)) {
            $object->setPostalCode($data['postalCode']);
            unset($data['postalCode']);
        }
        if (\array_key_exists('countrySubdivision', $data)) {
            $object->setCountrySubdivision($data['countrySubdivision']);
            unset($data['countrySubdivision']);
        }
        if (\array_key_exists('locality', $data)) {
            $object->setLocality($data['locality']);
            unset($data['locality']);
        }
        if (\array_key_exists('countryCode', $data)) {
            $object->setCountryCode($data['countryCode']);
            unset($data['countryCode']);
        }
        if (\array_key_exists('countryName', $data)) {
            $object->setCountryName($data['countryName']);
            unset($data['countryName']);
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
        if ($data->isInitialized('addressLine1') && null !== $data->getAddressLine1()) {
            $dataArray['addressLine1'] = $data->getAddressLine1();
        }
        if ($data->isInitialized('addressLine2') && null !== $data->getAddressLine2()) {
            $dataArray['addressLine2'] = $data->getAddressLine2();
        }
        if ($data->isInitialized('addressLine3') && null !== $data->getAddressLine3()) {
            $dataArray['addressLine3'] = $data->getAddressLine3();
        }
        if ($data->isInitialized('postalCode') && null !== $data->getPostalCode()) {
            $dataArray['postalCode'] = $data->getPostalCode();
        }
        if ($data->isInitialized('countrySubdivision') && null !== $data->getCountrySubdivision()) {
            $dataArray['countrySubdivision'] = $data->getCountrySubdivision();
        }
        if ($data->isInitialized('locality') && null !== $data->getLocality()) {
            $dataArray['locality'] = $data->getLocality();
        }
        if ($data->isInitialized('countryCode') && null !== $data->getCountryCode()) {
            $dataArray['countryCode'] = $data->getCountryCode();
        }
        if ($data->isInitialized('countryName') && null !== $data->getCountryName()) {
            $dataArray['countryName'] = $data->getCountryName();
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
        return [\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\AddressRead::class => false];
    }
}