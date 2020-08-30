<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tbladrse
 *
 * @property int $adrs_UID
 * @property int $adrsCaseUID
 * @property int $adrsCaseClientUID
 * @property string $adrsCmtUID
 * @property string $adrsLine1
 * @property string $adrsLine2
 * @property int $adrsCityID
 * @property int $adrsStID
 * @property string $adrsZip
 * @property int $adrsCountry
 * @property bool $adrsActive
 * @property Carbon $adrsDtAdded
 * @property Carbon $adrsDtEdit
 * @property int $adrsSelectMe
 *
 * @package App\Models
 */
class Tbladrse extends Model
{

    public function user()
    {
        return $this->belongsTo('App\Models\Tblcase', 'adrsCmtUID', 'cmtUID');
    }

	protected $table = 'tbladrses';
	protected $primaryKey = 'adrs_UID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'adrs_UID' => 'int',
		'adrsCaseUID' => 'int',
		'adrsCaseClientUID' => 'int',
		'adrsCityID' => 'int',
		'adrsStID' => 'int',
		'adrsCountry' => 'int',
		'adrsActive' => 'bool',
		'adrsSelectMe' => 'int'
	];

	protected $dates = [
		'adrsDtAdded',
		'adrsDtEdit'
	];

	protected $fillable = [
		'adrsCaseUID',
		'adrsCaseClientUID',
		'adrsCmtUID',
		'adrsLine1',
		'adrsLine2',
		'adrsCityID',
		'adrsStID',
		'adrsZip',
		'adrsCountry',
		'adrsActive',
		'adrsDtAdded',
		'adrsDtEdit',
		'adrsSelectMe'
    ];
}
