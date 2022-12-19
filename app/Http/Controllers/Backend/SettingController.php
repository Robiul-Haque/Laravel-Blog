<?php

namespace App\Http\Controllers\Backend;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class SettingController extends Controller
{
    public function index()
    {
        $siteInfo = Setting::first();
        return view('backend.setting.setting', compact('siteInfo'));
    }

    public function create()
    {
        return view('backend.setting.create');
    }

    public function store(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'copyright' => 'required',
            'logo' => 'required|image|max:4096',
            'description' => 'required'
        ]);
        
        $photo = $req->file('logo');
        $newName = 'logo_'.time().'.'.$photo->getClientOriginalExtension();
        $photo->move('asset/uplode/logo',$newName);

        $inputData = [
            'name' => $req->input('name'),
            'facebook' => $req->input('facebook'),
            'twitter' => $req->input('twitter'),
            'instagram' => $req->input('instagram'),
            'copyright' => $req->input('copyright'),
            'logo' => $newName,
            'description' => $req->input('description'),
        ];

        Setting::create($inputData);

        Toastr::success('Site Information Create Successfull', '', ["positionClass" => "toast-bottom-right"]);
        return redirect()->route('admin.setting.create');
    }

    // public function edit()
    // {
    //     $siteInfo = Setting::first();
    //     return view('backend.setting.edit', compact('siteInfo'));
    // }

    // public function update(Request $req, $id)
    // {
    //     Setting::find($id);

    //     $req->validate([
    //         'name' => 'required',
    //         'copyright' => 'required',
    //         'logo' => 'required|image|max:4096',
    //         'description' => 'required'
    //     ]);

    //     $inputData = [
    //         'name' => $req->input('name'),
    //         'facebook' => $req->input('facebook'),
    //         'twitter' => $req->input('twitter'),
    //         'instagram' => $req->input('instagram'),
    //         'copyright' => $req->input('copyright'),
    //         'logo' => $req->input('logo'),
    //         'description' => $req->input('description')
    //     ];

    //     Setting::updated($inputData);

    //     Toastr::success('Setting Information Create Successfull', '', ["positionClass" => "toast-bottom-right"]);
    //     return redirect()->route('admin.setting.edit');
    // }

    public function delete($id)
    {
        $setting = setting::find($id);

        if(file_exists('asset/uplode/logo/'. $setting->logo)) {
            unlink('asset/uplode/logo/'. $setting->logo);
        }

        $setting->delete();

        Toastr::success('Setting Information Delete Successfull', '', ["positionClass" => "toast-bottom-right"]);
        return redirect()->route('admin.setting.index');
    }
}
