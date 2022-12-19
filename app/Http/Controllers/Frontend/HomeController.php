<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::with('category', 'user')->inRandomOrder()->take(5)->get();
        $firstPosts = $posts->splice(0, 2);
        $middlePosts = $posts->splice(0, 1);
        $middlePost =  $middlePosts->count() > 0 ? $middlePosts[0] : null;
        $lastPosts = $posts->splice(0);
        $recentPosts = Post::with('category', 'user')->latest()->paginate(9);
        $bottomPosts = Post::with('category', 'user')->inRandomOrder()->take(4)->get();
        $bottomPost_1 = $bottomPosts->splice(0, 1);
        $bottomPosts_2 = $bottomPosts->splice(0, 1);
        $bottomPosts_3 = $bottomPosts->splice(0, 2);
        return view('frontend.home', compact('firstPosts', 'middlePost', 'lastPosts', 'recentPosts', 'bottomPost_1', 'bottomPosts_2', 'bottomPosts_3'));
    }
}
