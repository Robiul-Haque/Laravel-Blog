<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class ProfileController extends Controller
{
    public function profile()
    {
        $user = auth()->user();
        return view('backend.profile.profile', compact('user'));
    }

    public function update(Request $req)
    {
        $id = auth()->user()->id;

        $req->validate([
            'name' => 'required|max:30',
            'email' => 'required|email',
            // 'password' => 'nullable|min:5|max:30',
            'photo' => 'nullable|image|max:4096',
            'description' => 'nullable|max:80'
        ]);

        $userData = [
            'name' => $req->input('name'),
            'email' => $req->input('email'),
            // 'password' => $req->input('password'),
            'description' => $req->input('description'),
        ];

        $photo = $req->file('photo');
        if ($photo) {
            if (file_exists('asset/uplode/user/'.auth()->user()->photo)) {
                unlink('asset/uplode/user/'.auth()->user()->photo);
            }
            $photoNewName = 'user_'.time().'.'.$photo->getClientOriginalExtension();
            $photo->move('asset/uplode/user/',$photoNewName);
            $userData['photo'] = $photoNewName;
        }

        User::where('id', $id)->update($userData);

        Toastr::success('Profile Update Successfull', '', ["positionClass" => "toast-bottom-right"]);
        return redirect()->route('admin.profile.index');
    }
}
