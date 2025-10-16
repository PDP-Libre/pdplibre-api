<?php

namespace PdpLibre\Generated\PdpFlowClient\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PdpLibre\Generated\PdpFlowClient\Runtime\Normalizer\CheckArray;
use PdpLibre\Generated\PdpFlowClient\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class FullFlowInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PdpLibre\Generated\PdpFlowClient\Model\FullFlowInfo::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PdpLibre\Generated\PdpFlowClient\Model\FullFlowInfo::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PdpLibre\Generated\PdpFlowClient\Model\FullFlowInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('flowId', $data)) {
            $object->setFlowId($data['flowId']);
            unset($data['flowId']);
        }
        if (\array_key_exists('trackingId', $data)) {
            $object->setTrackingId($data['trackingId']);
            unset($data['trackingId']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('flowSyntax', $data)) {
            $object->setFlowSyntax($data['flowSyntax']);
            unset($data['flowSyntax']);
        }
        if (\array_key_exists('flowProfile', $data)) {
            $object->setFlowProfile($data['flowProfile']);
            unset($data['flowProfile']);
        }
        if (\array_key_exists('sha256', $data)) {
            $object->setSha256($data['sha256']);
            unset($data['sha256']);
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
        if ($data->isInitialized('flowId') && null !== $data->getFlowId()) {
            $dataArray['flowId'] = $data->getFlowId();
        }
        if ($data->isInitialized('trackingId') && null !== $data->getTrackingId()) {
            $dataArray['trackingId'] = $data->getTrackingId();
        }
        $dataArray['name'] = $data->getName();
        $dataArray['flowSyntax'] = $data->getFlowSyntax();
        if ($data->isInitialized('flowProfile') && null !== $data->getFlowProfile()) {
            $dataArray['flowProfile'] = $data->getFlowProfile();
        }
        if ($data->isInitialized('sha256') && null !== $data->getSha256()) {
            $dataArray['sha256'] = $data->getSha256();
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
        return [\PdpLibre\Generated\PdpFlowClient\Model\FullFlowInfo::class => false];
    }
}