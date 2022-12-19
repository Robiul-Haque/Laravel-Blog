<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $setting = User::first();
        return view('frontend.contact', compact('setting'));
    }

    public function store(Request $req)
    {
        $req->validate([
            'name' => 'required|min:3|max:30',
            'email' => 'required|email',
            'subject' => 'min:4|max:50',
            'message' => 'required|min:4|max:80'
        ]);

        $inputData = [
            'name' => $req->input('name'),
            'email' => $req->input('email'),
            'subject' => $req->input('subject'),
            'message' => $req->input('message')
        ];

        Contact::create($inputData);

        Toastr::success('Message Send Successfull', '', ["positionClass" => "toast-bottom-right"]);
        return redirect()->route('contact');
    }
}
