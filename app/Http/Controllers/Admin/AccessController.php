<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Access;


class AccessController extends Controller
{
    public function show()
    {
        $access_data = Access::get();
        return view('admin.access.show', compact('access_data'));
    }

    public function create()
    {
        return view('admin.access.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'access_title' => 'required',
            'access_icon' => 'required',
            'access_link' => 'required'
        ]);

        $access = new Access();
        $access->access_title = $request->access_title;
        $access->access_icon = $request->access_icon;
        $access->access_link = $request->access_link;
        $access->save();

        return redirect()->route('admin_access_show')->with('success', 'Data is added successfully.');
    }

    public function edit($id)
    {
        $access_data = Access::where('id',$id)->first();
        return view('admin.access.edit', compact('access_data'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'access_title' => 'required',
            'access_icon' => 'required',
            'access_link' => 'required'
        ]);

        $access = Access::where('id',$id)->first();
        $access->access_title = $request->access_title;
        $access->access_icon = $request->access_icon;
        $access->access_link = $request->access_link;
        $access->update();

        return redirect()->route('admin_access_show')->with('success', 'Data is updated successfully.');
    }

    public function delete($id)
    {
        $access = Access::where('id',$id)->first();
        $access->delete();

        return redirect()->route('admin_access_show')->with('success', 'Data is deleted successfully.');

    }
}
