<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth\RegisterController;

class MainRegisterController extends RegisterController
{
    protected $register;

    public function __construct() {
        $this->register = new RegisterController;
    }

    public function register(Request $data) {
        var_dump($data);
    }
}
