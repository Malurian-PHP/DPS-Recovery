<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblrpttype
 * 
 * @property int $rptTypesUID
 * @property string $rptTypesValue
 *
 * @package App\Models
 */
class Tblrpttype extends Model
{
	protected $table = 'tblrpttypes';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'rptTypesUID' => 'int'
	];

	protected $fillable = [
		'rptTypesUID',
		'rptTypesValue'
	];
}
