<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tbladjsreturn
 * 
 * @property Carbon $rtnDt
 * @property int $adjUID
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
 * @property float $fracClientValue
 * @property float $fracClctnsValue
 * @property int $adjType
 * @property bool $adjPaid
 * @property string $adjPaidRef
 * @property string $adjPaidUserUid
 * @property Carbon $adjPaidDt
 *
 * @package App\Models
 */
class Tbladjsreturn extends Model
{
	protected $table = 'tbladjsreturns';
	protected $primaryKey = 'adjUID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'adjUID' => 'int',
		'clientsCourtType' => 'int',
		'caseLitNum' => 'int',
		'caseUID' => 'int',
		'balUID' => 'int',
		'plcmtUID' => 'int',
		'fracClientValue' => 'float',
		'fracClctnsValue' => 'float',
		'adjType' => 'int',
		'adjPaid' => 'bool'
	];

	protected $dates = [
		'rtnDt',
		'adjDt',
		'adjPaidDt'
	];

	protected $fillable = [
		'rtnDt',
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
		'fracClientValue',
		'fracClctnsValue',
		'adjType',
		'adjPaid',
		'adjPaidRef',
		'adjPaidUserUid',
		'adjPaidDt'
	];
}
