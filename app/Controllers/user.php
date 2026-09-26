<?php

namespace App\Controllers;
use App\Models\UserModel;

class user extends BaseController
{
    public function Users()
    {
        $model = new UserModel();
        $users = $model->findAll();
        return view('users', ['users' => $users]);
    }
}