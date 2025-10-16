<?php

namespace App\Generated\PdpFlowClient\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use App\Generated\PdpFlowClient\Runtime\Normalizer\CheckArray;
use App\Generated\PdpFlowClient\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class V1FlowsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \App\Generated\PdpFlowClient\Model\V1FlowsPostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \App\Generated\PdpFlowClient\Model\V1FlowsPostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \App\Generated\PdpFlowClient\Model\V1FlowsPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('flowInfo', $data)) {
            $object->setFlowInfo($this->denormalizer->denormalize($data['flowInfo'], \App\Generated\PdpFlowClient\Model\FlowInfo::class, 'json', $context));
            unset($data['flowInfo']);
        }
        if (\array_key_exists('file', $data)) {
            $object->setFile($data['file']);
            unset($data['file']);
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
        $dataArray['flowInfo'] = $this->normalizer->normalize($data->getFlowInfo(), 'json', $context);
        if ($data->isInitialized('file') && null !== $data->getFile()) {
            $dataArray['file'] = $data->getFile();
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
        return [\App\Generated\PdpFlowClient\Model\V1FlowsPostBody::class => false];
    }
}