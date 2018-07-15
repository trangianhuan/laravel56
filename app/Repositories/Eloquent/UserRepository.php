<?php
namespace App\Repositories\Eloquent;

use App\Repositories\Eloquent\Repository;
use App\Repositories\Contracts\UserRepositoryInterface;
use Illuminate\Container\Container as App;
use App\Models\User;

class UserRepository extends Repository implements UserRepositoryInterface{

    function model()
    {
        return User::class;
    }

    function initFields(){
        $this->roles = [
            'name' => 'required',
            'content' => 'required',
        ];
        $this->messages = [];
    }
}