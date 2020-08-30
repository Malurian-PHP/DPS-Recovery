<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblclientcontract
 * 
 * @property int $clientCntrctUID
 * @property int $clientCntrctClientId
 * @property Carbon $clientCntrctDt
 * @property int $clientCntrctOrgnlTerm
 * @property Carbon $clientCntrctFirstEnteredDt
 * @property string $clientCntrctAdrs1
 * @property string $clientCntrctAdrs2
 * @property string $clientCntrctCity
 * @property string $clientCntrctSt
 * @property string $clientCntrctZip
 * @property string $clientCntrctPhn1
 *
 * @package App\Models
 */
class Tblclientcontract extends Model
{
	protected $table = 'tblclientcontracts';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'clientCntrctUID' => 'int',
		'clientCntrctClientId' => 'int',
		'clientCntrctOrgnlTerm' => 'int'
	];

	protected $dates = [
		'clientCntrctDt',
		'clientCntrctFirstEnteredDt'
	];

	protected $fillable = [
		'clientCntrctUID',
		'clientCntrctClientId',
		'clientCntrctDt',
		'clientCntrctOrgnlTerm',
		'clientCntrctFirstEnteredDt',
		'clientCntrctAdrs1',
		'clientCntrctAdrs2',
		'clientCntrctCity',
		'clientCntrctSt',
		'clientCntrctZip',
		'clientCntrctPhn1'
	];
}
