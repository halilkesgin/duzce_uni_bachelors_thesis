<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FacultyPost;
use App\Models\Faculty;
use App\Models\Department;
use DB;

class FacultyPostController extends Controller
{
    public function show()
    {
        $posts = FacultyPost::with('rDepartment.rFaculty')->get();
        return view('admin.facpost.show', compact('posts'));
    }

    public function create()
    {
        $department = Department::with('rFaculty')->get();
        return view('admin.facpost.create', compact('department'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'post_title' => 'required',
            'post_detail' => 'required',
            'post_photo' => 'required|image|mimes:jpg,jpeg,png,gif'
        ]);

        $q = DB::select("SHOW TABLE STATUS LIKE 'facposts'");

        $now = time();
        $ext = $request->file('post_photo')->extension();
        $final_name = 'post_photo_'.$now.'.'.$ext;
        $request->file('post_photo')->move(public_path('uploads/'),$final_name);

        $post = new FacultyPost();
        $post->department_id = $request->department_id;
        $post->post_title = $request->post_title;
        $post->post_detail = $request->post_detail;
        $post->post_photo = $final_name;
        $post->save();

        return redirect()->route('admin_facpost_show')->with('success', 'Data is added successfully.');
    }

    public function edit($id)
    {
        $test = FacultyPost::where('id',$id)->count();
        if(!$test) {
            return redirect()->route('admin_home');
        }

        $department = Department::with('rFaculty')->get();
        $post_single = FacultyPost::where('id',$id)->first();
        return view('admin.facpost.edit', compact('post_single','department'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'post_title' => 'required',
            'post_detail' => 'required'
        ]);

        $post = FacultyPost::where('id',$id)->first();

        if($request->hasFile('post_photo')) {
            $request->validate([
                'post_photo' => 'image|mimes:jpg,jpeg,png,gif'
            ]);

            unlink(public_path('uploads/'.$post->post_photo));

            $now = time();
            $ext = $request->file('post_photo')->extension();
            $final_name = 'post_photo_'.$now.'.'.$ext;
            $request->file('post_photo')->move(public_path('uploads/'),$final_name);

            $post->post_photo = $final_name;
        }

        $post->department_id = $request->department_id;
        $post->post_title = $request->post_title;
        $post->post_detail = $request->post_detail;
        $post->update();

        return redirect()->route('admin_facpost_show')->with('success', 'Data is updated successfully.');
    }

    public function delete($id)
    {
        $test = FacultyPost::where('id',$id)->count();
        if(!$test) {
            return redirect()->route('admin_home');
        }

        $post = FacultyPost::where('id',$id)->first();
        unlink(public_path('uploads/'.$post->post_photo));
        $post->delete();

        return redirect()->route('admin_facpost_show')->with('success', 'Data is deleted successfully.');
    }
}
