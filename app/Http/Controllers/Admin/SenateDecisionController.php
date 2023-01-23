<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SenateDecision;


class SenateDecisionController extends Controller
{
    public function show()
    {
        $senatedecision_data = SenateDecision::get();
        return view('admin.senate_decision.show', compact('senatedecision_data'));
    }

    public function create()
    {
        return view('admin.senate_decision.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'decision_date' => 'required',
            'decision_number' => 'required',
            'decision_no' => 'required',
            'decision_detail' => 'required'
        ]);

        $senatedecision = new SenateDecision();
        $senatedecision->decision_date = $request->decision_date;
        $senatedecision->decision_number = $request->decision_number;
        $senatedecision->decision_no = $request->decision_no;
        $senatedecision->decision_detail = $request->decision_detail;
        $senatedecision->save();

        return redirect()->route('admin_senate_decision_show')->with('success', 'Data is added successfully.');
    }

    public function edit($id)
    {
        $senatedecision_data = SenateDecision::where('id',$id)->first();
        return view('admin.senate_decision.edit', compact('senatedecision_data'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'decision_date' => 'required',
            'decision_number' => 'required',
            'decision_no' => 'required',
            'decision_detail' => 'required'

        ]);

        $senatedecision = SenateDecision::where('id',$id)->first();
        $senatedecision->decision_date = $request->decision_date;
        $senatedecision->decision_number = $request->decision_number;
        $senatedecision->decision_no = $request->decision_no;
        $senatedecision->decision_detail = $request->decision_detail;
        $senatedecision->update();

        return redirect()->route('admin_senate_decision_show')->with('success', 'Data is updated successfully.');
    }

    public function delete($id)
    {
        $senatedecision = SenateDecision::where('id',$id)->first();
        $senatedecision->delete();

        return redirect()->route('admin_senate_decision_show')->with('success', 'Data is deleted successfully.');

    }
}
