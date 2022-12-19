<?php

namespace App\Http\Controllers\Backend;

use App\Models\Tag;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Http\Controllers\Controller;

class DashbordController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(8);
        $postCount = Post::count();
        $categoryCount = Category::count();
        $tagCount = Tag::count();
        $userCount = User::count();
        return view('backend.dashbord', compact('posts', 'postCount', 'categoryCount', 'tagCount', 'userCount'));
    }
}
