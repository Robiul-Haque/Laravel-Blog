<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index(string $slug)
    {
        $singlePost = Post::where('slug', $slug)->with('category', 'user')->first();
        $recentPosts = Post::limit(6)->inRandomOrder()->get();
        $categories = Category::all();
        $tags = Tag::all();
        $bottomPosts = Post::with('category', 'user')->inRandomOrder()->take(4)->get();
        $bottomPost_1 = $bottomPosts->splice(0, 1);
        $bottomPosts_2 = $bottomPosts->splice(0, 1);
        $bottomPosts_3 = $bottomPosts->splice(0, 2);
        return view('frontend.post', compact('singlePost', 'recentPosts', 'categories', 'tags', 'bottomPost_1', 'bottomPosts_2', 'bottomPosts_3'));
    }
    
    public function getPostByCategory($categoryId)
    {
        $posts = Post::where('category_id', $categoryId)->paginate(12);
        return view('frontend.category-post', compact('posts'));
    }
}
