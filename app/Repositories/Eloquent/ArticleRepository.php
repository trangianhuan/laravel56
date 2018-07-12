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

    function initFields(){
        $this->roles = [
            'title' => 'required',
            'content' => 'required',
        ];
        $this->messages = [];
    }

    function getAllList(){
        // "total": 50,
        // "per_page": 15,
        // "current_page": 1,
        // "last_page": 4,
        // "next_page_url": "...",
        // "prev_page_url": "...",
        // "from": 1,
        // "to": 15,
        // data:[]
    }
}