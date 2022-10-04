<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'My Profile',
            'title1' => 'User Management',
        ];
        return view('user/user', $data);
    }
}
