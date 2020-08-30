<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblremitrptmthdtype
 * 
 * @property int $remitRptMthdUID
 * @property string $remitRptMthdDesc
 *
 * @package App\Models
 */
class Tblremitrptmthdtype extends Model
{
	protected $table = 'tblremitrptmthdtypes';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'remitRptMthdUID' => 'int'
	];

	protected $fillable = [
		'remitRptMthdUID',
		'remitRptMthdDesc'
	];
}
