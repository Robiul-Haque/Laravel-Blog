<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function loginIndex()
    {
        return view('auth.login');
    }

    public function login(Request $req)
    {
        $req->validate([
            'email' => 'required|email',
            'password' => 'required|'
        ]);

        $creds = $req->only('email', 'password');
        if (Auth::attempt($creds)) {
            if (Auth::user()->role == 'user') {
                return Redirect()->route('home');
            } elseif (Auth::user()->role == 'admin') {
                return Redirect()->route('admin.dashbord');
            }
        }

        Session::flash('loginErrorMessage', 'Incorrect Email Or Password, Try Again.');
        return redirect()->route('login');
    }
}
