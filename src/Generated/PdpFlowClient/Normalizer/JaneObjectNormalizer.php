<?php

namespace App\Generated\PdpFlowClient\Normalizer;

use App\Generated\PdpFlowClient\Runtime\Normalizer\CheckArray;
use App\Generated\PdpFlowClient\Runtime\Normalizer\ValidatorTrait;
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
        
        \App\Generated\PdpFlowClient\Model\FlowInfo::class => \App\Generated\PdpFlowClient\Normalizer\FlowInfoNormalizer::class,
        
        \App\Generated\PdpFlowClient\Model\SearchFlowParams::class => \App\Generated\PdpFlowClient\Normalizer\SearchFlowParamsNormalizer::class,
        
        \App\Generated\PdpFlowClient\Model\FlowIdObject::class => \App\Generated\PdpFlowClient\Normalizer\FlowIdObjectNormalizer::class,
        
        \App\Generated\PdpFlowClient\Model\FullFlowInfo::class => \App\Generated\PdpFlowClient\Normalizer\FullFlowInfoNormalizer::class,
        
        \App\Generated\PdpFlowClient\Model\AcknowledgementDetail::class => \App\Generated\PdpFlowClient\Normalizer\AcknowledgementDetailNormalizer::class,
        
        \App\Generated\PdpFlowClient\Model\Acknowledgement::class => \App\Generated\PdpFlowClient\Normalizer\AcknowledgementNormalizer::class,
        
        \App\Generated\PdpFlowClient\Model\Flow::class => \App\Generated\PdpFlowClient\Normalizer\FlowNormalizer::class,
        
        \App\Generated\PdpFlowClient\Model\SearchFlowContent::class => \App\Generated\PdpFlowClient\Normalizer\SearchFlowContentNormalizer::class,
        
        \App\Generated\PdpFlowClient\Model\Error::class => \App\Generated\PdpFlowClient\Normalizer\ErrorNormalizer::class,
        
        \App\Generated\PdpFlowClient\Model\V1FlowsPostBody::class => \App\Generated\PdpFlowClient\Normalizer\V1FlowsPostBodyNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \App\Generated\PdpFlowClient\Runtime\Normalizer\ReferenceNormalizer::class,
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
            
            \App\Generated\PdpFlowClient\Model\FlowInfo::class => false,
            \App\Generated\PdpFlowClient\Model\SearchFlowParams::class => false,
            \App\Generated\PdpFlowClient\Model\FlowIdObject::class => false,
            \App\Generated\PdpFlowClient\Model\FullFlowInfo::class => false,
            \App\Generated\PdpFlowClient\Model\AcknowledgementDetail::class => false,
            \App\Generated\PdpFlowClient\Model\Acknowledgement::class => false,
            \App\Generated\PdpFlowClient\Model\Flow::class => false,
            \App\Generated\PdpFlowClient\Model\SearchFlowContent::class => false,
            \App\Generated\PdpFlowClient\Model\Error::class => false,
            \App\Generated\PdpFlowClient\Model\V1FlowsPostBody::class => false,
            \Jane\Component\JsonSchemaRuntime\Reference::class => false,
        ];
    }
}