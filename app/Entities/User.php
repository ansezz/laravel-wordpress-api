<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 01 May 2018 11:40:39 +0000.
 */

namespace App\Entities;

use Prettus\Repository\Contracts\Presentable;
use Prettus\Repository\Traits\PresentableTrait;
use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class User
 *
 * @property int $ID
 * @property string $user_login
 * @property string $user_pass
 * @property string $user_nicename
 * @property string $user_email
 * @property string $user_url
 * @property \Carbon\Carbon $user_registered
 * @property string $user_activation_key
 * @property int $user_status
 * @property string $display_name
 * @package App\Entities
 * @mixin \Eloquent
 */
class User extends Eloquent implements Presentable
{
    use PresentableTrait;


    protected $primaryKey = 'ID';
    public $timestamps = false;

    protected $casts = [
        'user_status' => 'int'
    ];

    protected $dates = [
        'user_registered'
    ];

    protected $hidden = ['user_pass'];

    protected $fillable = [
        'user_login',
        'user_pass',
        'user_nicename',
        'user_email',
        'user_url',
        'user_registered',
        'user_activation_key',
        'user_status',
        'display_name'
    ];
}
