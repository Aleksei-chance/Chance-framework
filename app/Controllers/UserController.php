<?php

namespace App\Controllers;

class UserController extends BaseController
{
    public function registration()
    {
        return view('user/registration', ['title' => 'Registration page']);
    }

    public function login()
    {
        return view('user/login', ['title' => 'Login page']);
    }
}
