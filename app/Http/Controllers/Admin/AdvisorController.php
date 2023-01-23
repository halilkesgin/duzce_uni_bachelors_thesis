<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Advisor;

class AdvisorController extends Controller
{
    public function show()
    {
        $advisor_data = Advisor::get();
        return view('admin.advisor.show', compact('advisor_data'));
    }

    public function create()
    {
        return view('admin.advisor.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'advisor_fullname' => 'required',
            'advisor_detail' => 'required',
            'advisor_mail' => 'required'
        ]);

        $advisor = new Advisor();
        $advisor->advisor_fullname = $request->advisor_fullname;
        $advisor->advisor_detail = $request->advisor_detail;
        $advisor->advisor_mail = $request->advisor_mail;
        $advisor->save();

        return redirect()->route('admin_advisor_show')->with('success', 'Data is added successfully.');
    }

    public function edit($id)
    {
        $advisor_data = Advisor::where('id',$id)->first();
        return view('admin.advisor.edit', compact('advisor_data'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'advisor_fullname' => 'required',
            'advisor_detail' => 'required',
            'advisor_mail' => 'required'
        ]);

        $advisor = Advisor::where('id',$id)->first();
        $advisor->advisor_fullname = $request->advisor_fullname;
        $advisor->advisor_detail = $request->advisor_detail;
        $advisor->advisor_mail = $request->advisor_mail;
        $advisor->update();

        return redirect()->route('admin_advisor_show')->with('success', 'Data is updated successfully.');
    }

    public function delete($id)
    {
        $advisor = Advisor::where('id',$id)->first();
        $advisor->delete();

        return redirect()->route('admin_advisor_show')->with('success', 'Data is deleted successfully.');

    }
}
