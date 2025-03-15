<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login'); // Akan merender file resources/views/login.blade.php
    }
}
