<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 01 May 2018 11:40:39 +0000.
 */

namespace App\Entities;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TermTaxonomy
 *
 * @property int $term_taxonomy_id
 * @property int $term_id
 * @property string $taxonomy
 * @property string $description
 * @property int $parent
 * @property int $count
 * @package App\Entities
 * @mixin \Eloquent
 */
class TermTaxonomy extends Eloquent
{
	protected $table = 'term_taxonomy';
	protected $primaryKey = 'term_taxonomy_id';
	public $timestamps = false;

	protected $casts = [
		'term_id' => 'int',
		'parent' => 'int',
		'count' => 'int'
	];

	protected $fillable = [
		'term_id',
		'taxonomy',
		'description',
		'parent',
		'count'
	];
}
