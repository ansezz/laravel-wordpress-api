<?php

namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as BaseType;
use GraphQL;

class UserType extends BaseType
{
    protected $attributes = [
        'name' => 'UserType',
        'description' => 'A type'
    ];

    public function fields()
    {
        return [
            'ID' => [
                'type' => Type::nonNull(Type::int())
            ],
            'user_login' => [
                'type' => Type::nonNull(Type::string())
            ],
            'user_nicename' => [
                'type' => Type::nonNull(Type::string())
            ],
            'user_email' => [
                'type' => Type::nonNull(Type::string())
            ],
            'user_url' => [
                'type' => Type::nonNull(Type::string())
            ],
            'user_registered' => [
                'type' => Type::nonNull(Type::string())
            ],
            'user_status' => [
                'type' => Type::nonNull(Type::int())
            ],
            'display_name' => [
                'type' => Type::nonNull(Type::string())
            ]
        ];
    }
}
