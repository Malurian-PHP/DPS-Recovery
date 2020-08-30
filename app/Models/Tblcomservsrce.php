<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblcomservsrce
 * 
 * @property int $comservsrcUid
 * @property string $comservsrc
 *
 * @package App\Models
 */
class Tblcomservsrce extends Model
{
	protected $table = 'tblcomservsrces';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'comservsrcUid' => 'int'
	];

	protected $fillable = [
		'comservsrcUid',
		'comservsrc'
	];
}
