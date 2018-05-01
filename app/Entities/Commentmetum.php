<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 01 May 2018 11:40:39 +0000.
 */

namespace App\Entities;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Commentmetum
 *
 * @property int $meta_id
 * @property int $comment_id
 * @property string $meta_key
 * @property string $meta_value
 * @package App\Entities
 * @mixin \Eloquent
 */
class Commentmetum extends Eloquent
{
	protected $primaryKey = 'meta_id';
	public $timestamps = false;

	protected $casts = [
		'comment_id' => 'int'
	];

	protected $fillable = [
		'comment_id',
		'meta_key',
		'meta_value'
	];
}
