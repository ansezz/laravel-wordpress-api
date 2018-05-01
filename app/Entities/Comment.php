<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 01 May 2018 11:40:39 +0000.
 */

namespace App\Entities;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Comment
 *
 * @property int $comment_ID
 * @property int $comment_post_ID
 * @property string $comment_author
 * @property string $comment_author_email
 * @property string $comment_author_url
 * @property string $comment_author_IP
 * @property \Carbon\Carbon $comment_date
 * @property \Carbon\Carbon $comment_date_gmt
 * @property string $comment_content
 * @property int $comment_karma
 * @property string $comment_approved
 * @property string $comment_agent
 * @property string $comment_type
 * @property int $comment_parent
 * @property int $user_id
 * @package App\Entities
 * @mixin \Eloquent
 */
class Comment extends Eloquent
{
	protected $primaryKey = 'comment_ID';
	public $timestamps = false;

	protected $casts = [
		'comment_post_ID' => 'int',
		'comment_karma' => 'int',
		'comment_parent' => 'int',
		'user_id' => 'int'
	];

	protected $dates = [
		'comment_date',
		'comment_date_gmt'
	];

	protected $fillable = [
		'comment_post_ID',
		'comment_author',
		'comment_author_email',
		'comment_author_url',
		'comment_author_IP',
		'comment_date',
		'comment_date_gmt',
		'comment_content',
		'comment_karma',
		'comment_approved',
		'comment_agent',
		'comment_type',
		'comment_parent',
		'user_id'
	];
}
