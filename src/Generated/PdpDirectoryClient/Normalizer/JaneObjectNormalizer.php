<?php

namespace PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer;

use PdpLibre\Generated\PdpFPdpDirectoryClient\Runtime\Normalizer\CheckArray;
use PdpLibre\Generated\PdpFPdpDirectoryClient\Runtime\Normalizer\ValidatorTrait;
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
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSiren::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\SearchSirenNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\LegalUnitPayloadHistory::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\LegalUnitPayloadHistoryNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\Error::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\ErrorNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSiret::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\SearchSiretNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\FacilityPayloadHistoryUle::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\FacilityPayloadHistoryUleNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\FacilityPayloadHistory::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\FacilityPayloadHistoryNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\CreateRoutingCodeBody::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\CreateRoutingCodeBodyNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\RoutingCodeSearch::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\RoutingCodeSearchNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\RoutingCodePayloadHistoryLegalUnitFacility::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\RoutingCodePayloadHistoryLegalUnitFacilityNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\RoutingCodePayloadHistory::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\RoutingCodePayloadHistoryNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\UpdatePutRoutingCodeBody::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\UpdatePutRoutingCodeBodyNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\UpdatePatchRoutingCodeBody::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\UpdatePatchRoutingCodeBodyNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchDirectoryLine::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\SearchDirectoryLineNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCode::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCodeNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\CreateDirectoryLineBody::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\CreateDirectoryLineBodyNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\DirectoryLinePayloadHistory::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\DirectoryLinePayloadHistoryNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\UpdatePutDirectoryLineBody::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\UpdatePutDirectoryLineBodyNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\UpdatePatchDirectoryLineBody::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\UpdatePatchDirectoryLineBodyNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\AddressRead::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\AddressReadNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\AddressEdit::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\AddressEditNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\AddressPut::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\AddressPutNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\AddressPatch::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\AddressPatchNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\HistoryRead::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\HistoryReadNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\LegalUnitPayloadIncludedNoSiren::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\LegalUnitPayloadIncludedNoSirenNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\LegalUnitPayloadIncluded::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\LegalUnitPayloadIncludedNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\FacilityPayloadIncluded::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\FacilityPayloadIncludedNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SirenSearchPost200Response::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\SirenSearchPost200ResponseNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SiretSearchPost200Response::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\SiretSearchPost200ResponseNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\RoutingCodePost201Response::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\RoutingCodePost201ResponseNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\RoutingCodeSearchPost200Response::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\RoutingCodeSearchPost200ResponseNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\DirectoryLineSearchPost200Response::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\DirectoryLineSearchPost200ResponseNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\DirectoryLinePost201Response::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\DirectoryLinePost201ResponseNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSirenFiltersSiren::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\SearchSirenFiltersSirenNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSirenFiltersBusinessName::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\SearchSirenFiltersBusinessNameNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSirenFiltersEntityType::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\SearchSirenFiltersEntityTypeNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSirenFiltersAdministrativeStatus::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\SearchSirenFiltersAdministrativeStatusNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSirenFiltersHistoryObservationDate::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\SearchSirenFiltersHistoryObservationDateNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSirenFiltersHistorySearchStartDate::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\SearchSirenFiltersHistorySearchStartDateNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSirenFiltersHistorySearchEndDate::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\SearchSirenFiltersHistorySearchEndDateNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSirenFiltersHistoryAuditMode::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\SearchSirenFiltersHistoryAuditModeNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSirenFiltersHistory::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\SearchSirenFiltersHistoryNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSirenFilters::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\SearchSirenFiltersNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSirenSortingInner::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\SearchSirenSortingInnerNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\LegalUnitPayloadHistoryHistory::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\LegalUnitPayloadHistoryHistoryNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSiretFiltersSiret::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\SearchSiretFiltersSiretNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSiretFiltersFacilityType::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\SearchSiretFiltersFacilityTypeNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSiretFiltersName::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\SearchSiretFiltersNameNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSiretFiltersAddressLines::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\SearchSiretFiltersAddressLinesNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSiretFiltersPostalCode::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\SearchSiretFiltersPostalCodeNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSiretFiltersCountrySubdivision::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\SearchSiretFiltersCountrySubdivisionNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSiretFiltersLocality::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\SearchSiretFiltersLocalityNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSiretFiltersAdministrativeStatus::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\SearchSiretFiltersAdministrativeStatusNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSiretFiltersHistory::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\SearchSiretFiltersHistoryNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSiretFilters::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\SearchSiretFiltersNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSiretSortingInner::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\SearchSiretSortingInnerNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\FacilityPayloadHistoryUleB2gAdditionalData::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\FacilityPayloadHistoryUleB2gAdditionalDataNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\RoutingCodeSearchFiltersRoutingIdentifier::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\RoutingCodeSearchFiltersRoutingIdentifierNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\RoutingCodeSearchFiltersRoutingCodeName::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\RoutingCodeSearchFiltersRoutingCodeNameNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\RoutingCodeSearchFiltersAdministrativeStatus::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\RoutingCodeSearchFiltersAdministrativeStatusNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\RoutingCodeSearchFilters::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\RoutingCodeSearchFiltersNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\RoutingCodeSearchSortingInner::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\RoutingCodeSearchSortingInnerNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchDirectoryLineFiltersAddressingIdentifier::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\SearchDirectoryLineFiltersAddressingIdentifierNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchDirectoryLineFiltersPlatformRegistrationNumber::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\SearchDirectoryLineFiltersPlatformRegistrationNumberNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchDirectoryLineFiltersAddressingSuffix::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\SearchDirectoryLineFiltersAddressingSuffixNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchDirectoryLineFilters::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\SearchDirectoryLineFiltersNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchDirectoryLineSortingInner::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\SearchDirectoryLineSortingInnerNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCodeRoutingCode::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCodeRoutingCodeNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCodePlateform::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCodePlateformNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\CreateDirectoryLineBodyPeriod::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\CreateDirectoryLineBodyPeriodNormalizer::class,
        
        \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\CreateDirectoryLineBodyAddressingInformation::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Normalizer\CreateDirectoryLineBodyAddressingInformationNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \PdpLibre\Generated\PdpFPdpDirectoryClient\Runtime\Normalizer\ReferenceNormalizer::class,
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
            
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSiren::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\LegalUnitPayloadHistory::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\Error::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSiret::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\FacilityPayloadHistoryUle::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\FacilityPayloadHistory::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\CreateRoutingCodeBody::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\RoutingCodeSearch::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\RoutingCodePayloadHistoryLegalUnitFacility::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\RoutingCodePayloadHistory::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\UpdatePutRoutingCodeBody::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\UpdatePatchRoutingCodeBody::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchDirectoryLine::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCode::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\CreateDirectoryLineBody::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\DirectoryLinePayloadHistory::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\UpdatePutDirectoryLineBody::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\UpdatePatchDirectoryLineBody::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\AddressRead::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\AddressEdit::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\AddressPut::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\AddressPatch::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\HistoryRead::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\LegalUnitPayloadIncludedNoSiren::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\LegalUnitPayloadIncluded::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\FacilityPayloadIncluded::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SirenSearchPost200Response::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SiretSearchPost200Response::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\RoutingCodePost201Response::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\RoutingCodeSearchPost200Response::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\DirectoryLineSearchPost200Response::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\DirectoryLinePost201Response::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSirenFiltersSiren::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSirenFiltersBusinessName::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSirenFiltersEntityType::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSirenFiltersAdministrativeStatus::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSirenFiltersHistoryObservationDate::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSirenFiltersHistorySearchStartDate::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSirenFiltersHistorySearchEndDate::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSirenFiltersHistoryAuditMode::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSirenFiltersHistory::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSirenFilters::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSirenSortingInner::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\LegalUnitPayloadHistoryHistory::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSiretFiltersSiret::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSiretFiltersFacilityType::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSiretFiltersName::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSiretFiltersAddressLines::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSiretFiltersPostalCode::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSiretFiltersCountrySubdivision::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSiretFiltersLocality::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSiretFiltersAdministrativeStatus::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSiretFiltersHistory::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSiretFilters::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchSiretSortingInner::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\FacilityPayloadHistoryUleB2gAdditionalData::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\RoutingCodeSearchFiltersRoutingIdentifier::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\RoutingCodeSearchFiltersRoutingCodeName::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\RoutingCodeSearchFiltersAdministrativeStatus::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\RoutingCodeSearchFilters::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\RoutingCodeSearchSortingInner::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchDirectoryLineFiltersAddressingIdentifier::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchDirectoryLineFiltersPlatformRegistrationNumber::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchDirectoryLineFiltersAddressingSuffix::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchDirectoryLineFilters::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\SearchDirectoryLineSortingInner::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCodeRoutingCode::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\DirectoryLinePayloadHistoryLegalUnitFacilityRoutingCodePlateform::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\CreateDirectoryLineBodyPeriod::class => false,
            \PdpLibre\Generated\PdpFPdpDirectoryClient\Model\CreateDirectoryLineBodyAddressingInformation::class => false,
            \Jane\Component\JsonSchemaRuntime\Reference::class => false,
        ];
    }
}