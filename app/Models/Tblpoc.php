<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblpoc
 * 
 * @property int $pocUID
 * @property int $pocTypeUID
 * @property int $clientsUID
 * @property string $pocCompanyName
 * @property string $pocSoftware
 * @property string $pocTitle
 * @property string $pocNameLast
 * @property string $pocNameFirst
 * @property string $pocEmail
 * @property string $pocPhn
 * @property string $pocExt
 *
 * @package App\Models
 */
class Tblpoc extends Model
{
	protected $table = 'tblpoc';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'pocUID' => 'int',
		'pocTypeUID' => 'int',
		'clientsUID' => 'int'
	];

	protected $fillable = [
		'pocUID',
		'pocTypeUID',
		'clientsUID',
		'pocCompanyName',
		'pocSoftware',
		'pocTitle',
		'pocNameLast',
		'pocNameFirst',
		'pocEmail',
		'pocPhn',
		'pocExt'
	];
}
