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
class DirectoryLinePost201ResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\DirectoryLinePost201Response::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\DirectoryLinePost201Response::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\DirectoryLinePost201Response();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('idInstance', $data)) {
            $object->setIdInstance($data['idInstance']);
            unset($data['idInstance']);
        }
        if (\array_key_exists('addressingIdentifier', $data)) {
            $object->setAddressingIdentifier($data['addressingIdentifier']);
            unset($data['addressingIdentifier']);
        }
        if (\array_key_exists('dateFrom', $data)) {
            $object->setDateFrom(\DateTime::createFromFormat('Y-m-d', $data['dateFrom'])->setTime(0, 0, 0));
            unset($data['dateFrom']);
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
        if ($data->isInitialized('idInstance') && null !== $data->getIdInstance()) {
            $dataArray['idInstance'] = $data->getIdInstance();
        }
        if ($data->isInitialized('addressingIdentifier') && null !== $data->getAddressingIdentifier()) {
            $dataArray['addressingIdentifier'] = $data->getAddressingIdentifier();
        }
        if ($data->isInitialized('dateFrom') && null !== $data->getDateFrom()) {
            $dataArray['dateFrom'] = $data->getDateFrom()?->format('Y-m-d');
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
        return [\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\DirectoryLinePost201Response::class => false];
    }
}