<?php

namespace App\Controllers;

class HomeController
{
    public function index(): string
    {
        return view('home', ['title' => 'Home page']);
    }
}
