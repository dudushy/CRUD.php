<?php

namespace App\Controllers;

use App\Models\Personal_m;

class Personal extends BaseController
{
    public function index()
    {
        $model = new Personal_m();
        $data = [
                'personal' => $model -> findAll(),
                'document_code' => 'document_code',
        ];
        return view('dasbord', $data);
    }
}
