<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vocational;
use App\Models\VocDepartment;
use App\Models\VocPost;
use DB;

class VocPostController extends Controller
{
    public function show()
    {
        $posts = VocPost::with('rDepartment.rVocational')->get();
        return view('admin.voc_post.show', compact('posts'));
    }

    public function create()
    {
        $department = VocDepartment::with('rVocational')->get();
        return view('admin.voc_post.create', compact('department'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'post_title' => 'required',
            'post_detail' => 'required',
            'post_photo' => 'required|image|mimes:jpg,jpeg,png,gif'
        ]);

        $q = DB::select("SHOW TABLE STATUS LIKE 'vocposts'");

        $now = time();
        $ext = $request->file('post_photo')->extension();
        $final_name = 'post_photo_'.$now.'.'.$ext;
        $request->file('post_photo')->move(public_path('uploads/'),$final_name);

        $post = new VocPost();
        $post->department_id = $request->department_id;
        $post->post_title = $request->post_title;
        $post->post_detail = $request->post_detail;
        $post->post_photo = $final_name;
        $post->save();

        return redirect()->route('admin_voc_post_show')->with('success', 'Data is added successfully.');
    }

    public function edit($id)
    {
        $test = VocPost::where('id',$id)->count();
        if(!$test) {
            return redirect()->route('admin_home');
        }

        $department = VocDepartment::with('rVocational')->get();
        $post_single = VocPost::where('id',$id)->first();
        return view('admin.voc_post.edit', compact('post_single','department'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'post_title' => 'required',
            'post_detail' => 'required'
        ]);

        $post = VocPost::where('id',$id)->first();

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

        return redirect()->route('admin_voc_post_show')->with('success', 'Data is updated successfully.');
    }

    public function delete($id)
    {
        $test = VocPost::where('id',$id)->count();
        if(!$test) {
            return redirect()->route('admin_home');
        }

        $post = VocPost::where('id',$id)->first();
        unlink(public_path('uploads/'.$post->post_photo));
        $post->delete();

        return redirect()->route('admin_voc_post_show')->with('success', 'Data is deleted successfully.');
    }
}
