<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BakTblclient
 * 
 * @property int $clientsUID
 * @property int $clientsCntyUID
 * @property int $clientsStCode
 * @property string $clientsStAbrv
 * @property int $clientsCourtType
 * @property string $clientsCourtName
 * @property int $clientsStatus
 * @property int $clientFeeUptd
 *
 * @package App\Models
 */
class BakTblclient extends Model
{
	protected $table = 'bak_tblclients';
	protected $primaryKey = 'clientsUID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'clientsUID' => 'int',
		'clientsCntyUID' => 'int',
		'clientsStCode' => 'int',
		'clientsCourtType' => 'int',
		'clientsStatus' => 'int',
		'clientFeeUptd' => 'int'
	];

	protected $fillable = [
		'clientsCntyUID',
		'clientsStCode',
		'clientsStAbrv',
		'clientsCourtType',
		'clientsCourtName',
		'clientsStatus',
		'clientFeeUptd'
	];
}
