<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;


class EventController extends Controller
{
    public function show()
    {
        $event_data = Event::get();
        return view('admin.event.show', compact('event_data'));
    }

    public function create()
    {
        return view('admin.event.create');
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

        $event = new Event();
        $event->title = $request->title;
        $event->detail = $request->detail;
        $event->location = $request->location;
        $event->date = $request->date;
        $event->hour = $request->hour;
        $event->save();

        return redirect()->route('admin_event_show')->with('success', 'Data is added successfully.');
    }

    public function edit($id)
    {
        $event_data = Event::where('id',$id)->first();
        return view('admin.event.edit', compact('event_data'));
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

        $event = Event::where('id',$id)->first();
        $event->title = $request->title;
        $event->detail = $request->detail;
        $event->location = $request->location;
        $event->date = $request->date;
        $event->hour = $request->hour;
        $event->update();

        return redirect()->route('admin_event_show')->with('success', 'Data is updated successfully.');
    }

    public function delete($id)
    {
        $event = Event::where('id',$id)->first();
        $event->delete();

        return redirect()->route('admin_event_show')->with('success', 'Data is deleted successfully.');

    }
}
