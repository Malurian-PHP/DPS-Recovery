<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblfractionaladj
 * 
 * @property int $fracUID
 * @property int $fracClientUID
 * @property bool $fracClientRes
 * @property float $fracClientValue
 * @property float $fracClctnsValue
 *
 * @package App\Models
 */
class Tblfractionaladj extends Model
{
	protected $table = 'tblfractionaladj';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'fracUID' => 'int',
		'fracClientUID' => 'int',
		'fracClientRes' => 'bool',
		'fracClientValue' => 'float',
		'fracClctnsValue' => 'float'
	];

	protected $fillable = [
		'fracUID',
		'fracClientUID',
		'fracClientRes',
		'fracClientValue',
		'fracClctnsValue'
	];
}
