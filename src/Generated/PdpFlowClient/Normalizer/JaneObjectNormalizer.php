<?php

namespace PdpLibre\Generated\PdpFlowClient\Normalizer;

use PdpLibre\Generated\PdpFlowClient\Runtime\Normalizer\CheckArray;
use PdpLibre\Generated\PdpFlowClient\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    protected $normalizers = [
        
        \PdpLibre\Generated\PdpFlowClient\Model\FlowInfo::class => \PdpLibre\Generated\PdpFlowClient\Normalizer\FlowInfoNormalizer::class,
        
        \PdpLibre\Generated\PdpFlowClient\Model\SearchFlowParams::class => \PdpLibre\Generated\PdpFlowClient\Normalizer\SearchFlowParamsNormalizer::class,
        
        \PdpLibre\Generated\PdpFlowClient\Model\FlowIdObject::class => \PdpLibre\Generated\PdpFlowClient\Normalizer\FlowIdObjectNormalizer::class,
        
        \PdpLibre\Generated\PdpFlowClient\Model\FullFlowInfo::class => \PdpLibre\Generated\PdpFlowClient\Normalizer\FullFlowInfoNormalizer::class,
        
        \PdpLibre\Generated\PdpFlowClient\Model\AcknowledgementDetail::class => \PdpLibre\Generated\PdpFlowClient\Normalizer\AcknowledgementDetailNormalizer::class,
        
        \PdpLibre\Generated\PdpFlowClient\Model\Acknowledgement::class => \PdpLibre\Generated\PdpFlowClient\Normalizer\AcknowledgementNormalizer::class,
        
        \PdpLibre\Generated\PdpFlowClient\Model\Flow::class => \PdpLibre\Generated\PdpFlowClient\Normalizer\FlowNormalizer::class,
        
        \PdpLibre\Generated\PdpFlowClient\Model\SearchFlowContent::class => \PdpLibre\Generated\PdpFlowClient\Normalizer\SearchFlowContentNormalizer::class,
        
        \PdpLibre\Generated\PdpFlowClient\Model\Error::class => \PdpLibre\Generated\PdpFlowClient\Normalizer\ErrorNormalizer::class,
        
        \PdpLibre\Generated\PdpFlowClient\Model\V1FlowsPostBody::class => \PdpLibre\Generated\PdpFlowClient\Normalizer\V1FlowsPostBodyNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \PdpLibre\Generated\PdpFlowClient\Runtime\Normalizer\ReferenceNormalizer::class,
    ], $normalizersCache = [];
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $normalizerClass = $this->normalizers[get_class($data)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($data, $format, $context);
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $denormalizerClass = $this->normalizers[$type];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $type, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [
            
            \PdpLibre\Generated\PdpFlowClient\Model\FlowInfo::class => false,
            \PdpLibre\Generated\PdpFlowClient\Model\SearchFlowParams::class => false,
            \PdpLibre\Generated\PdpFlowClient\Model\FlowIdObject::class => false,
            \PdpLibre\Generated\PdpFlowClient\Model\FullFlowInfo::class => false,
            \PdpLibre\Generated\PdpFlowClient\Model\AcknowledgementDetail::class => false,
            \PdpLibre\Generated\PdpFlowClient\Model\Acknowledgement::class => false,
            \PdpLibre\Generated\PdpFlowClient\Model\Flow::class => false,
            \PdpLibre\Generated\PdpFlowClient\Model\SearchFlowContent::class => false,
            \PdpLibre\Generated\PdpFlowClient\Model\Error::class => false,
            \PdpLibre\Generated\PdpFlowClient\Model\V1FlowsPostBody::class => false,
            \Jane\Component\JsonSchemaRuntime\Reference::class => false,
        ];
    }
}