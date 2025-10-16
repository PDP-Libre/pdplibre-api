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
class CreateDirectoryLineBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\CreateDirectoryLineBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\CreateDirectoryLineBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\CreateDirectoryLineBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('period', $data)) {
            $object->setPeriod($this->denormalizer->denormalize($data['period'], \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\CreateDirectoryLineBodyPeriod::class, 'json', $context));
            unset($data['period']);
        }
        if (\array_key_exists('addressingInformation', $data)) {
            $object->setAddressingInformation($this->denormalizer->denormalize($data['addressingInformation'], \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\CreateDirectoryLineBodyAddressingInformation::class, 'json', $context));
            unset($data['addressingInformation']);
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
        if ($data->isInitialized('period') && null !== $data->getPeriod()) {
            $dataArray['period'] = $this->normalizer->normalize($data->getPeriod(), 'json', $context);
        }
        if ($data->isInitialized('addressingInformation') && null !== $data->getAddressingInformation()) {
            $dataArray['addressingInformation'] = $this->normalizer->normalize($data->getAddressingInformation(), 'json', $context);
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
        return [\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\CreateDirectoryLineBody::class => false];
    }
}