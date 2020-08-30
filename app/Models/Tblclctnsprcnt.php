<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblclctnsprcnt
 * 
 * @property int $clientClctnsPrcnt
 * @property int $clientUID
 * @property float $6Month
 * @property float $12Month
 * @property float $18Month
 * @property float $DefaultIS
 * @property float $DefaultOOS
 * @property float $feeConvenience
 *
 * @package App\Models
 */
class Tblclctnsprcnt extends Model
{
	protected $table = 'tblclctnsprcnt';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'clientClctnsPrcnt' => 'int',
		'clientUID' => 'int',
		'6Month' => 'float',
		'12Month' => 'float',
		'18Month' => 'float',
		'DefaultIS' => 'float',
		'DefaultOOS' => 'float',
		'feeConvenience' => 'float'
	];

	protected $fillable = [
		'clientClctnsPrcnt',
		'clientUID',
		'6Month',
		'12Month',
		'18Month',
		'DefaultIS',
		'DefaultOOS',
		'feeConvenience'
	];
}
