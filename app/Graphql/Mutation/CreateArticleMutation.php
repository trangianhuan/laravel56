<?php

namespace App\GraphQL\Mutation;

use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;
use Rebing\GraphQL\Support\SelectFields;
use App\Models\Article;

class CreateArticleMutation extends Mutation
{
    protected $attributes = [
        'name' => 'CreateArticleMutation',
        'description' => 'A mutation'
    ];

    public function type()
    {
        return Type::listOf('articles');
    }

    public function args()
    {
        return [
            'content' => [
                'type' => Type::nonNull(Type::string()),
                'rules' => ['required']
            ],
            'title' => [
                'type' => Type::nonNull(Type::string()),
                'rules' => ['required']
            ],
        ];
    }

    public function resolve($root, $args, SelectFields $fields, ResolveInfo $info)
    {
        //$select = $fields->getSelect();
        //$with = $fields->getRelations();

        $article = new Article();
        $article->fill($args);
        $article->save();

        return $article;
    }
}