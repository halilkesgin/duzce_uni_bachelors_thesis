<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Council;


class CouncilController extends Controller
{
    public function show()
    {
        $council_data = Council::get();
        return view('admin.council.show', compact('council_data'));
    }

    public function create()
    {
        return view('admin.council.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'council_fullname' => 'required',
            'council_detail' => 'required',
            'council_mail' => 'required',
        ]);

        $council = new Council();
        $council->council_fullname = $request->council_fullname;
        $council->council_detail = $request->council_detail;
        $council->council_mail = $request->council_mail;
        $council->save();

        return redirect()->route('admin_council_show')->with('success', 'Data is added successfully.');
    }

    public function edit($id)
    {
        $council_data = Council::where('id',$id)->first();
        return view('admin.council.edit', compact('council_data'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'council_fullname' => 'required',
            'council_detail' => 'required',
            'council_mail' => 'required'
        ]);

        $council = Council::where('id',$id)->first();
        $council->council_fullname = $request->council_fullname;
        $council->council_detail = $request->council_detail;
        $council->council_mail = $request->council_mail;
        $council->update();

        return redirect()->route('admin_council_show')->with('success', 'Data is updated successfully.');
    }

    public function delete($id)
    {
        $council = Council::where('id',$id)->first();
        $council->delete();

        return redirect()->route('admin_council_show')->with('success', 'Data is deleted successfully.');

    }
}
