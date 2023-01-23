<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;


class SliderController extends Controller
{
    public function show()
    {
        $sliders = Slider::get();
        return view('admin.slider.show', compact('sliders'));
    }

    public function create()
    {
        return view('admin.slider.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slider' => 'required|image|mimes:jpg,jpeg,png,gif'
        ]);

        $now = time();
        $ext = $request->file('slider')->extension();
        $final_name = 'slider_'.$now.'.'.$ext;
        $request->file('slider')->move(public_path('uploads/'),$final_name);

        $slider = new Slider();
        $slider->slider = $final_name;
        $slider->title = $request->title;
        $slider->save();

        return redirect()->route('admin_slider_show')->with('success', 'Data is added successfully.');
    }

    public function edit($id)
    {
        $slider_data = Slider::where('id',$id)->first();
        return view('admin.slider.edit', compact('slider_data'));
    }

    public function update(Request $request,$id)
    {
        $slider_data = Slider::where('id',$id)->first();

        if($request->hasFile('slider')) {
            $request->validate([
                'slider' => 'image|mimes:jpg,jpeg,png,gif'
            ]);

            unlink(public_path('uploads/'.$slider_data->slider));

            $now = time();
            $ext = $request->file('slider')->extension();
            $final_name = 'slider_'.$now.'.'.$ext;
            $request->file('slider')->move(public_path('uploads/'),$final_name);

            $slider_data->slider = $final_name;
        }

        $slider_data->title = $request->title;
        $slider_data->update();

        return redirect()->route('admin_slider_show')->with('success', 'Data is updated successfully.');
    }

    public function delete($id)
    {
        $slider_data = Slider::where('id',$id)->first();
        unlink(public_path('uploads/'.$slider_data->slider));
        $slider_data->delete();

        return redirect()->route('admin_slider_show')->with('success', 'Data is deleted successfully.');

    }
}
