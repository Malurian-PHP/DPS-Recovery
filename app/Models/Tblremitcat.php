<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblremitcat
 * 
 * @property int $remitCatUID
 * @property string $remitCatValue
 *
 * @package App\Models
 */
class Tblremitcat extends Model
{
	protected $table = 'tblremitcats';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'remitCatUID' => 'int'
	];

	protected $fillable = [
		'remitCatUID',
		'remitCatValue'
	];
}
