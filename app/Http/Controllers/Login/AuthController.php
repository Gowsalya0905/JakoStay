<?php

namespace App\Http\Controllers\Login;

use Log;


use Exception;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\PasswordOTPEmail;
use Illuminate\Support\Carbon;
use App\Mail\PasswordResetEmail;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\RateLimiter;

use Illuminate\Support\Facades\Cookie;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Session\Session as SessionSession;

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


}
