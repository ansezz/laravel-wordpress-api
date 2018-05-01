<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 01 May 2018 11:40:39 +0000.
 */

namespace App\Entities;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Usermetum
 *
 * @property int $umeta_id
 * @property int $user_id
 * @property string $meta_key
 * @property string $meta_value
 * @package App\Entities
 * @mixin \Eloquent
 */
class Usermetum extends Eloquent
{
	protected $primaryKey = 'umeta_id';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'meta_key',
		'meta_value'
	];
}
