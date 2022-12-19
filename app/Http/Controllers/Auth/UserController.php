<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(10);
        return view('backend.user.user', compact('users'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('backend.user.edit', compact('user'));
    }

    public function update(Request $req, $id)
    {
        $user = User::find($id);
        
        $req->validate([
            'name' => 'required|min:2|max:20',
            'email' => 'required|email|unique:users,email',
            'password' => 'nullable|min:5|max:30'
            // password spaical character : regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/
        ]);

        $userData= [
            'name' => $req->input('name'),
            'email' => $req->input('email'),
            'password' => Hash::make($req->input('password'))
        ];

        $user->where('id', $id)->update($userData);

        Toastr::success('User Update Successfull', '', ["positionClass" => "toast-bottom-right"]);
        return redirect()->route('admin.user.edit', $user->id);
    }
}
