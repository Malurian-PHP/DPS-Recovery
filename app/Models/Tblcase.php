<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblcase
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
class Tblcase extends Model implements Searchable
{

    public function getSearchResult(): SearchResult
    {
        $url = '';

        return new SearchResult(
            $this,
            $this->caseNameLast,
            $this->caseNameFirst,
            $this->caseNameMid,
            $this->caseNmbr,
            $url
        );
    }

    public function letter_id()
    {
        return $this->hasOne('App\Models\Tblltrhist', 'ltrhistCmtUid', 'cmtUID');
    }

    public function balance() {
        return $this->hasOne('App\Models\Tblcrntbal', 'cmtUID', 'cmtUID');
    }

    public function zip() {

        return $this->hasOne('App\Models\Tbladrse', 'adrsCmtUID', 'cmtUID');
    }

	protected $table = 'tblcases';
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
		'caseUID',
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
