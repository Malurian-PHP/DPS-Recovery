<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblltrkey
 * 
 * @property int $ltrkeyUid
 * @property string $ltrkeyCmtUid
 * @property string $ltrkeyAdrsKey
 * @property bool $ltrkeyIsActive
 * @property Carbon $ltrkeyEditDt
 * @property Carbon $ltrkeyRcntGenDt
 * @property string $ltrkeyRcntGenType
 * @property int $ltrkeyRcntGenTypeNum
 * @property int $ltrkeySelectMe
 *
 * @package App\Models
 */
class Tblltrkey extends Model
{
	protected $table = 'tblltrkeys';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ltrkeyUid' => 'int',
		'ltrkeyIsActive' => 'bool',
		'ltrkeyRcntGenTypeNum' => 'int',
		'ltrkeySelectMe' => 'int'
	];

	protected $dates = [
		'ltrkeyEditDt',
		'ltrkeyRcntGenDt'
	];

	protected $fillable = [
		'ltrkeyUid',
		'ltrkeyCmtUid',
		'ltrkeyAdrsKey',
		'ltrkeyIsActive',
		'ltrkeyEditDt',
		'ltrkeyRcntGenDt',
		'ltrkeyRcntGenType',
		'ltrkeyRcntGenTypeNum',
		'ltrkeySelectMe'
	];
}
