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
class ErrorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PdpLibre\Generated\PdpFlowClient\Model\Error::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PdpLibre\Generated\PdpFlowClient\Model\Error::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PdpLibre\Generated\PdpFlowClient\Model\Error();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('errorCode', $data)) {
            $object->setErrorCode($data['errorCode']);
            unset($data['errorCode']);
        }
        if (\array_key_exists('errorMessage', $data)) {
            $object->setErrorMessage($data['errorMessage']);
            unset($data['errorMessage']);
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
        $dataArray['errorCode'] = $data->getErrorCode();
        if ($data->isInitialized('errorMessage') && null !== $data->getErrorMessage()) {
            $dataArray['errorMessage'] = $data->getErrorMessage();
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
        return [\PdpLibre\Generated\PdpFlowClient\Model\Error::class => false];
    }
}