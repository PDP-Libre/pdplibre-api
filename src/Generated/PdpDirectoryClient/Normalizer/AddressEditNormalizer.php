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
class AddressEditNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \App\Generated\PdpDirectoryClient\Model\AddressEdit::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \App\Generated\PdpDirectoryClient\Model\AddressEdit::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \App\Generated\PdpDirectoryClient\Model\AddressEdit();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ligneAdresse1', $data)) {
            $object->setLigneAdresse1($data['ligneAdresse1']);
            unset($data['ligneAdresse1']);
        }
        if (\array_key_exists('ligneAdresse2', $data)) {
            $object->setLigneAdresse2($data['ligneAdresse2']);
            unset($data['ligneAdresse2']);
        }
        if (\array_key_exists('ligneAdresse3', $data)) {
            $object->setLigneAdresse3($data['ligneAdresse3']);
            unset($data['ligneAdresse3']);
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
        if (\array_key_exists('codePays', $data)) {
            $object->setCodePays($data['codePays']);
            unset($data['codePays']);
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
        if ($data->isInitialized('ligneAdresse1') && null !== $data->getLigneAdresse1()) {
            $dataArray['ligneAdresse1'] = $data->getLigneAdresse1();
        }
        if ($data->isInitialized('ligneAdresse2') && null !== $data->getLigneAdresse2()) {
            $dataArray['ligneAdresse2'] = $data->getLigneAdresse2();
        }
        if ($data->isInitialized('ligneAdresse3') && null !== $data->getLigneAdresse3()) {
            $dataArray['ligneAdresse3'] = $data->getLigneAdresse3();
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
        if ($data->isInitialized('codePays') && null !== $data->getCodePays()) {
            $dataArray['codePays'] = $data->getCodePays();
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
        return [\App\Generated\PdpDirectoryClient\Model\AddressEdit::class => false];
    }
}