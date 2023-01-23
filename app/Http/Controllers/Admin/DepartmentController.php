<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faculty;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function show()
    {
        $department_data = Department::with('rFaculty')->orderBy('created_at','asc')->get();
        return view('admin.department.show', compact('department_data'));
    }

    public function create()
    {
        $faculty = Faculty::orderBy('created_at','asc')->get();
        return view('admin.department.create', compact('faculty'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'info' => 'required',
            'head_1' => 'required',
            'head_2' => 'required',
            'dep_com' => 'required',
            'dep_schema' => 'nullable',
            'address' => 'nullable',
            'phone' => 'nullable',
            'fax' => 'nullable',
            'email' => 'nullable',
        ]);

        $department = new Department();
        $department->title = $request->title;
        $department->info = $request->info;
        $department->head_1 = $request->head_1;
        $department->head_2 = $request->head_2;
        $department->dep_com = $request->dep_com;
        $department->dep_schema = $request->dep_schema;
        $department->mission = $request->mission;
        $department->address = $request->address;
        $department->phone = $request->phone;
        $department->fax = $request->fax;
        $department->email = $request->email;
        $department->faculty_id = $request->faculty_id;
        $department->save();

        return redirect()->route('admin_department_show')->with('success', 'Data is added successfully.');
    }

    public function edit($id)
    {
        $faculty = Faculty::orderBy('created_at','asc')->get();
        $department_single = Department::where('id',$id)->first();
        return view('admin.department.edit', compact('faculty','department_single'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'info' => 'required',
            'head_1' => 'required',
            'head_2' => 'required',
            'dep_com' => 'required',
            'dep_schema' => 'nullable',
            'address' => 'nullable',
            'phone' => 'nullable',
            'fax' => 'nullable',
            'email' => 'nullable',
        ]);

        $department = Department::where('id',$id)->first();
        $department->title = $request->title;
        $department->info = $request->info;
        $department->head_1 = $request->head_1;
        $department->head_2 = $request->head_2;
        $department->dep_com = $request->dep_com;
        $department->dep_schema = $request->dep_schema;
        $department->mission = $request->mission;
        $department->address = $request->address;
        $department->phone = $request->phone;
        $department->fax = $request->fax;
        $department->email = $request->email;
        $department->faculty_id = $request->faculty_id;
        $department->update();

        return redirect()->route('admin_department_show')->with('success', 'Data is updated successfully.');
    }

    public function delete($id)
    {
        $department_single = Department::where('id',$id)->first();
        $department_single->delete();

        return redirect()->route('admin_department_show')->with('success', 'Data is deleted successfully.');
    }
}
