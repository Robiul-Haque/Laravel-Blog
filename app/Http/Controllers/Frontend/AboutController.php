<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;

class AboutController extends Controller
{
    public function index()
    {
        $userInfo = User::first();
        return view('frontend.about', compact('userInfo'));
    }
}
