<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function registerIndex()
    {
        return view('auth.register');
    }

    public function register(Request $req)
    {
        $req->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'photo' => 'required|image|max:4096',
            'password' => 'required|confirmed|min:5|max:30',
            'password_confirmation' => 'required'
        ]);

        $photo = $req->file('photo');
        $newName = 'user_' . time() . '.' . $photo->getClientOriginalExtension();
        $photo->move('asset/uplode/user/', $newName);

        $registerData = [
            'name' => $req->input('name'),
            'email' => $req->input('email'),
            'photo' => $newName,
            'password' => Hash::make('12345')
        ];

        User::create($registerData);
        
        Toastr::success('Register Create Successfull', 'Success', ["positionClass" => "toast-bottom-right"]);
        return redirect()->route('login');
    }
}
