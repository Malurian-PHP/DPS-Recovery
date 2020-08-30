<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblcountry
 * 
 * @property int $country_UID
 * @property string $CountryArea_Name
 * @property string $ISO_ALPHA2_Code
 * @property string $ISO_ALPHA3_Code
 * @property int $ISO_UN_M49
 *
 * @package App\Models
 */
class Tblcountry extends Model
{
	protected $table = 'tblcountries';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'country_UID' => 'int',
		'ISO_UN_M49' => 'int'
	];

	protected $fillable = [
		'country_UID',
		'CountryArea_Name',
		'ISO_ALPHA2_Code',
		'ISO_ALPHA3_Code',
		'ISO_UN_M49'
	];
}
