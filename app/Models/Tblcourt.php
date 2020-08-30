<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblcourt
 * 
 * @property int $courtUID
 * @property string $courtAbrv
 * @property string $courtDesc
 * @property string $courtShort
 *
 * @package App\Models
 */
class Tblcourt extends Model
{
	protected $table = 'tblcourts';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'courtUID' => 'int'
	];

	protected $fillable = [
		'courtUID',
		'courtAbrv',
		'courtDesc',
		'courtShort'
	];
}
