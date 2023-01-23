<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function index()
    {
        $setting_data = Setting::where('id',1)->first();
        return view('admin.setting', compact('setting_data'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slogan' => 'required',
            'phone_1' => 'required',
            'fax_1' => 'required',
            'adress' => 'required',
            'email' => 'required'
        ]);

        $setting = Setting::where('id',1)->first();
        $setting->title = $request->title;
        $setting->slogan = $request->slogan;
        $setting->phone_1 = $request->phone_1;
        $setting->phone_2 = $request->phone_2;
        $setting->fax_1 = $request->fax_1;
        $setting->fax_2 = $request->fax_2;
        $setting->adress = $request->adress;
        $setting->email = $request->email;
        $setting->facebook = $request->facebook;
        $setting->instagram = $request->instagram;
        $setting->twitter = $request->twitter;
        $setting->linkedin = $request->linkedin;
        $setting->map_google = $request->map_google;
        $setting->map_lat = $request->map_lat;
        $setting->map_long = $request->map_long;
        $setting->site_tag_line = $request->site_tag_line;
        $setting->site_meta_tags = $request->site_meta_tags;
        $setting->site_meta_description = $request->site_meta_description;
        $setting->copyright = $request->copyright;


        if($request->hasFile('logo')) {
            $request->validate([
                'logo' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/'.$setting->logo));
            $ext = $request->file('logo')->extension();
            $final_name = 'logo'.'.'.$ext;
            $request->file('logo')->move(public_path('uploads/'),$final_name);
            $setting->logo = $final_name;
        }

        if($request->hasFile('favicon')) {
            $request->validate([
                'favicon' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/'.$setting->favicon));
            $ext = $request->file('favicon')->extension();
            $final_name = 'favicon'.'.'.$ext;
            $request->file('favicon')->move(public_path('uploads/'),$final_name);
            $setting->favicon = $final_name;
        }


        $setting->title = $request->title;
        $setting->slogan = $request->slogan;
        $setting->phone_1 = $request->phone_1;
        $setting->phone_2 = $request->phone_2;
        $setting->fax_1 = $request->fax_1;
        $setting->fax_2 = $request->fax_2;
        $setting->adress = $request->adress;
        $setting->email = $request->email;
        $setting->facebook = $request->facebook;
        $setting->instagram = $request->instagram;
        $setting->twitter = $request->twitter;
        $setting->linkedin = $request->linkedin;
        $setting->map_google = $request->map_google;
        $setting->map_lat = $request->map_lat;
        $setting->map_long = $request->map_long;
        $setting->site_tag_line = $request->site_tag_line;
        $setting->site_meta_tags = $request->site_meta_tags;
        $setting->site_meta_description = $request->site_meta_description;
        $setting->copyright = $request->copyright;
        $setting->update();

        return redirect()->route('admin_setting')->with('success', 'Data is updated successfully.');
    }
}
