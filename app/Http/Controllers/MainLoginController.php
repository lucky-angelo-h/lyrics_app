<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth\LoginController;

class MainLoginController extends LoginController
{
    public function index()
    {
        return view('home');
    }
}
