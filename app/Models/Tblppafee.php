<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblppafee
 * 
 * @property int $ppafeesUid
 * @property string $ppafeesCmtUid
 * @property string $ppafeesRefId
 * @property Carbon $ppafeesDt
 *
 * @package App\Models
 */
class Tblppafee extends Model
{
	protected $table = 'tblppafees';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ppafeesUid' => 'int'
	];

	protected $dates = [
		'ppafeesDt'
	];

	protected $fillable = [
		'ppafeesUid',
		'ppafeesCmtUid',
		'ppafeesRefId',
		'ppafeesDt'
	];
}
