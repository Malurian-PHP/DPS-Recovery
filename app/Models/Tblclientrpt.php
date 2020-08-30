<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblclientrpt
 * 
 * @property int $clientRptsUID
 * @property int $clientsUID
 * @property int $clientRptsType
 * @property int $clientRptsCat
 * @property Carbon $clientRptsCutTime
 * @property int $clientRptsFreq
 * @property int $clientRptsFileType
 * @property string $clientRptsLocation
 * @property string $clientRptsSuffix
 *
 * @package App\Models
 */
class Tblclientrpt extends Model
{
	protected $table = 'tblclientrpts';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'clientRptsUID' => 'int',
		'clientsUID' => 'int',
		'clientRptsType' => 'int',
		'clientRptsCat' => 'int',
		'clientRptsFreq' => 'int',
		'clientRptsFileType' => 'int'
	];

	protected $dates = [
		'clientRptsCutTime'
	];

	protected $fillable = [
		'clientRptsUID',
		'clientsUID',
		'clientRptsType',
		'clientRptsCat',
		'clientRptsCutTime',
		'clientRptsFreq',
		'clientRptsFileType',
		'clientRptsLocation',
		'clientRptsSuffix'
	];
}
