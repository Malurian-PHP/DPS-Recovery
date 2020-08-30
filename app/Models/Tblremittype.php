<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblremittype
 * 
 * @property int $remitTypeUID
 * @property string $remitTypeDesc
 *
 * @package App\Models
 */
class Tblremittype extends Model
{
	protected $table = 'tblremittypes';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'remitTypeUID' => 'int'
	];

	protected $fillable = [
		'remitTypeUID',
		'remitTypeDesc'
	];
}
