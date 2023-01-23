<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faculty;

class FacultyController extends Controller
{
    public function show()
    {
        $faculty_data = Faculty::orderBy('created_at','asc')->get();;
        return view('admin.faculty.show', compact('faculty_data'));
    }

    public function create()
    {
        return view('admin.faculty.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'info' => 'required',
            'dean' => 'required',
            'fac_com' => 'nullable',
            'fac_man' => 'nullable',
            'fac_desc1' => 'nullable',
            'fac_desc2' => 'nullable',
            'personal_1' => 'nullable',
            'personal_2' => 'nullable',
            'fac_schema' => 'nullable',
            'mission' => 'nullable',
            'address' => 'nullable',
            'phone' => 'nullable',
            'fax' => 'nullable',
            'email' => 'nullable',
            'map' => 'nullable'
        ]);

        $faculty = new Faculty();
        $faculty->title = $request->title;
        $faculty->info = $request->info;
        $faculty->dean = $request->dean;
        $faculty->fac_com = $request->fac_com;
        $faculty->fac_man = $request->fac_man;
        $faculty->fac_desc1 = $request->fac_desc1;
        $faculty->fac_desc2 = $request->fac_desc2;
        $faculty->personal_1 = $request->personal_1;
        $faculty->personal_2 = $request->personal_2;
        $faculty->fac_schema = $request->fac_schema;
        $faculty->mission = $request->mission;
        $faculty->address = $request->address;
        $faculty->phone = $request->phone;
        $faculty->fax = $request->fax;
        $faculty->email = $request->email;
        $faculty->map = $request->map;
        $faculty->save();

        return redirect()->route('admin_faculty_show')->with('success', 'Data is added successfully.');
    }

    public function edit($id)
    {
        $faculty_data = Faculty::where('id',$id)->first();
        return view('admin.faculty.edit', compact('faculty_data'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'title' => 'required',
            'info' => 'required',
            'dean' => 'required',
            'fac_com' => 'nullable',
            'fac_man' => 'nullable',
            'fac_desc1' => 'nullable',
            'fac_desc2' => 'nullable',
            'personal_1' => 'nullable',
            'personal_2' => 'nullable',
            'fac_schema' => 'nullable',
            'mission' => 'nullable',
            'address' => 'nullable',
            'phone' => 'nullable',
            'fax' => 'nullable',
            'email' => 'nullable',
            'map' => 'nullable'
        ]);

        $faculty = Faculty::where('id',$id)->first();
        $faculty->title = $request->title;
        $faculty->info = $request->info;
        $faculty->dean = $request->dean;
        $faculty->fac_com = $request->fac_com;
        $faculty->fac_man = $request->fac_man;
        $faculty->fac_desc1 = $request->fac_desc1;
        $faculty->fac_desc2 = $request->fac_desc2;
        $faculty->personal_1 = $request->personal_1;
        $faculty->personal_2 = $request->personal_2;
        $faculty->fac_schema = $request->fac_schema;
        $faculty->mission = $request->mission;
        $faculty->address = $request->address;
        $faculty->phone = $request->phone;
        $faculty->fax = $request->fax;
        $faculty->email = $request->email;
        $faculty->map = $request->map;
        $faculty->update();

        return redirect()->route('admin_faculty_show')->with('success', 'Data is updated successfully.');
    }

    public function delete($id)
    {
        $faculty = Faculty::where('id',$id)->first();
        $faculty->delete();

        return redirect()->route('admin_faculty_show')->with('success', 'Data is deleted successfully.');

    }
}
