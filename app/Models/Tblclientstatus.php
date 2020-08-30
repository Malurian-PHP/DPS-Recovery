<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblclientstatus
 * 
 * @property int $clientStatusUID
 * @property string $clientStatusTxt
 *
 * @package App\Models
 */
class Tblclientstatus extends Model
{
	protected $table = 'tblclientstatuses';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'clientStatusUID' => 'int'
	];

	protected $fillable = [
		'clientStatusUID',
		'clientStatusTxt'
	];
}
