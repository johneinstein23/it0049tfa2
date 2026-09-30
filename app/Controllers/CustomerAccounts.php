<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class CustomerAccounts extends BaseController
{
    public function index()
    {
        $model = new CustomerModel();

        return view('customers/index', [
            'title'     => 'Customer Accounts',
            'customers' => $model->findAll(),
        ]);
    }
}
