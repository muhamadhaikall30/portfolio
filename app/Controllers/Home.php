<?php

namespace App\Controllers;

use App\Models\MyModel;

class Home extends BaseController
{
    public function index()
    {
        $model = new MyModel();
        $data['friends'] = $model->findAll();
        return view('index', $data);
    }
}