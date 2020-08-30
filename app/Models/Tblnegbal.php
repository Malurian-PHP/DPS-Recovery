<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblnegbal
 * 
 * @property int $negNBUID
 * @property int $negClientsUID
 * @property int $negNBM
 * @property float $negUnit1
 * @property float $negUnit2
 * @property float $negUnit3
 * @property float $negUnit4
 *
 * @package App\Models
 */
class Tblnegbal extends Model
{
	protected $table = 'tblnegbal';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'negNBUID' => 'int',
		'negClientsUID' => 'int',
		'negNBM' => 'int',
		'negUnit1' => 'float',
		'negUnit2' => 'float',
		'negUnit3' => 'float',
		'negUnit4' => 'float'
	];

	protected $fillable = [
		'negNBUID',
		'negClientsUID',
		'negNBM',
		'negUnit1',
		'negUnit2',
		'negUnit3',
		'negUnit4'
	];
}
