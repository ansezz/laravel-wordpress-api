<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\User;

/**
 * Class UserTransformer.
 *
 * @package namespace App\Transformers;
 */
class UserTransformer extends TransformerAbstract
{
    /**
     * Transform the User entity.
     *
     * @param \App\Entities\User $model
     *
     * @return array
     */
    public function transform(User $model)
    {
        return [
            'ID' => (int)$model->ID,
            'user_login' => $model->user_login,
            'user_nicename' => $model->user_nicename,
            'user_email' => $model->user_email,
            'user_url' => $model->user_url,
            'user_registered' => $model->user_registered->toDateTimeString(),
            'user_status' => $model->user_status,
            'display_name' => $model->display_name
        ];
    }
}
