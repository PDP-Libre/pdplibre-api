<?php

namespace App\Generated\PdpDirectoryClient\Normalizer;

use App\Generated\PdpDirectoryClient\Runtime\Normalizer\CheckArray;
use App\Generated\PdpDirectoryClient\Runtime\Normalizer\ValidatorTrait;
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
        
        \App\Generated\PdpDirectoryClient\Model\SearchSiren::class => \App\Generated\PdpDirectoryClient\Normalizer\SearchSirenNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\LegalUnitPayloadHistory::class => \App\Generated\PdpDirectoryClient\Normalizer\LegalUnitPayloadHistoryNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\Error::class => \App\Generated\PdpDirectoryClient\Normalizer\ErrorNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\SearchSiret::class => \App\Generated\PdpDirectoryClient\Normalizer\SearchSiretNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\FacilityPayloadHistoryUle::class => \App\Generated\PdpDirectoryClient\Normalizer\FacilityPayloadHistoryUleNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\FacilityPayloadHistory::class => \App\Generated\PdpDirectoryClient\Normalizer\FacilityPayloadHistoryNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\CreateRoutingCodeBody::class => \App\Generated\PdpDirectoryClient\Normalizer\CreateRoutingCodeBodyNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\RoutingCodeSearch::class => \App\Generated\PdpDirectoryClient\Normalizer\RoutingCodeSearchNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\RoutingCodePayloadHistoryLegalUnitFacility::class => \App\Generated\PdpDirectoryClient\Normalizer\RoutingCodePayloadHistoryLegalUnitFacilityNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\RoutingCodePayloadHistory::class => \App\Generated\PdpDirectoryClient\Normalizer\RoutingCodePayloadHistoryNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\UpdatePutRoutingCodeBody::class => \App\Generated\PdpDirectoryClient\Normalizer\UpdatePutRoutingCodeBodyNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\UpdatePatchRoutingCodeBody::class => \App\Generated\PdpDirectoryClient\Normalizer\UpdatePatchRoutingCodeBodyNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\SearchDirectoryLine::class => \App\Generated\PdpDirectoryClient\Normalizer\SearchDirectoryLineNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCode::class => \App\Generated\PdpDirectoryClient\Normalizer\DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCodeNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\CreateDirectoryLineBody::class => \App\Generated\PdpDirectoryClient\Normalizer\CreateDirectoryLineBodyNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\DirectoryLinePayloadHistory::class => \App\Generated\PdpDirectoryClient\Normalizer\DirectoryLinePayloadHistoryNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\UpdatePutDirectoryLineBody::class => \App\Generated\PdpDirectoryClient\Normalizer\UpdatePutDirectoryLineBodyNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\UpdatePatchDirectoryLineBody::class => \App\Generated\PdpDirectoryClient\Normalizer\UpdatePatchDirectoryLineBodyNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\AddressRead::class => \App\Generated\PdpDirectoryClient\Normalizer\AddressReadNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\AddressEdit::class => \App\Generated\PdpDirectoryClient\Normalizer\AddressEditNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\AddressPut::class => \App\Generated\PdpDirectoryClient\Normalizer\AddressPutNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\AddressPatch::class => \App\Generated\PdpDirectoryClient\Normalizer\AddressPatchNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\HistoryRead::class => \App\Generated\PdpDirectoryClient\Normalizer\HistoryReadNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\LegalUnitPayloadIncludedNoSiren::class => \App\Generated\PdpDirectoryClient\Normalizer\LegalUnitPayloadIncludedNoSirenNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\LegalUnitPayloadIncluded::class => \App\Generated\PdpDirectoryClient\Normalizer\LegalUnitPayloadIncludedNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\FacilityPayloadIncluded::class => \App\Generated\PdpDirectoryClient\Normalizer\FacilityPayloadIncludedNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\SirenSearchPost200Response::class => \App\Generated\PdpDirectoryClient\Normalizer\SirenSearchPost200ResponseNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\SiretSearchPost200Response::class => \App\Generated\PdpDirectoryClient\Normalizer\SiretSearchPost200ResponseNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\RoutingCodePost201Response::class => \App\Generated\PdpDirectoryClient\Normalizer\RoutingCodePost201ResponseNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\RoutingCodeSearchPost200Response::class => \App\Generated\PdpDirectoryClient\Normalizer\RoutingCodeSearchPost200ResponseNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\DirectoryLineSearchPost200Response::class => \App\Generated\PdpDirectoryClient\Normalizer\DirectoryLineSearchPost200ResponseNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\DirectoryLinePost201Response::class => \App\Generated\PdpDirectoryClient\Normalizer\DirectoryLinePost201ResponseNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\SearchSirenFiltersSiren::class => \App\Generated\PdpDirectoryClient\Normalizer\SearchSirenFiltersSirenNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\SearchSirenFiltersBusinessName::class => \App\Generated\PdpDirectoryClient\Normalizer\SearchSirenFiltersBusinessNameNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\SearchSirenFiltersEntityType::class => \App\Generated\PdpDirectoryClient\Normalizer\SearchSirenFiltersEntityTypeNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\SearchSirenFiltersAdministrativeStatus::class => \App\Generated\PdpDirectoryClient\Normalizer\SearchSirenFiltersAdministrativeStatusNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\SearchSirenFiltersHistoryObservationDate::class => \App\Generated\PdpDirectoryClient\Normalizer\SearchSirenFiltersHistoryObservationDateNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\SearchSirenFiltersHistorySearchStartDate::class => \App\Generated\PdpDirectoryClient\Normalizer\SearchSirenFiltersHistorySearchStartDateNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\SearchSirenFiltersHistorySearchEndDate::class => \App\Generated\PdpDirectoryClient\Normalizer\SearchSirenFiltersHistorySearchEndDateNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\SearchSirenFiltersHistoryAuditMode::class => \App\Generated\PdpDirectoryClient\Normalizer\SearchSirenFiltersHistoryAuditModeNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\SearchSirenFiltersHistory::class => \App\Generated\PdpDirectoryClient\Normalizer\SearchSirenFiltersHistoryNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\SearchSirenFilters::class => \App\Generated\PdpDirectoryClient\Normalizer\SearchSirenFiltersNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\SearchSirenSortingInner::class => \App\Generated\PdpDirectoryClient\Normalizer\SearchSirenSortingInnerNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\LegalUnitPayloadHistoryHistory::class => \App\Generated\PdpDirectoryClient\Normalizer\LegalUnitPayloadHistoryHistoryNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\SearchSiretFiltersSiret::class => \App\Generated\PdpDirectoryClient\Normalizer\SearchSiretFiltersSiretNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\SearchSiretFiltersFacilityType::class => \App\Generated\PdpDirectoryClient\Normalizer\SearchSiretFiltersFacilityTypeNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\SearchSiretFiltersName::class => \App\Generated\PdpDirectoryClient\Normalizer\SearchSiretFiltersNameNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\SearchSiretFiltersAddressLines::class => \App\Generated\PdpDirectoryClient\Normalizer\SearchSiretFiltersAddressLinesNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\SearchSiretFiltersPostalCode::class => \App\Generated\PdpDirectoryClient\Normalizer\SearchSiretFiltersPostalCodeNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\SearchSiretFiltersCountrySubdivision::class => \App\Generated\PdpDirectoryClient\Normalizer\SearchSiretFiltersCountrySubdivisionNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\SearchSiretFiltersLocality::class => \App\Generated\PdpDirectoryClient\Normalizer\SearchSiretFiltersLocalityNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\SearchSiretFiltersAdministrativeStatus::class => \App\Generated\PdpDirectoryClient\Normalizer\SearchSiretFiltersAdministrativeStatusNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\SearchSiretFiltersHistory::class => \App\Generated\PdpDirectoryClient\Normalizer\SearchSiretFiltersHistoryNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\SearchSiretFilters::class => \App\Generated\PdpDirectoryClient\Normalizer\SearchSiretFiltersNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\SearchSiretSortingInner::class => \App\Generated\PdpDirectoryClient\Normalizer\SearchSiretSortingInnerNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\FacilityPayloadHistoryUleB2gAdditionalData::class => \App\Generated\PdpDirectoryClient\Normalizer\FacilityPayloadHistoryUleB2gAdditionalDataNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\RoutingCodeSearchFiltersRoutingIdentifier::class => \App\Generated\PdpDirectoryClient\Normalizer\RoutingCodeSearchFiltersRoutingIdentifierNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\RoutingCodeSearchFiltersRoutingCodeName::class => \App\Generated\PdpDirectoryClient\Normalizer\RoutingCodeSearchFiltersRoutingCodeNameNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\RoutingCodeSearchFiltersAdministrativeStatus::class => \App\Generated\PdpDirectoryClient\Normalizer\RoutingCodeSearchFiltersAdministrativeStatusNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\RoutingCodeSearchFilters::class => \App\Generated\PdpDirectoryClient\Normalizer\RoutingCodeSearchFiltersNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\RoutingCodeSearchSortingInner::class => \App\Generated\PdpDirectoryClient\Normalizer\RoutingCodeSearchSortingInnerNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\SearchDirectoryLineFiltersAddressingIdentifier::class => \App\Generated\PdpDirectoryClient\Normalizer\SearchDirectoryLineFiltersAddressingIdentifierNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\SearchDirectoryLineFiltersPlatformRegistrationNumber::class => \App\Generated\PdpDirectoryClient\Normalizer\SearchDirectoryLineFiltersPlatformRegistrationNumberNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\SearchDirectoryLineFiltersAddressingSuffix::class => \App\Generated\PdpDirectoryClient\Normalizer\SearchDirectoryLineFiltersAddressingSuffixNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\SearchDirectoryLineFilters::class => \App\Generated\PdpDirectoryClient\Normalizer\SearchDirectoryLineFiltersNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\SearchDirectoryLineSortingInner::class => \App\Generated\PdpDirectoryClient\Normalizer\SearchDirectoryLineSortingInnerNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCodeRoutingCode::class => \App\Generated\PdpDirectoryClient\Normalizer\DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCodeRoutingCodeNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCodePlateform::class => \App\Generated\PdpDirectoryClient\Normalizer\DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCodePlateformNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\CreateDirectoryLineBodyPeriod::class => \App\Generated\PdpDirectoryClient\Normalizer\CreateDirectoryLineBodyPeriodNormalizer::class,
        
        \App\Generated\PdpDirectoryClient\Model\CreateDirectoryLineBodyAddressingInformation::class => \App\Generated\PdpDirectoryClient\Normalizer\CreateDirectoryLineBodyAddressingInformationNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \App\Generated\PdpDirectoryClient\Runtime\Normalizer\ReferenceNormalizer::class,
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
            
            \App\Generated\PdpDirectoryClient\Model\SearchSiren::class => false,
            \App\Generated\PdpDirectoryClient\Model\LegalUnitPayloadHistory::class => false,
            \App\Generated\PdpDirectoryClient\Model\Error::class => false,
            \App\Generated\PdpDirectoryClient\Model\SearchSiret::class => false,
            \App\Generated\PdpDirectoryClient\Model\FacilityPayloadHistoryUle::class => false,
            \App\Generated\PdpDirectoryClient\Model\FacilityPayloadHistory::class => false,
            \App\Generated\PdpDirectoryClient\Model\CreateRoutingCodeBody::class => false,
            \App\Generated\PdpDirectoryClient\Model\RoutingCodeSearch::class => false,
            \App\Generated\PdpDirectoryClient\Model\RoutingCodePayloadHistoryLegalUnitFacility::class => false,
            \App\Generated\PdpDirectoryClient\Model\RoutingCodePayloadHistory::class => false,
            \App\Generated\PdpDirectoryClient\Model\UpdatePutRoutingCodeBody::class => false,
            \App\Generated\PdpDirectoryClient\Model\UpdatePatchRoutingCodeBody::class => false,
            \App\Generated\PdpDirectoryClient\Model\SearchDirectoryLine::class => false,
            \App\Generated\PdpDirectoryClient\Model\DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCode::class => false,
            \App\Generated\PdpDirectoryClient\Model\CreateDirectoryLineBody::class => false,
            \App\Generated\PdpDirectoryClient\Model\DirectoryLinePayloadHistory::class => false,
            \App\Generated\PdpDirectoryClient\Model\UpdatePutDirectoryLineBody::class => false,
            \App\Generated\PdpDirectoryClient\Model\UpdatePatchDirectoryLineBody::class => false,
            \App\Generated\PdpDirectoryClient\Model\AddressRead::class => false,
            \App\Generated\PdpDirectoryClient\Model\AddressEdit::class => false,
            \App\Generated\PdpDirectoryClient\Model\AddressPut::class => false,
            \App\Generated\PdpDirectoryClient\Model\AddressPatch::class => false,
            \App\Generated\PdpDirectoryClient\Model\HistoryRead::class => false,
            \App\Generated\PdpDirectoryClient\Model\LegalUnitPayloadIncludedNoSiren::class => false,
            \App\Generated\PdpDirectoryClient\Model\LegalUnitPayloadIncluded::class => false,
            \App\Generated\PdpDirectoryClient\Model\FacilityPayloadIncluded::class => false,
            \App\Generated\PdpDirectoryClient\Model\SirenSearchPost200Response::class => false,
            \App\Generated\PdpDirectoryClient\Model\SiretSearchPost200Response::class => false,
            \App\Generated\PdpDirectoryClient\Model\RoutingCodePost201Response::class => false,
            \App\Generated\PdpDirectoryClient\Model\RoutingCodeSearchPost200Response::class => false,
            \App\Generated\PdpDirectoryClient\Model\DirectoryLineSearchPost200Response::class => false,
            \App\Generated\PdpDirectoryClient\Model\DirectoryLinePost201Response::class => false,
            \App\Generated\PdpDirectoryClient\Model\SearchSirenFiltersSiren::class => false,
            \App\Generated\PdpDirectoryClient\Model\SearchSirenFiltersBusinessName::class => false,
            \App\Generated\PdpDirectoryClient\Model\SearchSirenFiltersEntityType::class => false,
            \App\Generated\PdpDirectoryClient\Model\SearchSirenFiltersAdministrativeStatus::class => false,
            \App\Generated\PdpDirectoryClient\Model\SearchSirenFiltersHistoryObservationDate::class => false,
            \App\Generated\PdpDirectoryClient\Model\SearchSirenFiltersHistorySearchStartDate::class => false,
            \App\Generated\PdpDirectoryClient\Model\SearchSirenFiltersHistorySearchEndDate::class => false,
            \App\Generated\PdpDirectoryClient\Model\SearchSirenFiltersHistoryAuditMode::class => false,
            \App\Generated\PdpDirectoryClient\Model\SearchSirenFiltersHistory::class => false,
            \App\Generated\PdpDirectoryClient\Model\SearchSirenFilters::class => false,
            \App\Generated\PdpDirectoryClient\Model\SearchSirenSortingInner::class => false,
            \App\Generated\PdpDirectoryClient\Model\LegalUnitPayloadHistoryHistory::class => false,
            \App\Generated\PdpDirectoryClient\Model\SearchSiretFiltersSiret::class => false,
            \App\Generated\PdpDirectoryClient\Model\SearchSiretFiltersFacilityType::class => false,
            \App\Generated\PdpDirectoryClient\Model\SearchSiretFiltersName::class => false,
            \App\Generated\PdpDirectoryClient\Model\SearchSiretFiltersAddressLines::class => false,
            \App\Generated\PdpDirectoryClient\Model\SearchSiretFiltersPostalCode::class => false,
            \App\Generated\PdpDirectoryClient\Model\SearchSiretFiltersCountrySubdivision::class => false,
            \App\Generated\PdpDirectoryClient\Model\SearchSiretFiltersLocality::class => false,
            \App\Generated\PdpDirectoryClient\Model\SearchSiretFiltersAdministrativeStatus::class => false,
            \App\Generated\PdpDirectoryClient\Model\SearchSiretFiltersHistory::class => false,
            \App\Generated\PdpDirectoryClient\Model\SearchSiretFilters::class => false,
            \App\Generated\PdpDirectoryClient\Model\SearchSiretSortingInner::class => false,
            \App\Generated\PdpDirectoryClient\Model\FacilityPayloadHistoryUleB2gAdditionalData::class => false,
            \App\Generated\PdpDirectoryClient\Model\RoutingCodeSearchFiltersRoutingIdentifier::class => false,
            \App\Generated\PdpDirectoryClient\Model\RoutingCodeSearchFiltersRoutingCodeName::class => false,
            \App\Generated\PdpDirectoryClient\Model\RoutingCodeSearchFiltersAdministrativeStatus::class => false,
            \App\Generated\PdpDirectoryClient\Model\RoutingCodeSearchFilters::class => false,
            \App\Generated\PdpDirectoryClient\Model\RoutingCodeSearchSortingInner::class => false,
            \App\Generated\PdpDirectoryClient\Model\SearchDirectoryLineFiltersAddressingIdentifier::class => false,
            \App\Generated\PdpDirectoryClient\Model\SearchDirectoryLineFiltersPlatformRegistrationNumber::class => false,
            \App\Generated\PdpDirectoryClient\Model\SearchDirectoryLineFiltersAddressingSuffix::class => false,
            \App\Generated\PdpDirectoryClient\Model\SearchDirectoryLineFilters::class => false,
            \App\Generated\PdpDirectoryClient\Model\SearchDirectoryLineSortingInner::class => false,
            \App\Generated\PdpDirectoryClient\Model\DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCodeRoutingCode::class => false,
            \App\Generated\PdpDirectoryClient\Model\DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCodePlateform::class => false,
            \App\Generated\PdpDirectoryClient\Model\CreateDirectoryLineBodyPeriod::class => false,
            \App\Generated\PdpDirectoryClient\Model\CreateDirectoryLineBodyAddressingInformation::class => false,
            \Jane\Component\JsonSchemaRuntime\Reference::class => false,
        ];
    }
}