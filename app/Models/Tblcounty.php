<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblcounty
 * 
 * @property string $stAbrv
 * @property int $stCode
 * @property int $cntyStCode
 * @property string $cntyName
 * @property int $cntyUid
 *
 * @package App\Models
 */
class Tblcounty extends Model
{
	protected $table = 'tblcounties';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'stCode' => 'int',
		'cntyStCode' => 'int',
		'cntyUid' => 'int'
	];

	protected $fillable = [
		'stAbrv',
		'stCode',
		'cntyStCode',
		'cntyName',
		'cntyUid'
	];
}
