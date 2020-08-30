<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblnote
 * 
 * @property int $noteUID
 * @property string $noteCmtId
 * @property Carbon $noteDt
 * @property int $noteUserId
 * @property string $noteType
 * @property string $noteNote
 *
 * @package App\Models
 */
class Tblnote extends Model
{
	protected $table = 'tblnotes';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'noteUID' => 'int',
		'noteUserId' => 'int'
	];

	protected $dates = [
		'noteDt'
	];

	protected $fillable = [
		'noteUID',
		'noteCmtId',
		'noteDt',
		'noteUserId',
		'noteType',
		'noteNote'
	];
}
