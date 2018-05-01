<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 01 May 2018 11:40:39 +0000.
 */

namespace App\Entities;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Link
 *
 * @property int $link_id
 * @property string $link_url
 * @property string $link_name
 * @property string $link_image
 * @property string $link_target
 * @property string $link_description
 * @property string $link_visible
 * @property int $link_owner
 * @property int $link_rating
 * @property \Carbon\Carbon $link_updated
 * @property string $link_rel
 * @property string $link_notes
 * @property string $link_rss
 * @package App\Entities
 * @mixin \Eloquent
 */
class Link extends Eloquent
{
	protected $primaryKey = 'link_id';
	public $timestamps = false;

	protected $casts = [
		'link_owner' => 'int',
		'link_rating' => 'int'
	];

	protected $dates = [
		'link_updated'
	];

	protected $fillable = [
		'link_url',
		'link_name',
		'link_image',
		'link_target',
		'link_description',
		'link_visible',
		'link_owner',
		'link_rating',
		'link_updated',
		'link_rel',
		'link_notes',
		'link_rss'
	];
}
