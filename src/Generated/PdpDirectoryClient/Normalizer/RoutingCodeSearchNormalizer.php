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
class RoutingCodeSearchNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\RoutingCodeSearch::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\RoutingCodeSearch::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\RoutingCodeSearch();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('filters', $data)) {
            $object->setFilters($this->denormalizer->denormalize($data['filters'], \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\RoutingCodeSearchFilters::class, 'json', $context));
            unset($data['filters']);
        }
        if (\array_key_exists('sorting', $data)) {
            $values = [];
            foreach ($data['sorting'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\RoutingCodeSearchSortingInner::class, 'json', $context);
            }
            $object->setSorting($values);
            unset($data['sorting']);
        }
        if (\array_key_exists('champs', $data)) {
            $values_1 = [];
            foreach ($data['champs'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setChamps($values_1);
            unset($data['champs']);
        }
        if (\array_key_exists('inclure', $data)) {
            $values_2 = [];
            foreach ($data['inclure'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setInclure($values_2);
            unset($data['inclure']);
        }
        if (\array_key_exists('limit', $data)) {
            $object->setLimit($data['limit']);
            unset($data['limit']);
        }
        if (\array_key_exists('ignore', $data)) {
            $object->setIgnore($data['ignore']);
            unset($data['ignore']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
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
        if ($data->isInitialized('champs') && null !== $data->getChamps()) {
            $values_1 = [];
            foreach ($data->getChamps() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['champs'] = $values_1;
        }
        if ($data->isInitialized('inclure') && null !== $data->getInclure()) {
            $values_2 = [];
            foreach ($data->getInclure() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['inclure'] = $values_2;
        }
        if ($data->isInitialized('limit') && null !== $data->getLimit()) {
            $dataArray['limit'] = $data->getLimit();
        }
        if ($data->isInitialized('ignore') && null !== $data->getIgnore()) {
            $dataArray['ignore'] = $data->getIgnore();
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\RoutingCodeSearch::class => false];
    }
}