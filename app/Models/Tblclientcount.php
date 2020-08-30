<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblclientcount
 * 
 * @property int $caseClientsUID
 * @property string $clientsStAbrv
 * @property string $clientsCourtName
 * @property int $clientsCount
 *
 * @package App\Models
 */
class Tblclientcount extends Model
{
	protected $table = 'tblclientcounts';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'caseClientsUID' => 'int',
		'clientsCount' => 'int'
	];

	protected $fillable = [
		'caseClientsUID',
		'clientsStAbrv',
		'clientsCourtName',
		'clientsCount'
	];
}
