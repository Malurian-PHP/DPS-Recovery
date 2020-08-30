<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblwebuser
 * 
 * @property int $webUID
 * @property string $webEmail
 * @property string $webNamFirst
 * @property string $webNamLast
 * @property int $clientsUID
 * @property string $webPWtmp
 * @property boolean $webPW
 * @property bool $webActive
 *
 * @package App\Models
 */
class Tblwebuser extends Model
{
	protected $table = 'tblwebusers';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'webUID' => 'int',
		'clientsUID' => 'int',
		'webPW' => 'boolean',
		'webActive' => 'bool'
	];

	protected $fillable = [
		'webUID',
		'webEmail',
		'webNamFirst',
		'webNamLast',
		'clientsUID',
		'webPWtmp',
		'webPW',
		'webActive'
	];
}
