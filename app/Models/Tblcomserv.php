<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblcomserv
 * 
 * @property int $comservUid
 * @property string $cmtUID
 * @property int $comservSrc
 * @property Carbon $comservDt
 * @property int $comservEmpId
 *
 * @package App\Models
 */
class Tblcomserv extends Model
{
	protected $table = 'tblcomserv';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'comservUid' => 'int',
		'comservSrc' => 'int',
		'comservEmpId' => 'int'
	];

	protected $dates = [
		'comservDt'
	];

	protected $fillable = [
		'comservUid',
		'cmtUID',
		'comservSrc',
		'comservDt',
		'comservEmpId'
	];
}
