<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;


class NewsController extends Controller
{
    public function show()
    {
        $news_data = News::get();
        return view('admin.news.show', compact('news_data'));
    }

    public function create()
    {
        return view('admin.news.create');
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

        $news = new News();
        $news->title = $request->title;
        $news->detail = $request->detail;
        $news->location = $request->location;
        $news->date = $request->date;
        $news->hour = $request->hour;
        $news->save();

        return redirect()->route('admin_news_show')->with('success', 'Data is added successfully.');
    }

    public function edit($id)
    {
        $news_data = News::where('id',$id)->first();
        return view('admin.news.edit', compact('news_data'));
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

        $news = News::where('id',$id)->first();
        $news->title = $request->title;
        $news->detail = $request->detail;
        $news->location = $request->location;
        $news->date = $request->date;
        $news->hour = $request->hour;
        $news->update();

        return redirect()->route('admin_news_show')->with('success', 'Data is updated successfully.');
    }

    public function delete($id)
    {
        $news = News::where('id',$id)->first();
        $news->delete();

        return redirect()->route('admin_news_show')->with('success', 'Data is deleted successfully.');

    }
}
