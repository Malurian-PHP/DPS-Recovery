<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblnegbaladj
 * 
 * @property int $negAdjUID
 * @property string $negAdjCMTUID
 * @property Carbon $negAdjDt
 * @property int $negAdjEmpID
 * @property float $negAdjOrigPlcd
 * @property float $negAdjOrigClctns
 * @property float $negAdjOrigTotal
 * @property float $negAdjNegPlcd
 * @property float $negAdjNegClctns
 * @property float $negAdjNegTotal
 * @property float $negAdjNegPrcnt
 *
 * @package App\Models
 */
class Tblnegbaladj extends Model
{
	protected $table = 'tblnegbaladj';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'negAdjUID' => 'int',
		'negAdjEmpID' => 'int',
		'negAdjOrigPlcd' => 'float',
		'negAdjOrigClctns' => 'float',
		'negAdjOrigTotal' => 'float',
		'negAdjNegPlcd' => 'float',
		'negAdjNegClctns' => 'float',
		'negAdjNegTotal' => 'float',
		'negAdjNegPrcnt' => 'float'
	];

	protected $dates = [
		'negAdjDt'
	];

	protected $fillable = [
		'negAdjUID',
		'negAdjCMTUID',
		'negAdjDt',
		'negAdjEmpID',
		'negAdjOrigPlcd',
		'negAdjOrigClctns',
		'negAdjOrigTotal',
		'negAdjNegPlcd',
		'negAdjNegClctns',
		'negAdjNegTotal',
		'negAdjNegPrcnt'
	];
}
