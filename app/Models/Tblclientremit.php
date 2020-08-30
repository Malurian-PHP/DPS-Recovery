<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblclientremit
 * 
 * @property int $clientsremitUID
 * @property int $clientsUID
 * @property int $clientsremitType
 * @property int $clientsremitFreq
 * @property int $clientsremitRptMthd
 * @property int $clientsremitCatUID
 *
 * @package App\Models
 */
class Tblclientremit extends Model
{
	protected $table = 'tblclientremit';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'clientsremitUID' => 'int',
		'clientsUID' => 'int',
		'clientsremitType' => 'int',
		'clientsremitFreq' => 'int',
		'clientsremitRptMthd' => 'int',
		'clientsremitCatUID' => 'int'
	];

	protected $fillable = [
		'clientsremitUID',
		'clientsUID',
		'clientsremitType',
		'clientsremitFreq',
		'clientsremitRptMthd',
		'clientsremitCatUID'
	];
}
