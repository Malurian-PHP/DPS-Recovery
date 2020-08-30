<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblnotetype
 * 
 * @property int $notetypeUID
 * @property string $noteType
 *
 * @package App\Models
 */
class Tblnotetype extends Model
{
	protected $table = 'tblnotetypes';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'notetypeUID' => 'int'
	];

	protected $fillable = [
		'notetypeUID',
		'noteType'
	];
}
