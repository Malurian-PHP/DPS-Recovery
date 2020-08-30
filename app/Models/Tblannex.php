<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblannex
 * 
 * @property int $anxId
 * @property string $cmtUID
 * @property int $clientsUID
 * @property int $caseid
 * @property string $prefixname
 * @property float $sumfine
 * @property float $sumfee
 * @property float $intrate
 * @property float $sumcost
 * @property float $sumtotal
 * @property float $sumcoll
 * @property Carbon $docketdate
 * @property string $vehicleliccnumber
 * @property string $vehiclestatecode
 * @property string $arrestagency
 * @property string $dispositioncase
 * @property bool $proof
 * @property bool $pp
 * @property string $ssn
 * @property float $sumcj
 * @property float $sumcjfee
 * @property Carbon $cjdate
 * @property string $orbook
 * @property string $orpage
 * @property bool $civjud
 * @property string $attfirstname
 * @property string $attmiddlename
 * @property string $attlastname
 * @property string $attaddressline1
 * @property string $attaddressline2
 * @property string $attcity
 * @property string $attstate
 * @property string $attzip
 * @property string $attphone1
 * @property string $attphone2
 * @property int $select_me
 *
 * @package App\Models
 */
class Tblannex extends Model
{
	protected $table = 'tblannex';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'anxId' => 'int',
		'clientsUID' => 'int',
		'caseid' => 'int',
		'sumfine' => 'float',
		'sumfee' => 'float',
		'intrate' => 'float',
		'sumcost' => 'float',
		'sumtotal' => 'float',
		'sumcoll' => 'float',
		'proof' => 'bool',
		'pp' => 'bool',
		'sumcj' => 'float',
		'sumcjfee' => 'float',
		'civjud' => 'bool',
		'select_me' => 'int'
	];

	protected $dates = [
		'docketdate',
		'cjdate'
	];

	protected $fillable = [
		'anxId',
		'cmtUID',
		'clientsUID',
		'caseid',
		'prefixname',
		'sumfine',
		'sumfee',
		'intrate',
		'sumcost',
		'sumtotal',
		'sumcoll',
		'docketdate',
		'vehicleliccnumber',
		'vehiclestatecode',
		'arrestagency',
		'dispositioncase',
		'proof',
		'pp',
		'ssn',
		'sumcj',
		'sumcjfee',
		'cjdate',
		'orbook',
		'orpage',
		'civjud',
		'attfirstname',
		'attmiddlename',
		'attlastname',
		'attaddressline1',
		'attaddressline2',
		'attcity',
		'attstate',
		'attzip',
		'attphone1',
		'attphone2',
		'select_me'
	];
}
