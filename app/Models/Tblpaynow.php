<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblpaynow
 * 
 * @property int $paynowUID
 * @property string $empUID
 * @property string $refID
 * @property string $adjMthd
 * @property Carbon $adjDt
 * @property string $casePriStatus
 * @property string $caseDate
 * @property string $stAbrv
 * @property string $clientsCourtName
 * @property int $clientsCourtType
 * @property string $caseFullName
 * @property string $caseNmbr
 * @property string $caseSubNmbr
 * @property int $caseLitNum
 * @property int $caseUID
 * @property int $balUID
 * @property string $cmtUID
 * @property int $plcmtUID
 * @property string $adrsStAbrv
 * @property string $adrsZip
 * @property string $caseDOB
 * @property string $balAmtPlcd
 * @property string $balNonChrgAddl
 * @property string $balChrgAddl
 * @property string $balAmtRbt
 * @property string $balAmtClctns
 * @property string $balAmtCrntBal
 * @property string $txtAdjPlcd
 * @property string $txtNonChrgAddl
 * @property string $txtChrgAddl
 * @property string $txtAdjRbt
 * @property string $txtAdjClctns
 * @property string $txtAdjBal
 * @property string $NewbalAmtPlcd
 * @property string $NewNonChrgAddl
 * @property string $NewChrgAddl
 * @property string $NewbalAmtRbt
 * @property string $NewbalAmtClctns
 * @property string $NewbalAmtCrntBal
 * @property int $UID
 * @property int $SID
 * @property string $transactionId
 * @property int $Isaprvd
 *
 * @package App\Models
 */
class Tblpaynow extends Model
{
	protected $table = 'tblpaynow';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'paynowUID' => 'int',
		'clientsCourtType' => 'int',
		'caseLitNum' => 'int',
		'caseUID' => 'int',
		'balUID' => 'int',
		'plcmtUID' => 'int',
		'UID' => 'int',
		'SID' => 'int',
		'Isaprvd' => 'int'
	];

	protected $dates = [
		'adjDt'
	];

	protected $fillable = [
		'paynowUID',
		'empUID',
		'refID',
		'adjMthd',
		'adjDt',
		'casePriStatus',
		'caseDate',
		'stAbrv',
		'clientsCourtName',
		'clientsCourtType',
		'caseFullName',
		'caseNmbr',
		'caseSubNmbr',
		'caseLitNum',
		'caseUID',
		'balUID',
		'cmtUID',
		'plcmtUID',
		'adrsStAbrv',
		'adrsZip',
		'caseDOB',
		'balAmtPlcd',
		'balNonChrgAddl',
		'balChrgAddl',
		'balAmtRbt',
		'balAmtClctns',
		'balAmtCrntBal',
		'txtAdjPlcd',
		'txtNonChrgAddl',
		'txtChrgAddl',
		'txtAdjRbt',
		'txtAdjClctns',
		'txtAdjBal',
		'NewbalAmtPlcd',
		'NewNonChrgAddl',
		'NewChrgAddl',
		'NewbalAmtRbt',
		'NewbalAmtClctns',
		'NewbalAmtCrntBal',
		'UID',
		'SID',
		'transactionId',
		'Isaprvd'
	];
}
