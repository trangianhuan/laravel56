<?php

namespace App\GraphQL\Type;

use App\Models\Article;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Type as GraphQLType;

class ArticlesType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Articles',
        'description' => 'A articles',
        'model' => Article::class,
    ];

    // Định nghĩa field của type
    public function fields()
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The id of the article'
            ],
            'content' => [
                'type' => Type::string(),
                'description' => 'The content of the article'
            ],
            'short_content' => [
                'type' => Type::string(),
                'description' => 'The short content of the article'
            ],
            'meta_title' => [
                'type' => Type::string(),
                'description' => 'The meta title of the article'
            ],
            'meta_keyword' => [
                'type' => Type::string(),
                'description' => 'The meta keyword of the article'
            ],
            'meta_description' => [
                'type' => Type::string(),
                'description' => 'The meta description of the article'
            ],
            'expiration_date' => [
                'type' => Type::string(),
                'description' => 'The expiration date of the article'
            ],
            'is_available' => [
                'type' => Type::int(),
                'description' => 'The is available of the article'
            ],
            'locale_id' => [
                'type' => Type::int(),
                'description' => 'The locale id of the article'
            ]
        ];
    }

    protected function resolveEmailField($root, $args)
    {
        return strtolower($root->email);
    }
}