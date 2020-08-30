<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblstate
 * 
 * @property string $stAbrv
 * @property int $stCode
 * @property string $stName
 *
 * @package App\Models
 */
class Tblstate extends Model
{
	protected $table = 'tblstates';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'stCode' => 'int'
	];

	protected $fillable = [
		'stAbrv',
		'stCode',
		'stName'
	];
}
