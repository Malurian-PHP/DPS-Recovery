<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblltrhist
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
class Tblltrhist extends Model
{
	protected $table = 'tblltrhist';
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
		'lthistUid',
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

    public function user()
    {
        return $this->belongsTo('App\Models\Tblcase', 'ltrhistCmtUid', 'cmtUID');
    }


}
