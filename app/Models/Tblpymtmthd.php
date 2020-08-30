<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblpymtmthd
 * 
 * @property int $pymtmthdUID
 * @property string $pymtmthdName
 * @property string $pymtmthdDesc
 *
 * @package App\Models
 */
class Tblpymtmthd extends Model
{
	protected $table = 'tblpymtmthds';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'pymtmthdUID' => 'int'
	];

	protected $fillable = [
		'pymtmthdUID',
		'pymtmthdName',
		'pymtmthdDesc'
	];
}
