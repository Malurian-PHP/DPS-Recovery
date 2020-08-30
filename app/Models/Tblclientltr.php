<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblclientltr
 * 
 * @property int $ClientLtrUID
 * @property int $ClientsUID
 * @property int $NPNA
 * @property int $NPNAP
 * @property int $31Day
 * @property int $31DayP
 * @property int $61Day
 * @property int $61DayP
 * @property int $91Day
 * @property int $91DayP
 * @property int $121Day
 * @property int $121DayP
 * @property int $151Day
 * @property int $151DayP
 * @property int $181Day
 * @property int $181DayP
 * @property int $211Day
 * @property int $211DayP
 * @property int $241Day
 * @property int $241DayP
 * @property int $271Day
 * @property int $271DayP
 * @property int $301Day
 * @property int $301DayP
 * @property int $331Day
 * @property int $331DayP
 * @property int $361Day
 * @property int $361DayP
 *
 * @package App\Models
 */
class Tblclientltr extends Model
{
	protected $table = 'tblclientltrs';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ClientLtrUID' => 'int',
		'ClientsUID' => 'int',
		'NPNA' => 'int',
		'NPNAP' => 'int',
		'31Day' => 'int',
		'31DayP' => 'int',
		'61Day' => 'int',
		'61DayP' => 'int',
		'91Day' => 'int',
		'91DayP' => 'int',
		'121Day' => 'int',
		'121DayP' => 'int',
		'151Day' => 'int',
		'151DayP' => 'int',
		'181Day' => 'int',
		'181DayP' => 'int',
		'211Day' => 'int',
		'211DayP' => 'int',
		'241Day' => 'int',
		'241DayP' => 'int',
		'271Day' => 'int',
		'271DayP' => 'int',
		'301Day' => 'int',
		'301DayP' => 'int',
		'331Day' => 'int',
		'331DayP' => 'int',
		'361Day' => 'int',
		'361DayP' => 'int'
	];

	protected $fillable = [
		'ClientLtrUID',
		'ClientsUID',
		'NPNA',
		'NPNAP',
		'31Day',
		'31DayP',
		'61Day',
		'61DayP',
		'91Day',
		'91DayP',
		'121Day',
		'121DayP',
		'151Day',
		'151DayP',
		'181Day',
		'181DayP',
		'211Day',
		'211DayP',
		'241Day',
		'241DayP',
		'271Day',
		'271DayP',
		'301Day',
		'301DayP',
		'331Day',
		'331DayP',
		'361Day',
		'361DayP'
	];
}
