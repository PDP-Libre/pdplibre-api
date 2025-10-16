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
class HistoryReadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \App\Generated\PdpDirectoryClient\Model\HistoryRead::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \App\Generated\PdpDirectoryClient\Model\HistoryRead::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \App\Generated\PdpDirectoryClient\Model\HistoryRead();
        if (\array_key_exists('hidden', $data) && \is_int($data['hidden'])) {
            $data['hidden'] = (bool) $data['hidden'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('definitionDate', $data)) {
            $object->setDefinitionDate(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['definitionDate']));
            unset($data['definitionDate']);
        }
        if (\array_key_exists('dateFrom', $data)) {
            $object->setDateFrom(\DateTime::createFromFormat('Y-m-d', $data['dateFrom'])->setTime(0, 0, 0));
            unset($data['dateFrom']);
        }
        if (\array_key_exists('hidden', $data)) {
            $object->setHidden($data['hidden']);
            unset($data['hidden']);
        }
        if (\array_key_exists('idInstance', $data)) {
            $object->setIdInstance($data['idInstance']);
            unset($data['idInstance']);
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
        if ($data->isInitialized('definitionDate') && null !== $data->getDefinitionDate()) {
            $dataArray['definitionDate'] = $data->getDefinitionDate()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('dateFrom') && null !== $data->getDateFrom()) {
            $dataArray['dateFrom'] = $data->getDateFrom()?->format('Y-m-d');
        }
        if ($data->isInitialized('hidden') && null !== $data->getHidden()) {
            $dataArray['hidden'] = $data->getHidden();
        }
        if ($data->isInitialized('idInstance') && null !== $data->getIdInstance()) {
            $dataArray['idInstance'] = $data->getIdInstance();
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
        return [\App\Generated\PdpDirectoryClient\Model\HistoryRead::class => false];
    }
}