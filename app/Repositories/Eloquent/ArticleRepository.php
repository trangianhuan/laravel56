<?php
namespace App\Repositories\Eloquent;

use App\Repositories\Eloquent\Repository;
use App\Repositories\Contracts\ArticleRepositoryInterface;
use Illuminate\Container\Container as App;
use App\Models\Article;

class ArticleRepository extends Repository implements ArticleRepositoryInterface{

    function model()
    {
        return Article::class;
    }
}