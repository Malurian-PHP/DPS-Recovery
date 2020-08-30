<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BakTblcrntbal
 * 
 * @property int $balUID
 * @property string $cmtUID
 * @property float $balAmtPlcd
 * @property float $balNonChrgAddl
 * @property float $balChrgAddl
 * @property float $balAmtRbt
 * @property float $balAmtClctns
 * @property float $balAmtCrntBal
 * @property Carbon $balEditDt
 * @property string $balEditempUID
 * @property int $balSelectMe
 *
 * @package App\Models
 */
class BakTblcrntbal extends Model
{
	protected $table = 'bak_tblcrntbal';
	protected $primaryKey = 'cmtUID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'balUID' => 'int',
		'balAmtPlcd' => 'float',
		'balNonChrgAddl' => 'float',
		'balChrgAddl' => 'float',
		'balAmtRbt' => 'float',
		'balAmtClctns' => 'float',
		'balAmtCrntBal' => 'float',
		'balSelectMe' => 'int'
	];

	protected $dates = [
		'balEditDt'
	];

	protected $fillable = [
		'balUID',
		'balAmtPlcd',
		'balNonChrgAddl',
		'balChrgAddl',
		'balAmtRbt',
		'balAmtClctns',
		'balAmtCrntBal',
		'balEditDt',
		'balEditempUID',
		'balSelectMe'
	];
}
