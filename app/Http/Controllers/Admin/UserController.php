<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\UserRepositoryInterface;
//use App\Http\Requests\Api\ArticleRequest;

class UserController extends Controller
{
    public function __construct(UserRepositoryInterface $userRepository){
        $this->userRepository = $userRepository;
    }

    public function all(Request $request){
        $data = $request->all();
        $keyword = $data['filter'] ?? '';
        $searchColumns = ['name', 'email'];
        $order = '';
        $limit = $data['per_page'] ?? 5;
        $page = $data['page'] ?? 1;
        $arr = $this->userRepository->search(null, $keyword, $searchColumns, $order, $limit, $page);
        return response()->json($arr);
    }

    public function find($id){
        return $this->userRepository->find($id);
    }

    public function create(Request $request){
        return $this->userRepository->create($request->all());
    }

    public function update(Request $request){
        return $this->userRepository->update($request, $id);
    }

    public function delete($id){
        return $this->userRepository->delete($id);
    }
}
