<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Management;


class AdminManagementController extends Controller
{
    public function rector()
    {
        $management_data = Management::get();
        return view('admin.management_rector', compact('management_data'));
    }

    public function rector_update(Request $request)
    {
        $request->validate([
            'rector_fullname' => 'required',
            'rector_detail' => 'required'
        ]);

        $management = Management::where('id',$request->id)->first();
        $management->rector_fullname = $request->rector_fullname;
        $management->rector_detail = $request->rector_detail;
        $management->update();

        return redirect()->route('admin_management_rector')->with('success', 'Data is updated successfully.');

    }
}
