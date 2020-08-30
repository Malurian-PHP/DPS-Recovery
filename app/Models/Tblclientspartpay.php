<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblclientspartpay
 * 
 * @property int $partpayUID
 * @property int $clientsUID
 * @property int $partpayAccepted
 * @property float $partpayMin
 * @property int $partpayRlseLicense
 *
 * @package App\Models
 */
class Tblclientspartpay extends Model
{
	protected $table = 'tblclientspartpay';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'partpayUID' => 'int',
		'clientsUID' => 'int',
		'partpayAccepted' => 'int',
		'partpayMin' => 'float',
		'partpayRlseLicense' => 'int'
	];

	protected $fillable = [
		'partpayUID',
		'clientsUID',
		'partpayAccepted',
		'partpayMin',
		'partpayRlseLicense'
	];
}
