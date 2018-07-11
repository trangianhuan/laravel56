<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\ArticleRepositoryInterface;

class ArticleController extends Controller
{
    public function __construct(ArticleRepositoryInterface $articleRepository){
        $this->articleRepository = $articleRepository;
    }

    public function all(){
        return $this->articleRepository->all();
    }

    public function find($id){
        return $this->articleRepository->find($id);
    }

    public function create(Request $request){
        return $this->articleRepository->create($request);
    }

    public function update(Request $request){
        return $this->articleRepository->update($request, $id);
    }

    public function delete($id){
        return $this->articleRepository->delete($id);
    }
}
