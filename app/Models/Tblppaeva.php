<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblppaeva
 * 
 * @property int $evaUID
 * @property string $evaCmtUID
 * @property Carbon $evaDt
 * @property float $evaAmtDue
 * @property float $evaMnthlyAmt
 * @property int $evaAdminPaid
 * @property int $evaEmpID
 * @property bool $evaBadEntry
 *
 * @package App\Models
 */
class Tblppaeva extends Model
{
	protected $table = 'tblppaeva';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'evaUID' => 'int',
		'evaAmtDue' => 'float',
		'evaMnthlyAmt' => 'float',
		'evaAdminPaid' => 'int',
		'evaEmpID' => 'int',
		'evaBadEntry' => 'bool'
	];

	protected $dates = [
		'evaDt'
	];

	protected $fillable = [
		'evaUID',
		'evaCmtUID',
		'evaDt',
		'evaAmtDue',
		'evaMnthlyAmt',
		'evaAdminPaid',
		'evaEmpID',
		'evaBadEntry'
	];
}
