<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblpoctype
 * 
 * @property int $pocTypeUID
 * @property string $pocTypeAbrv
 * @property string $pocTypeDesc
 *
 * @package App\Models
 */
class Tblpoctype extends Model
{
	protected $table = 'tblpoctypes';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'pocTypeUID' => 'int'
	];

	protected $fillable = [
		'pocTypeUID',
		'pocTypeAbrv',
		'pocTypeDesc'
	];
}
