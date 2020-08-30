<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblrptfreq
 * 
 * @property int $rptFreqUID
 * @property string $rptFreqValue
 *
 * @package App\Models
 */
class Tblrptfreq extends Model
{
	protected $table = 'tblrptfreq';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'rptFreqUID' => 'int'
	];

	protected $fillable = [
		'rptFreqUID',
		'rptFreqValue'
	];
}
