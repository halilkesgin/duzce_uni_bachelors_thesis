<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vocational;


class VocationalController extends Controller
{
    public function show()
    {
        $vocational_data = Vocational::orderBy('created_at','asc')->get();;
        return view('admin.voc_list.show', compact('vocational_data'));
    }

    public function create()
    {
        return view('admin.voc_list.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'info' => 'required',
            'dean' => 'required',
            'voc_com' => 'nullable',
            'voc_man' => 'nullable',
            'personal_1' => 'nullable',
            'personal_2' => 'nullable',
            'voc_schema' => 'nullable',
            'mission' => 'nullable',
            'address' => 'nullable',
            'phone' => 'nullable',
            'fax' => 'nullable',
            'email' => 'nullable',
            'map' => 'nullable'
        ]);

        $vocational = new Vocational();
        $vocational->title = $request->title;
        $vocational->info = $request->info;
        $vocational->dean = $request->dean;
        $vocational->voc_com = $request->voc_com;
        $vocational->voc_man = $request->voc_man;
        $vocational->personal_1 = $request->personal_1;
        $vocational->personal_2 = $request->personal_2;
        $vocational->voc_schema = $request->voc_schema;
        $vocational->mission = $request->mission;
        $vocational->address = $request->address;
        $vocational->phone = $request->phone;
        $vocational->fax = $request->fax;
        $vocational->email = $request->email;
        $vocational->map = $request->map;
        $vocational->save();

        return redirect()->route('admin_vocational_show')->with('success', 'Data is added successfully.');
    }

    public function edit($id)
    {
        $vocational_data = Vocational::where('id',$id)->first();
        return view('admin.voc_list.edit', compact('vocational_data'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'title' => 'required',
            'info' => 'required',
            'dean' => 'required',
            'voc_com' => 'nullable',
            'voc_man' => 'nullable',
            'personal_1' => 'nullable',
            'personal_2' => 'nullable',
            'voc_schema' => 'nullable',
            'mission' => 'nullable',
            'address' => 'nullable',
            'phone' => 'nullable',
            'fax' => 'nullable',
            'email' => 'nullable',
            'map' => 'nullable'
        ]);

        $vocational = Vocational::where('id',$id)->first();
        $vocational->title = $request->title;
        $vocational->info = $request->info;
        $vocational->dean = $request->dean;
        $vocational->voc_com = $request->voc_com;
        $vocational->voc_man = $request->voc_man;
        $vocational->personal_1 = $request->personal_1;
        $vocational->personal_2 = $request->personal_2;
        $vocational->voc_schema = $request->voc_schema;
        $vocational->mission = $request->mission;
        $vocational->address = $request->address;
        $vocational->phone = $request->phone;
        $vocational->fax = $request->fax;
        $vocational->email = $request->email;
        $vocational->map = $request->map;
        $vocational->update();

        return redirect()->route('admin_vocational_show')->with('success', 'Data is updated successfully.');
    }

    public function delete($id)
    {
        $vocational = Vocational::where('id',$id)->first();
        $vocational->delete();

        return redirect()->route('admin_vocational_show')->with('success', 'Data is deleted successfully.');

    }
}
