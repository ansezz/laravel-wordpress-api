<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 01 May 2018 11:40:39 +0000.
 */

namespace App\Entities;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Option
 *
 * @property int $option_id
 * @property string $option_name
 * @property string $option_value
 * @property string $autoload
 * @package App\Entities
 * @mixin \Eloquent
 */
class Option extends Eloquent
{
	protected $primaryKey = 'option_id';
	public $timestamps = false;

	protected $fillable = [
		'option_name',
		'option_value',
		'autoload'
	];
}
