<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vocational;
use App\Models\VocDepartment;

class VocDepartmentController extends Controller
{
    public function show()
    {
        $department_data = VocDepartment::with('rVocational')->orderBy('created_at','asc')->get();
        return view('admin.voc_department.show', compact('department_data'));
    }

    public function create()
    {
        $vocational = Vocational::orderBy('created_at','asc')->get();
        return view('admin.voc_department.create', compact('vocational'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'info' => 'required',
            'head_1' => 'required',
            'head_2' => 'required',
            'address' => 'nullable',
            'phone' => 'nullable',
            'fax' => 'nullable',
            'email' => 'nullable',
        ]);

        $department = new VocDepartment();
        $department->title = $request->title;
        $department->info = $request->info;
        $department->head_1 = $request->head_1;
        $department->head_2 = $request->head_2;
        $department->address = $request->address;
        $department->phone = $request->phone;
        $department->fax = $request->fax;
        $department->email = $request->email;
        $department->vocational_id = $request->vocational_id;
        $department->save();

        return redirect()->route('admin_voc_department_show')->with('success', 'Data is added successfully.');
    }

    public function edit($id)
    {
        $vocational = Vocational::orderBy('created_at','asc')->get();
        $department_single = VocDepartment::where('id',$id)->first();
        return view('admin.voc_department.edit', compact('vocational','department_single'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'info' => 'required',
            'head_1' => 'required',
            'head_2' => 'required',
            'address' => 'nullable',
            'phone' => 'nullable',
            'fax' => 'nullable',
            'email' => 'nullable',
        ]);

        $department = VocDepartment::where('id',$id)->first();
        $department->title = $request->title;
        $department->info = $request->info;
        $department->head_1 = $request->head_1;
        $department->head_2 = $request->head_2;
        $department->address = $request->address;
        $department->phone = $request->phone;
        $department->fax = $request->fax;
        $department->email = $request->email;
        $department->vocational_id = $request->vocational_id;
        $department->update();

        return redirect()->route('admin_voc_department_show')->with('success', 'Data is updated successfully.');
    }

    public function delete($id)
    {
        $department_single = VocDepartment::where('id',$id)->first();
        $department_single->delete();

        return redirect()->route('admin_voc_department_show')->with('success', 'Data is deleted successfully.');
    }
}
