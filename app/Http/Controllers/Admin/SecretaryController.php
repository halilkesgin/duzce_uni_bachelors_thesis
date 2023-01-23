<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Secretary;


class SecretaryController extends Controller
{
    public function show()
    {
        $secretary_data = Secretary::get();
        return view('admin.secretary.show', compact('secretary_data'));
    }

    public function create()
    {
        return view('admin.secretary.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'secretary_fullname' => 'required',
            'secretary_detail' => 'required',
            'secretary_mail' => 'required'
        ]);

        $secretary = new Secretary();
        $secretary->secretary_fullname = $request->secretary_fullname;
        $secretary->secretary_detail = $request->secretary_detail;
        $secretary->secretary_mail = $request->secretary_mail;
        $secretary->save();

        return redirect()->route('admin_secretary_show')->with('success', 'Data is added successfully.');
    }

    public function edit($id)
    {
        $secretary_data = Secretary::where('id',$id)->first();
        return view('admin.secretary.edit', compact('secretary_data'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'secretary_fullname' => 'required',
            'secretary_detail' => 'required',
            'secretary_mail' => 'required'

        ]);

        $secretary = Secretary::where('id',$id)->first();
        $secretary->secretary_fullname = $request->secretary_fullname;
        $secretary->secretary_detail = $request->secretary_detail;
        $secretary->secretary_mail = $request->secretary_mail;
        $secretary->update();

        return redirect()->route('admin_secretary_show')->with('success', 'Data is updated successfully.');
    }

    public function delete($id)
    {
        $secretary = Secretary::where('id',$id)->first();
        $secretary->delete();

        return redirect()->route('admin_secretary_show')->with('success', 'Data is deleted successfully.');

    }
}
