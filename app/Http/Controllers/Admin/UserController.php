<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\ArticleRepositoryInterface;
use App\Http\Requests\Api\ArticleRequest;

class UserController extends Controller
{
    public function __construct(ArticleRepositoryInterface $articleRepository){
        $this->articleRepository = $articleRepository;
    }

    public function all(Request $request){
        $data = $request->all();
        $keyword = $data['filter'] ?? '';
        $searchColumns = ['title', 'content'];
        $order = '';
        $limit = $data['per_page'] ?? 5;
        $page = $data['page'] ?? 1;
        $arr = $this->articleRepository->search(null, $keyword, $searchColumns, $order, $limit, $page);
        return response()->json($arr);
    }

    public function find($id){
        return $this->articleRepository->find($id);
    }

    public function create(Request $request){
        $validator = $this->articleRepository->validateFields($request->all());

        if($validator) return $validator;

        return $this->articleRepository->create($request->all());
    }

    public function update(Request $request){
        return $this->articleRepository->update($request, $id);
    }

    public function delete($id){
        return $this->articleRepository->delete($id);
    }
}
