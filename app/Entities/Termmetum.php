<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 01 May 2018 11:40:39 +0000.
 */

namespace App\Entities;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Termmetum
 *
 * @property int $meta_id
 * @property int $term_id
 * @property string $meta_key
 * @property string $meta_value
 * @package App\Entities
 * @mixin \Eloquent
 */
class Termmetum extends Eloquent
{
	protected $primaryKey = 'meta_id';
	public $timestamps = false;

	protected $casts = [
		'term_id' => 'int'
	];

	protected $fillable = [
		'term_id',
		'meta_key',
		'meta_value'
	];
}
