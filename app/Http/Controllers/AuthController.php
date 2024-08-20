<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

use App\Models\User;
use Spatie\Permission\Models\Role;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        return view('frontend/auth/login');
    }

    public function register(Request $request)
    {
        return view('frontend/auth/register');
    }

    public function forget_password(Request $request)
    {
        return view('frontend/auth/forget_password');
    }

    public function reset_password(Request $request)
    {
        return view('frontend/auth/reset_password');
    }
}
