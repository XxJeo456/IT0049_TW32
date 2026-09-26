<?php

namespace App\Controllers;
use App\Models\CustomerModel;

class customer extends BaseController
{
    public function customers()
    {
        $model = new CustomerModel();
        $customers = $model->findAll();
        return view('customers', ['customers' => $customers]);
    }
}