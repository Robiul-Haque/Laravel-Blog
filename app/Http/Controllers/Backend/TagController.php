<?php

namespace App\Http\Controllers\Backend;

use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::latest()->paginate(10);
        return view('backend.tag.tag', compact('tags'));
    }

    public function create()
    {
        return view('backend.tag.create');
    }

    public function store(Request $req)
    {
        $req->validate([
            'name' => 'required|min:2|max:30|unique:tags,name',
            'description' => 'max:50'
        ]);

        $tagData = [
            'name' => $req->input('name'),
            'slug' => Str::slug($req->input('name', '-')),
            'description' => $req->input('description')
        ];

        Tag::create($tagData);

        Toastr::success('Tag Create Successfull', '', ["positionClass" => "toast-bottom-right"]);
        return redirect()->route('admin.tag.create');
    }

    public function edit($id)
    {
        $tag = Tag::find($id);
        return view('backend.tag.edit', compact('tag'));
    }

    public function update(Request $req, $id)
    {
        $req->validate([
            'name' => 'required|min:2|max:30|unique:tags,name',
            'description' => 'max:50'
        ]);

        $tagData = [
            'name' => $req->input('name'),
            'slug' => Str::slug($req->input('name', '-')),
            'description' => $req->input('description')
        ];

        Tag::where('id', $id)->update($tagData);

        Toastr::success('Tag Update Successfull', '', ["positionClass" => "toast-bottom-right"]);
        return redirect()->route('admin.tag.index');
    }

    public function delete($id)
    {
        $tag = Tag::find($id);
        $tag->delete();

        Toastr::success('Tag Delete Successfull', '', ["positionClass" => "toast-bottom-right"]);
        return redirect()->route('admin.tag.index');
    }
}
