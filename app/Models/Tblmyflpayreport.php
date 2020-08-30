<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblmyflpayreport
 * 
 * @property string $orderID
 * @property string $userNam
 * @property string $serviceNam
 * @property string $cardHolderNam
 * @property string $transDtTm
 * @property string $cardType
 * @property float $transAmt
 * @property string $transStatus
 * @property string $description
 *
 * @package App\Models
 */
class Tblmyflpayreport extends Model
{
	protected $table = 'tblmyflpayreport';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'transAmt' => 'float'
	];

	protected $fillable = [
		'orderID',
		'userNam',
		'serviceNam',
		'cardHolderNam',
		'transDtTm',
		'cardType',
		'transAmt',
		'transStatus',
		'description'
	];
}
