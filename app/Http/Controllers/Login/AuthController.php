<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function __construct()
    {
    }

    public function showLogin()
    {
        session(['link' => url()->previous()]);
        return view('login');
    }

    public function showhome()
    {
        session(['link' => url()->previous()]);
        return view('admin.home');
    }
}
