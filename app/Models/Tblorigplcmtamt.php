<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblorigplcmtamt
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
class Tblorigplcmtamt extends Model
{
	protected $table = 'tblorigplcmtamt';
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
		'cmtUID',
		'plcmtAmtPlcd',
		'plcmtNonChrgAddl',
		'plcmtChrgAddl',
		'plcmtAmtRbt',
		'plcmtAmtClctns',
		'plcmtAmtBgnBal',
		'plcmtSelectMe'
	];
}
