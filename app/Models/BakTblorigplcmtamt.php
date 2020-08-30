<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BakTblorigplcmtamt
 * 
 * @property int $plcmtUID
 * @property string $cmtUID
 * @property float $plcmtAmtPlcd
 * @property float $plcmtNonChrgAddl
 * @property float $plcmtChrgAddl
 * @property float $plcmtAmtRbt
 * @property float $plcmtAmtClctns
 * @property float $plcmtAmtBgnBal
 * @property int $plcmtSelectMe
 *
 * @package App\Models
 */
class BakTblorigplcmtamt extends Model
{
	protected $table = 'bak_tblorigplcmtamt';
	protected $primaryKey = 'cmtUID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'plcmtUID' => 'int',
		'plcmtAmtPlcd' => 'float',
		'plcmtNonChrgAddl' => 'float',
		'plcmtChrgAddl' => 'float',
		'plcmtAmtRbt' => 'float',
		'plcmtAmtClctns' => 'float',
		'plcmtAmtBgnBal' => 'float',
		'plcmtSelectMe' => 'int'
	];

	protected $fillable = [
		'plcmtUID',
		'plcmtAmtPlcd',
		'plcmtNonChrgAddl',
		'plcmtChrgAddl',
		'plcmtAmtRbt',
		'plcmtAmtClctns',
		'plcmtAmtBgnBal',
		'plcmtSelectMe'
	];
}
