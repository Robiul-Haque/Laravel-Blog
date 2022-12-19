<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tag;
use Brian2694\Toastr\Facades\Toastr;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('backend.post.post', compact('posts'));
    }

    public function create()
    {
        $tags = Tag::all();
        $categories = Category::all();
        return view('backend.post.create', compact('categories', 'tags'));
    }

    public function store(Request $req)
    {
        $req->validate([
            'title' => 'required|unique:posts,title',
            'category' => 'required',
            'description' => 'required',
            'photo' => 'required|image|max:4096'
        ]);

        $photo = $req->file('photo');
        $photoNewName = 'post_' . time() . '.' . $photo->getClientOriginalExtension();
        $photo->move('asset/uplode/post', $photoNewName);

        $postData = [
            'user_id' => auth()->user()->id,
            'category_id' => $req->input('category'),
            'title' => $req->input('title'),
            'slug' => Str::slug($req->input('title')),
            'photo' => $photoNewName,
            'description' => $req->input('description'),
            'published_at' => Carbon::now()
        ];

        $post = Post::create($postData);
        $post->tag()->attach($req->tag);

        Toastr::success('Post Create Successfull', '', ["positionClass" => "toast-bottom-right"]);
        return redirect()->route('admin.post.create');
    }

    public function view($id)
    {
        $post = Post::find($id);
        return view('backend.post.view', compact('post'));
    }

    public function edit($id)
    {
        $category = Category::find($id);
        $tags = Tag::all();
        $post = Post::find($id);
        return view('backend.post.edit', compact('post', 'category', 'tags'));
    }

    public function update(Request $req, $id)
    {
        $post = Post::find($id);
        $req->validate([
            'title' => 'required|unique:posts,title',
            'category' => 'required',
            'description' => 'required',
            'photo' => 'image|max:4096'
        ]);

        $postData = [
            'user_id' => auth()->user()->id,
            'category_id' => $req->input('category'),
            'title' => $req->input('title'),
            'slug' => Str::slug($req->input('title')),
            'description' => $req->input('description'),
            'published_at' => Carbon::now()
        ];

        // $post->tag->sync($req->input('tag[]'));
        $photo = $req->file('photo');
        if ($photo) {
            if (file_exists('asset/uplode/post/' . $post->photo)) {
                unlink('asset/uplode/post/' . $post->photo);
                $photoNewName = 'post_' . time() . '.' . $photo->getClientOriginalExtension();
                $photo->move('asset/uplode/post', $photoNewName);
                $postData['photo'] = $photoNewName;
            }
        }

        $post->where('id', $id)->update($postData);

        Toastr::success('Post Update Successfull', '', ["positionClass" => "toast-bottom-right"]);
        return redirect()->route('admin.post.edit', $id);
    }

    public function delete($id)
    {
        $post = Post::find($id);
        if (file_exists('asset/uplode/post/'. $post->photo)) {
            unlink('asset/uplode/post/'.$post->photo);
        }
        $post->delete();
        
        Toastr::success('Post Delete Successfull', '', ["positionClass" => "toast-bottom-right"]);
        return redirect()->back();
    }
}
