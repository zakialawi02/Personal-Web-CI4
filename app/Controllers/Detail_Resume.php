<?php

namespace App\Controllers;

class Detail_Resume extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Detai Resume || Zaki Personal Website',
        ];
        return view('DetailResume', $data);
    }
}
