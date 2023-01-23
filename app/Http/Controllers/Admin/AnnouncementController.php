<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Announcement;


class AnnouncementController extends Controller
{
    public function show()
    {
        $announcement_data = Announcement::get();
        return view('admin.announcement.show', compact('announcement_data'));
    }

    public function create()
    {
        return view('admin.announcement.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'detail' => 'required',
            'location' => 'required',
            'date' => 'required',
            'hour' => 'required'
        ]);

        $announcement = new Announcement();
        $announcement->title = $request->title;
        $announcement->detail = $request->detail;
        $announcement->location = $request->location;
        $announcement->date = $request->date;
        $announcement->hour = $request->hour;
        $announcement->save();

        return redirect()->route('admin_announcement_show')->with('success', 'Data is added successfully.');
    }

    public function edit($id)
    {
        $announcement_data = Announcement::where('id',$id)->first();
        return view('admin.announcement.edit', compact('announcement_data'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'title' => 'required',
            'detail' => 'required',
            'location' => 'required',
            'date' => 'required',
            'hour' => 'required'

        ]);

        $announcement = Announcement::where('id',$id)->first();
        $announcement->title = $request->title;
        $announcement->detail = $request->detail;
        $announcement->location = $request->location;
        $announcement->date = $request->date;
        $announcement->hour = $request->hour;
        $announcement->update();

        return redirect()->route('admin_announcement_show')->with('success', 'Data is updated successfully.');
    }

    public function delete($id)
    {
        $announcement = Announcement::where('id',$id)->first();
        $announcement->delete();

        return redirect()->route('admin_announcement_show')->with('success', 'Data is deleted successfully.');

    }
}
