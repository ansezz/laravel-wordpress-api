<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 01 May 2018 11:40:39 +0000.
 */

namespace App\Entities;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TermRelationship
 *
 * @property int $object_id
 * @property int $term_taxonomy_id
 * @property int $term_order
 * @package App\Entities
 * @mixin \Eloquent
 */
class TermRelationship extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'object_id' => 'int',
		'term_taxonomy_id' => 'int',
		'term_order' => 'int'
	];

	protected $fillable = [
		'term_order'
	];
}
