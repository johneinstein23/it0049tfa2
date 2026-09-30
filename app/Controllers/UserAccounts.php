<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserAccounts extends BaseController
{
    public function index()
    {
        $model = new UserModel();

        return view('users/index', [
            'title' => 'User Accounts',
            'users' => $model->findAll(),
        ]);
    }
}
