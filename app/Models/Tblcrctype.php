<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblcrctype
 * 
 * @property int $crcUid
 * @property string $crcType
 *
 * @package App\Models
 */
class Tblcrctype extends Model
{
	protected $table = 'tblcrctypes';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'crcUid' => 'int'
	];

	protected $fillable = [
		'crcUid',
		'crcType'
	];
}
