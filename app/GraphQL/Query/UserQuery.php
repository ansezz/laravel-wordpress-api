<?php

namespace App\GraphQL\Query;

use App\Repositories\UserRepository;
use Folklore\GraphQL\Support\Query;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use GraphQL;

class UserQuery extends Query
{

    protected $repository;

    public function __construct(UserRepository $repository)
    {
        parent::__construct();
        $this->repository = $repository;
    }

    protected $attributes = [
        'name' => 'UserQuery',
        'description' => 'A query'
    ];

    public function type()
    {
        return Type::listOf(GraphQL::type('UserType'));
    }

    public function args()
    {
        return [
            'ID' => [
                'name' => 'ID',
                'type' => Type::int()
            ],
            'user_email' => [
                'name' => 'user_email',
                'type' => Type::string()
            ],
            'user_login' => [
                'name' => 'user_login',
                'type' => Type::string()
            ]
        ];
    }

    public function resolve($root, $args, $context, ResolveInfo $info)
    {

        if (isset($args['ID'])) {
            $user = $this->repository->findWhere(['ID' => $args['ID']]);
        } else if (isset($args['user_email'])) {
            $user = $this->repository->findWhere(['user_email' => $args['user_email']]);
        } else if (isset($args['user_login'])) {
            $user = $this->repository->findWhere(['user_login' => $args['user_login']]);
        } else {
            $user = $this->repository;
        }

        return $user['data'];
    }
}
