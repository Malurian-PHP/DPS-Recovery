<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblemployee
 * 
 * @property int $empUID
 * @property string $empLastNm
 * @property string $empFirstNm
 * @property string $empTxtPw
 * @property boolean $empHashPw
 * @property bool $empIsActive
 * @property bool $empSrchCases
 * @property bool $empAdrsChng
 * @property bool $empAdjs
 * @property bool $empCrtLtrs
 * @property bool $empCrc
 * @property bool $empNote
 * @property bool $empPhn
 * @property bool $empNam
 * @property int $empMyFl
 * @property bool $empEva
 * @property bool $empComServ
 * @property bool $empSkip
 * @property bool $empRpts
 * @property bool $empBalEdit
 * @property bool $empNegBalMax
 * @property bool $empSelCase
 * @property bool $empRetract
 *
 * @package App\Models
 */
class Tblemployee extends Model
{
	protected $table = 'tblemployees';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'empUID' => 'int',
		'empHashPw' => 'boolean',
		'empIsActive' => 'bool',
		'empSrchCases' => 'bool',
		'empAdrsChng' => 'bool',
		'empAdjs' => 'bool',
		'empCrtLtrs' => 'bool',
		'empCrc' => 'bool',
		'empNote' => 'bool',
		'empPhn' => 'bool',
		'empNam' => 'bool',
		'empMyFl' => 'int',
		'empEva' => 'bool',
		'empComServ' => 'bool',
		'empSkip' => 'bool',
		'empRpts' => 'bool',
		'empBalEdit' => 'bool',
		'empNegBalMax' => 'bool',
		'empSelCase' => 'bool',
		'empRetract' => 'bool'
	];

	protected $fillable = [
		'empUID',
		'empLastNm',
		'empFirstNm',
		'empTxtPw',
		'empHashPw',
		'empIsActive',
		'empSrchCases',
		'empAdrsChng',
		'empAdjs',
		'empCrtLtrs',
		'empCrc',
		'empNote',
		'empPhn',
		'empNam',
		'empMyFl',
		'empEva',
		'empComServ',
		'empSkip',
		'empRpts',
		'empBalEdit',
		'empNegBalMax',
		'empSelCase',
		'empRetract'
	];
}
