<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblremitfreqtype
 * 
 * @property int $remitFreqUID
 * @property string $remitFreqDesc
 *
 * @package App\Models
 */
class Tblremitfreqtype extends Model
{
	protected $table = 'tblremitfreqtypes';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'remitFreqUID' => 'int'
	];

	protected $fillable = [
		'remitFreqUID',
		'remitFreqDesc'
	];
}
