<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Senate;


class SenateController extends Controller
{
    public function show()
    {
        $senate_data = Senate::get();
        return view('admin.senate.show', compact('senate_data'));
    }

    public function create()
    {
        return view('admin.senate.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'senate_fullname' => 'required',
            'senate_detail' => 'required',
            'senate_mail' => 'required'
        ]);

        $senate = new Senate();
        $senate->senate_fullname = $request->senate_fullname;
        $senate->senate_detail = $request->senate_detail;
        $senate->senate_mail = $request->senate_mail;
        $senate->save();

        return redirect()->route('admin_senate_show')->with('success', 'Data is added successfully.');
    }

    public function edit($id)
    {
        $senate_data = Senate::where('id',$id)->first();
        return view('admin.senate.edit', compact('senate_data'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'senate_fullname' => 'required',
            'senate_detail' => 'required',
            'senate_mail' => 'required'
        ]);

        $senate = Senate::where('id',$id)->first();
        $senate->senate_fullname = $request->senate_fullname;
        $senate->senate_detail = $request->senate_detail;
        $senate->senate_mail = $request->senate_mail;
        $senate->update();

        return redirect()->route('admin_senate_show')->with('success', 'Data is updated successfully.');
    }

    public function delete($id)
    {
        $senate = Senate::where('id',$id)->first();
        $senate->delete();

        return redirect()->route('admin_senate_show')->with('success', 'Data is deleted successfully.');

    }
}
