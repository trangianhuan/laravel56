<?php

namespace App\GraphQL\Query;

use App\Models\Article;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;
use Rebing\GraphQL\Support\SelectFields;
use App\GraphQL\Type\ArticlesType;

class ArticlesQuery extends Query
{
    protected $attributes = [
        'name' => 'Article Query',
        'description' => 'A query of Article'
    ];

    public function type2()
    {
        // kết quả của query với paginate của laravel
        return GraphQL::paginate('articles');
    }
    public function type()
    {
        // type config in config/graphql.php
        return Type::listOf(GraphQL::type('articles'));
    }

    // arguments to filter query
    public function args()
    {
        return [
            'id' => [
                'name' => 'id',
                'type' => Type::int()
            ],
            'content' => [
                'name' => 'content',
                'type' => Type::string()
            ],
            'short_content' => [
                'type' => Type::string(),
                'name' => 'short_content'
            ],
            'meta_title' => [
                'type' => Type::string(),
                'name' => 'meta_title'
            ],
            'meta_keyword' => [
                'type' => Type::string(),
                'name' => 'meta_keyword'
            ],
            'meta_name' => [
                'type' => Type::string(),
                'name' => 'meta_name'
            ],
            'expiration_date' => [
                'type' => Type::string(),
                'name' => 'expiration_date'
            ],
            'is_available' => [
                'type' => Type::int(),
                'name' => 'is_available'
            ],
            'locale_id' => [
                'type' => Type::int(),
                'name' => 'locale_id'
            ]
        ];
    }

    public function resolve($root, $args, SelectFields $fields)
    {
        $where = function ($query) use ($args) {
            if (isset($args['id'])) {
                $query->where('id',$args['id']);
            }
        };

        $article = Article::with(array_keys($fields->getRelations()))
            ->where($where)
            ->select($fields->getSelect())
            ->paginate();

        return $article;
    }
}