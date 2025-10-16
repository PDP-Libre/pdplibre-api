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
class SearchDirectoryLineNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \App\Generated\PdpDirectoryClient\Model\SearchDirectoryLine::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \App\Generated\PdpDirectoryClient\Model\SearchDirectoryLine::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \App\Generated\PdpDirectoryClient\Model\SearchDirectoryLine();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('filters', $data)) {
            $object->setFilters($this->denormalizer->denormalize($data['filters'], \App\Generated\PdpDirectoryClient\Model\SearchDirectoryLineFilters::class, 'json', $context));
            unset($data['filters']);
        }
        if (\array_key_exists('sorting', $data)) {
            $values = [];
            foreach ($data['sorting'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \App\Generated\PdpDirectoryClient\Model\SearchDirectoryLineSortingInner::class, 'json', $context);
            }
            $object->setSorting($values);
            unset($data['sorting']);
        }
        if (\array_key_exists('fields', $data)) {
            $values_1 = [];
            foreach ($data['fields'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setFields($values_1);
            unset($data['fields']);
        }
        if (\array_key_exists('limit', $data)) {
            $object->setLimit($data['limit']);
            unset($data['limit']);
        }
        if (\array_key_exists('ignore', $data)) {
            $object->setIgnore($data['ignore']);
            unset($data['ignore']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('filters') && null !== $data->getFilters()) {
            $dataArray['filters'] = $this->normalizer->normalize($data->getFilters(), 'json', $context);
        }
        if ($data->isInitialized('sorting') && null !== $data->getSorting()) {
            $values = [];
            foreach ($data->getSorting() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['sorting'] = $values;
        }
        if ($data->isInitialized('fields') && null !== $data->getFields()) {
            $values_1 = [];
            foreach ($data->getFields() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['fields'] = $values_1;
        }
        if ($data->isInitialized('limit') && null !== $data->getLimit()) {
            $dataArray['limit'] = $data->getLimit();
        }
        if ($data->isInitialized('ignore') && null !== $data->getIgnore()) {
            $dataArray['ignore'] = $data->getIgnore();
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\App\Generated\PdpDirectoryClient\Model\SearchDirectoryLine::class => false];
    }
}