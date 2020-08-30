<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BakTblltrhist
 * 
 * @property int $lthistUid
 * @property string $ltrhistCmtUid
 * @property Carbon $ltrhistGenDt
 * @property string $ltrhistBatchId
 * @property string $ltrhistTypeId
 * @property string $ltrhistLtrId
 * @property float $ltrhistTotalLtrAmt
 * @property float $ltrhistOrigPlcdAmt
 * @property float $ltrhistCrntBalAmt
 * @property string $ltrhistAdrsKey
 *
 * @package App\Models
 */
class BakTblltrhist extends Model
{
	protected $table = 'bak_tblltrhist';
	protected $primaryKey = 'lthistUid';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'lthistUid' => 'int',
		'ltrhistTotalLtrAmt' => 'float',
		'ltrhistOrigPlcdAmt' => 'float',
		'ltrhistCrntBalAmt' => 'float'
	];

	protected $dates = [
		'ltrhistGenDt'
	];

	protected $fillable = [
		'ltrhistCmtUid',
		'ltrhistGenDt',
		'ltrhistBatchId',
		'ltrhistTypeId',
		'ltrhistLtrId',
		'ltrhistTotalLtrAmt',
		'ltrhistOrigPlcdAmt',
		'ltrhistCrntBalAmt',
		'ltrhistAdrsKey'
	];
}
