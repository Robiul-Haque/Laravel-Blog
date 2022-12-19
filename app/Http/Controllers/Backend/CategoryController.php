<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->paginate(10);
        return view('backend.category.category', compact('categories'));
    }

    public function create()
    {
        return view('backend.category.create');
    }

    public function store(Request $req)
    {
        $req->validate([
            'name' => 'required|min:2|max:30|unique:categories,name',
            'description' => 'max:50'
        ]);

        $categoryData = [
            'name' => $req->input('name'),
            'slug' => Str::slug($req->input('name', '-')),
            'description' => $req->input('description')
        ];

        Category::create($categoryData);
        
        Toastr::success('Category Create Successfull', '', ["positionClass" => "toast-bottom-right"]);
        return redirect()->route('admin.category.create');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('backend.category.edit', compact('category'));
    }

    public function update(Request $req, $id)
    {
        $req->validate([
            'name' => 'required|min:2|max:30|unique:categories,name',
            'description' => 'max:50'
        ]);

        $categoryData = [
            'name' => $req->input('name'),
            'slug' => Str::slug($req->input('name', '-')),
            'description' => $req->input('description')
        ];

        Category::where('id', $id)->update($categoryData);
        
        Toastr::success('Category Update Successfull', '', ["positionClass" => "toast-bottom-right"]);
        return redirect()->route('admin.category.index');
    }

    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();

        Toastr::success('Category Delete Successfull', '', ["positionClass" => "toast-bottom-right"]);
        return redirect()->route('admin.category.index');
    }
}
