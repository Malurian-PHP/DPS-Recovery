<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblrptcat
 * 
 * @property int $rptCatUID
 * @property string $rptCatValue
 *
 * @package App\Models
 */
class Tblrptcat extends Model
{
	protected $table = 'tblrptcats';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'rptCatUID' => 'int'
	];

	protected $fillable = [
		'rptCatUID',
		'rptCatValue'
	];
}
