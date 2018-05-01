<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 01 May 2018 11:40:39 +0000.
 */

namespace App\Entities;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Term
 *
 * @property int $term_id
 * @property string $name
 * @property string $slug
 * @property int $term_group
 * @package App\Entities
 * @mixin \Eloquent
 */
class Term extends Eloquent
{
	protected $primaryKey = 'term_id';
	public $timestamps = false;

	protected $casts = [
		'term_group' => 'int'
	];

	protected $fillable = [
		'name',
		'slug',
		'term_group'
	];
}
