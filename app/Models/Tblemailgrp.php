<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblemailgrp
 * 
 * @property int $emailgrpsUID
 * @property int $emailgrptypeUID
 * @property int $emailgrpsCNTYUID
 * @property string $emailgrpsCNTYStAbrv
 * @property string $emailgrpsCNTYNam
 * @property string $emailgrpsEmailAdrs
 *
 * @package App\Models
 */
class Tblemailgrp extends Model
{
	protected $table = 'tblemailgrps';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'emailgrpsUID' => 'int',
		'emailgrptypeUID' => 'int',
		'emailgrpsCNTYUID' => 'int'
	];

	protected $fillable = [
		'emailgrpsUID',
		'emailgrptypeUID',
		'emailgrpsCNTYUID',
		'emailgrpsCNTYStAbrv',
		'emailgrpsCNTYNam',
		'emailgrpsEmailAdrs'
	];
}
