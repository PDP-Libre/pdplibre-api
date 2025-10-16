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
class AddressPutNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\AddressPut::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\AddressPut::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\AddressPut();
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
        $dataArray['ligneAdresse1'] = $data->getLigneAdresse1();
        $dataArray['ligneAdresse2'] = $data->getLigneAdresse2();
        $dataArray['ligneAdresse3'] = $data->getLigneAdresse3();
        $dataArray['postalCode'] = $data->getPostalCode();
        $dataArray['countrySubdivision'] = $data->getCountrySubdivision();
        $dataArray['locality'] = $data->getLocality();
        $dataArray['codePays'] = $data->getCodePays();
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\AddressPut::class => false];
    }
}