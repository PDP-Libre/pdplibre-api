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
class FlowNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PdpLibre\Generated\PdpFlowClient\Model\Flow::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PdpLibre\Generated\PdpFlowClient\Model\Flow::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PdpLibre\Generated\PdpFlowClient\Model\Flow();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('submittedAt', $data)) {
            $object->setSubmittedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['submittedAt']));
            unset($data['submittedAt']);
        }
        if (\array_key_exists('updatedAt', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updatedAt']));
            unset($data['updatedAt']);
        }
        if (\array_key_exists('flowId', $data)) {
            $object->setFlowId($data['flowId']);
            unset($data['flowId']);
        }
        if (\array_key_exists('trackingId', $data)) {
            $object->setTrackingId($data['trackingId']);
            unset($data['trackingId']);
        }
        if (\array_key_exists('flowType', $data)) {
            $object->setFlowType($data['flowType']);
            unset($data['flowType']);
        }
        if (\array_key_exists('flowDirection', $data)) {
            $object->setFlowDirection($data['flowDirection']);
            unset($data['flowDirection']);
        }
        if (\array_key_exists('flowSyntax', $data)) {
            $object->setFlowSyntax($data['flowSyntax']);
            unset($data['flowSyntax']);
        }
        if (\array_key_exists('flowProfile', $data)) {
            $object->setFlowProfile($data['flowProfile']);
            unset($data['flowProfile']);
        }
        if (\array_key_exists('attachmentNumber', $data)) {
            $object->setAttachmentNumber($data['attachmentNumber']);
            unset($data['attachmentNumber']);
        }
        if (\array_key_exists('acknowledgement', $data)) {
            $object->setAcknowledgement($this->denormalizer->denormalize($data['acknowledgement'], \PdpLibre\Generated\PdpFlowClient\Model\Acknowledgement::class, 'json', $context));
            unset($data['acknowledgement']);
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
        if ($data->isInitialized('submittedAt') && null !== $data->getSubmittedAt()) {
            $dataArray['submittedAt'] = $data->getSubmittedAt()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('updatedAt') && null !== $data->getUpdatedAt()) {
            $dataArray['updatedAt'] = $data->getUpdatedAt()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('flowId') && null !== $data->getFlowId()) {
            $dataArray['flowId'] = $data->getFlowId();
        }
        if ($data->isInitialized('trackingId') && null !== $data->getTrackingId()) {
            $dataArray['trackingId'] = $data->getTrackingId();
        }
        if ($data->isInitialized('flowType') && null !== $data->getFlowType()) {
            $dataArray['flowType'] = $data->getFlowType();
        }
        if ($data->isInitialized('flowDirection') && null !== $data->getFlowDirection()) {
            $dataArray['flowDirection'] = $data->getFlowDirection();
        }
        if ($data->isInitialized('flowSyntax') && null !== $data->getFlowSyntax()) {
            $dataArray['flowSyntax'] = $data->getFlowSyntax();
        }
        if ($data->isInitialized('flowProfile') && null !== $data->getFlowProfile()) {
            $dataArray['flowProfile'] = $data->getFlowProfile();
        }
        if ($data->isInitialized('attachmentNumber') && null !== $data->getAttachmentNumber()) {
            $dataArray['attachmentNumber'] = $data->getAttachmentNumber();
        }
        if ($data->isInitialized('acknowledgement') && null !== $data->getAcknowledgement()) {
            $dataArray['acknowledgement'] = $this->normalizer->normalize($data->getAcknowledgement(), 'json', $context);
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
        return [\PdpLibre\Generated\PdpFlowClient\Model\Flow::class => false];
    }
}