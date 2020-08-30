<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Zip
 * 
 * @property int $ZipUID
 * @property string $ZipCode
 * @property string $PrimaryRecord
 * @property string $Population
 * @property string $HouseholdsPerZipcode
 * @property string $WhitePopulation
 * @property string $BlackPopulation
 * @property string $HispanicPopulation
 * @property string $AsianPopulation
 * @property string $HawaiianPopulation
 * @property string $IndianPopulation
 * @property string $OtherPopulation
 * @property string $MalePopulation
 * @property string $FemalePopulation
 * @property string $PersonsPerHousehold
 * @property string $AverageHouseValue
 * @property string $IncomePerHousehold
 * @property string $Latitude
 * @property string $Longitude
 * @property string $Elevation
 * @property string $State
 * @property string $StateFullName
 * @property string $CityType
 * @property string $CityAliasAbbreviation
 * @property string $AreaCode
 * @property string $City
 * @property string $CityAliasName
 * @property string $County
 * @property string $CountyFIPS
 * @property string $StateFIPS
 * @property string $TimeZone
 * @property string $DayLightSaving
 * @property string $MSA
 * @property string $PMSA
 * @property string $CSA
 * @property string $CBSA
 * @property string $CBSA_DIV
 * @property string $CBSA_Type
 * @property string $CBSA_Name
 * @property string $MSA_Name
 * @property string $PMSA_Name
 * @property string $Region
 * @property string $Division
 * @property string $MailingName
 * @property string $PreferredLastLineKey
 * @property string $ClassificationCode
 * @property string $MultiCounty
 * @property string $CSAName
 * @property string $CBSA_Div_Name
 * @property string $CityStateKey
 * @property string $CityAliasCode
 * @property string $CityMixedCase
 * @property string $CityAliasMixedCase
 * @property string $StateANSI
 * @property string $CountyANSI
 * @property string $FacilityCode
 * @property string $UniqueZIPName
 * @property string $CityDeliveryIndicator
 * @property string $CarrierRouteRateSortation
 * @property string $FinanceNumber
 * @property string $CountyMixedCase
 *
 * @package App\Models
 */
class Zip extends Model
{
	protected $table = 'zips';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ZipUID' => 'int'
	];

	protected $fillable = [
		'ZipUID',
		'ZipCode',
		'PrimaryRecord',
		'Population',
		'HouseholdsPerZipcode',
		'WhitePopulation',
		'BlackPopulation',
		'HispanicPopulation',
		'AsianPopulation',
		'HawaiianPopulation',
		'IndianPopulation',
		'OtherPopulation',
		'MalePopulation',
		'FemalePopulation',
		'PersonsPerHousehold',
		'AverageHouseValue',
		'IncomePerHousehold',
		'Latitude',
		'Longitude',
		'Elevation',
		'State',
		'StateFullName',
		'CityType',
		'CityAliasAbbreviation',
		'AreaCode',
		'City',
		'CityAliasName',
		'County',
		'CountyFIPS',
		'StateFIPS',
		'TimeZone',
		'DayLightSaving',
		'MSA',
		'PMSA',
		'CSA',
		'CBSA',
		'CBSA_DIV',
		'CBSA_Type',
		'CBSA_Name',
		'MSA_Name',
		'PMSA_Name',
		'Region',
		'Division',
		'MailingName',
		'PreferredLastLineKey',
		'ClassificationCode',
		'MultiCounty',
		'CSAName',
		'CBSA_Div_Name',
		'CityStateKey',
		'CityAliasCode',
		'CityMixedCase',
		'CityAliasMixedCase',
		'StateANSI',
		'CountyANSI',
		'FacilityCode',
		'UniqueZIPName',
		'CityDeliveryIndicator',
		'CarrierRouteRateSortation',
		'FinanceNumber',
		'CountyMixedCase'
	];
}
