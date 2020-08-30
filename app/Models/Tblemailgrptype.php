<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblemailgrptype
 * 
 * @property int $emailgrptypeUID
 * @property string $emailgrptypeDesc
 *
 * @package App\Models
 */
class Tblemailgrptype extends Model
{
	protected $table = 'tblemailgrptypes';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'emailgrptypeUID' => 'int'
	];

	protected $fillable = [
		'emailgrptypeUID',
		'emailgrptypeDesc'
	];
}
