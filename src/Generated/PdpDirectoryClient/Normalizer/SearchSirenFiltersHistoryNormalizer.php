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
class SearchSirenFiltersHistoryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSirenFiltersHistory::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSirenFiltersHistory::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSirenFiltersHistory();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('observationDate', $data)) {
            $object->setObservationDate($this->denormalizer->denormalize($data['observationDate'], \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSirenFiltersHistoryObservationDate::class, 'json', $context));
            unset($data['observationDate']);
        }
        if (\array_key_exists('searchStartDate', $data)) {
            $object->setSearchStartDate($this->denormalizer->denormalize($data['searchStartDate'], \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSirenFiltersHistorySearchStartDate::class, 'json', $context));
            unset($data['searchStartDate']);
        }
        if (\array_key_exists('searchEndDate', $data)) {
            $object->setSearchEndDate($this->denormalizer->denormalize($data['searchEndDate'], \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSirenFiltersHistorySearchEndDate::class, 'json', $context));
            unset($data['searchEndDate']);
        }
        if (\array_key_exists('auditMode', $data)) {
            $object->setAuditMode($this->denormalizer->denormalize($data['auditMode'], \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSirenFiltersHistoryAuditMode::class, 'json', $context));
            unset($data['auditMode']);
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
        if ($data->isInitialized('observationDate') && null !== $data->getObservationDate()) {
            $dataArray['observationDate'] = $this->normalizer->normalize($data->getObservationDate(), 'json', $context);
        }
        if ($data->isInitialized('searchStartDate') && null !== $data->getSearchStartDate()) {
            $dataArray['searchStartDate'] = $this->normalizer->normalize($data->getSearchStartDate(), 'json', $context);
        }
        if ($data->isInitialized('searchEndDate') && null !== $data->getSearchEndDate()) {
            $dataArray['searchEndDate'] = $this->normalizer->normalize($data->getSearchEndDate(), 'json', $context);
        }
        if ($data->isInitialized('auditMode') && null !== $data->getAuditMode()) {
            $dataArray['auditMode'] = $this->normalizer->normalize($data->getAuditMode(), 'json', $context);
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
        return [\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSirenFiltersHistory::class => false];
    }
}