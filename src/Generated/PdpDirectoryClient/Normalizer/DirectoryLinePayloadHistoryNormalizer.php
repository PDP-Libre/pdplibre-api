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
class DirectoryLinePayloadHistoryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\DirectoryLinePayloadHistory::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\DirectoryLinePayloadHistory::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\DirectoryLinePayloadHistory();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('addressingIdentifier', $data)) {
            $object->setAddressingIdentifier($data['addressingIdentifier']);
            unset($data['addressingIdentifier']);
        }
        if (\array_key_exists('siren', $data)) {
            $object->setSiren($data['siren']);
            unset($data['siren']);
        }
        if (\array_key_exists('siret', $data)) {
            $object->setSiret($data['siret']);
            unset($data['siret']);
        }
        if (\array_key_exists('addressingSuffix', $data)) {
            $object->setAddressingSuffix($data['addressingSuffix']);
            unset($data['addressingSuffix']);
        }
        if (\array_key_exists('creationDate', $data)) {
            $object->setCreationDate(\DateTime::createFromFormat('Y-m-d', $data['creationDate'])->setTime(0, 0, 0));
            unset($data['creationDate']);
        }
        if (\array_key_exists('dateFrom', $data)) {
            $object->setDateFrom(\DateTime::createFromFormat('Y-m-d', $data['dateFrom'])->setTime(0, 0, 0));
            unset($data['dateFrom']);
        }
        if (\array_key_exists('dateTo', $data)) {
            $object->setDateTo(\DateTime::createFromFormat('Y-m-d', $data['dateTo'])->setTime(0, 0, 0));
            unset($data['dateTo']);
        }
        if (\array_key_exists('effectiveEndDate', $data)) {
            $object->setEffectiveEndDate(\DateTime::createFromFormat('Y-m-d', $data['effectiveEndDate'])->setTime(0, 0, 0));
            unset($data['effectiveEndDate']);
        }
        if (\array_key_exists('createdBy', $data)) {
            $object->setCreatedBy($data['createdBy']);
            unset($data['createdBy']);
        }
        if (\array_key_exists('history', $data)) {
            $object->setHistory($this->denormalizer->denormalize($data['history'], \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\HistoryRead::class, 'json', $context));
            unset($data['history']);
        }
        if (\array_key_exists('routingCode', $data)) {
            $object->setRoutingCode($this->denormalizer->denormalize($data['routingCode'], \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCodeRoutingCode::class, 'json', $context));
            unset($data['routingCode']);
        }
        if (\array_key_exists('plateform', $data)) {
            $object->setPlateform($this->denormalizer->denormalize($data['plateform'], \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCodePlateform::class, 'json', $context));
            unset($data['plateform']);
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
        if ($data->isInitialized('addressingIdentifier') && null !== $data->getAddressingIdentifier()) {
            $dataArray['addressingIdentifier'] = $data->getAddressingIdentifier();
        }
        if ($data->isInitialized('siren') && null !== $data->getSiren()) {
            $dataArray['siren'] = $data->getSiren();
        }
        if ($data->isInitialized('siret') && null !== $data->getSiret()) {
            $dataArray['siret'] = $data->getSiret();
        }
        if ($data->isInitialized('addressingSuffix') && null !== $data->getAddressingSuffix()) {
            $dataArray['addressingSuffix'] = $data->getAddressingSuffix();
        }
        if ($data->isInitialized('creationDate') && null !== $data->getCreationDate()) {
            $dataArray['creationDate'] = $data->getCreationDate()?->format('Y-m-d');
        }
        if ($data->isInitialized('dateFrom') && null !== $data->getDateFrom()) {
            $dataArray['dateFrom'] = $data->getDateFrom()?->format('Y-m-d');
        }
        if ($data->isInitialized('dateTo') && null !== $data->getDateTo()) {
            $dataArray['dateTo'] = $data->getDateTo()?->format('Y-m-d');
        }
        if ($data->isInitialized('effectiveEndDate') && null !== $data->getEffectiveEndDate()) {
            $dataArray['effectiveEndDate'] = $data->getEffectiveEndDate()?->format('Y-m-d');
        }
        if ($data->isInitialized('createdBy') && null !== $data->getCreatedBy()) {
            $dataArray['createdBy'] = $data->getCreatedBy();
        }
        if ($data->isInitialized('history') && null !== $data->getHistory()) {
            $dataArray['history'] = $this->normalizer->normalize($data->getHistory(), 'json', $context);
        }
        if ($data->isInitialized('routingCode') && null !== $data->getRoutingCode()) {
            $dataArray['routingCode'] = $this->normalizer->normalize($data->getRoutingCode(), 'json', $context);
        }
        if ($data->isInitialized('plateform') && null !== $data->getPlateform()) {
            $dataArray['plateform'] = $this->normalizer->normalize($data->getPlateform(), 'json', $context);
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
        return [\PdpLibre\Generated\PdpFPdpDirectoryClient\Model\DirectoryLinePayloadHistory::class => false];
    }
}