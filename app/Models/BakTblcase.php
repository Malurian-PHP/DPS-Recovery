<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BakTblcase
 * 
 * @property int $caseUID
 * @property string $cmtUID
 * @property int $caseClientUID
 * @property string $caseNmbr
 * @property string $caseSubNmbr
 * @property Carbon $caseDate
 * @property int $caseLitNum
 * @property string $caseNameCmpny
 * @property string $caseNameLast
 * @property string $caseNameFirst
 * @property string $caseNameMid
 * @property string $caseNameSuffix
 * @property Carbon $caseDOB
 * @property string $casePhn1
 * @property string $caseInmateNmbr
 * @property string $casePriStatus
 * @property string $caseSecStatus
 * @property string $caseNarrative
 * @property Carbon $caseInputDt
 * @property int $caseAge
 * @property float $casePrcntCalc
 * @property string $caseEmail
 * @property string $caseDLState
 * @property string $caseDLNum
 * @property string $caseDefGender
 * @property int $caseProbate
 * @property Carbon $caseRetractDt
 * @property int $caseSelectMe
 * @property bool $casePrevSkip
 * @property bool $caseNewAdrs
 * @property Carbon $caseExtensionDt
 *
 * @package App\Models
 */
class BakTblcase extends Model
{
	protected $table = 'bak_tblcases';
	protected $primaryKey = 'caseUID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'caseUID' => 'int',
		'caseClientUID' => 'int',
		'caseLitNum' => 'int',
		'caseAge' => 'int',
		'casePrcntCalc' => 'float',
		'caseProbate' => 'int',
		'caseSelectMe' => 'int',
		'casePrevSkip' => 'bool',
		'caseNewAdrs' => 'bool'
	];

	protected $dates = [
		'caseDate',
		'caseDOB',
		'caseInputDt',
		'caseRetractDt',
		'caseExtensionDt'
	];

	protected $fillable = [
		'cmtUID',
		'caseClientUID',
		'caseNmbr',
		'caseSubNmbr',
		'caseDate',
		'caseLitNum',
		'caseNameCmpny',
		'caseNameLast',
		'caseNameFirst',
		'caseNameMid',
		'caseNameSuffix',
		'caseDOB',
		'casePhn1',
		'caseInmateNmbr',
		'casePriStatus',
		'caseSecStatus',
		'caseNarrative',
		'caseInputDt',
		'caseAge',
		'casePrcntCalc',
		'caseEmail',
		'caseDLState',
		'caseDLNum',
		'caseDefGender',
		'caseProbate',
		'caseRetractDt',
		'caseSelectMe',
		'casePrevSkip',
		'caseNewAdrs',
		'caseExtensionDt'
	];
}
