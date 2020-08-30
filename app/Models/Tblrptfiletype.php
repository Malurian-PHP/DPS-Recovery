<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblrptfiletype
 * 
 * @property int $rptFileTypeUID
 * @property string $rptFileTypeValue
 *
 * @package App\Models
 */
class Tblrptfiletype extends Model
{
	protected $table = 'tblrptfiletypes';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'rptFileTypeUID' => 'int'
	];

	protected $fillable = [
		'rptFileTypeUID',
		'rptFileTypeValue'
	];
}
