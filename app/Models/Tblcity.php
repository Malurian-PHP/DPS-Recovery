<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblcity
 * 
 * @property int $cityUID
 * @property string $stAbrv
 * @property int $stCode
 * @property string $cityName
 * @property int $cityStCode
 * @property string $cityCntyName
 * @property int $cityCntyStCode
 *
 * @package App\Models
 */
class Tblcity extends Model
{
	protected $table = 'tblcities';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'cityUID' => 'int',
		'stCode' => 'int',
		'cityStCode' => 'int',
		'cityCntyStCode' => 'int'
	];

	protected $fillable = [
		'cityUID',
		'stAbrv',
		'stCode',
		'cityName',
		'cityStCode',
		'cityCntyName',
		'cityCntyStCode'
	];
}
