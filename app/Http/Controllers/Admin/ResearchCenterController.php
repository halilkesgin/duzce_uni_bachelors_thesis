<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ResearchCenter;


class ResearchCenterController extends Controller
{
    public function show()
    {
        $researchcenter_data = ResearchCenter::get();
        return view('admin.researchcenter.show', compact('researchcenter_data'));
    }

    public function create()
    {
        return view('admin.researchcenter.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'short' => 'required',
            'link' => 'required'
        ]);

        $researchcenter = new ResearchCenter();
        $researchcenter->title = $request->title;
        $researchcenter->short = $request->short;
        $researchcenter->link = $request->link;
        $researchcenter->save();

        return redirect()->route('admin_researchcenter_show')->with('success', 'Data is added successfully.');
    }

    public function edit($id)
    {
        $researchcenter_data = ResearchCenter::where('id',$id)->first();
        return view('admin.researchcenter.edit', compact('researchcenter_data'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'title' => 'required',
            'short' => 'required',
            'link' => 'required'
        ]);

        $researchcenter = ResearchCenter::where('id',$id)->first();
        $researchcenter->title = $request->title;
        $researchcenter->link = $request->link;
        $researchcenter->short = $request->short;
        $researchcenter->update();

        return redirect()->route('admin_researchcenter_show')->with('success', 'Data is updated successfully.');
    }

    public function delete($id)
    {
        $researchcenter = ResearchCenter::where('id',$id)->first();
        $researchcenter->delete();

        return redirect()->route('admin_researchcenter_show')->with('success', 'Data is deleted successfully.');

    }
}
