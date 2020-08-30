<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tbldate
 * 
 * @property Carbon $dtDate
 * @property string $dtDay
 * @property int $dtYear
 * @property int $dtDOM
 * @property int $dtMonth
 * @property int $dtWrkWeekDay
 * @property int $dtWeekEnd
 * @property int $dtWeek
 * @property int $dtWeekDay
 * @property int $dtJulian
 *
 * @package App\Models
 */
class Tbldate extends Model
{
	protected $table = 'tbldates';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'dtYear' => 'int',
		'dtDOM' => 'int',
		'dtMonth' => 'int',
		'dtWrkWeekDay' => 'int',
		'dtWeekEnd' => 'int',
		'dtWeek' => 'int',
		'dtWeekDay' => 'int',
		'dtJulian' => 'int'
	];

	protected $dates = [
		'dtDate'
	];

	protected $fillable = [
		'dtDate',
		'dtDay',
		'dtYear',
		'dtDOM',
		'dtMonth',
		'dtWrkWeekDay',
		'dtWeekEnd',
		'dtWeek',
		'dtWeekDay',
		'dtJulian'
	];
}
