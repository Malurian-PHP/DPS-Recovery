<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tbladjtype
 * 
 * @property int $adjtypeUID
 * @property string $adjtypeName
 *
 * @package App\Models
 */
class Tbladjtype extends Model
{
	protected $table = 'tbladjtypes';
	protected $primaryKey = 'adjtypeUID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'adjtypeUID' => 'int'
	];

	protected $fillable = [
		'adjtypeName'
	];
}
