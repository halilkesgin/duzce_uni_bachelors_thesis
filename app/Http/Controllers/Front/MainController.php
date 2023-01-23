<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Announcement;
use App\Models\Faculty;
use App\Models\Department;
use App\Models\Vocational;
use App\Models\VocDepartment;
use App\Models\VocPost;
use App\Models\FacultyPost;
use App\Models\News;

class MainController extends Controller
{
    public function event()
    {
        $event_data = Event::orderBy('created_at', 'desc')->get();
        return view('front.event', compact('event_data'));
    }

    public function event_show($id)
    {
        $event_data = Event::where('id',$id)->first();
        $other_data = Event::query()->take(5)->inRandomOrder()->orderBy('created_at', 'desc')->get();
        return view('front.event_show', compact('event_data','other_data'));
    }

    public function news()
    {
        $news_data = News::orderBy('created_at', 'desc')->get();
        return view('front.news', compact('news_data'));
    }

    public function news_show($id)
    {
        $news_data = News::where('id',$id)->first();
        $other_data = News::query()->take(5)->inRandomOrder()->orderBy('created_at', 'desc')->get();
        return view('front.news_show', compact('news_data','other_data'));
    }

    public function announcement()
    {
        $announcement_data = Announcement::orderBy('created_at', 'desc')->get();
        return view('front.announcement', compact('announcement_data'));
    }

    public function announcement_show($id)
    {
        $announcement_data = Announcement::where('id',$id)->first();
        $other_data = Announcement::query()->take(5)->inRandomOrder()->orderBy('created_at', 'desc')->get();
        return view('front.announcement_show', compact('announcement_data','other_data'));
    }

    public function faculty(){
        $faculty_data = Faculty::orderBy('created_at', 'desc')->get();
        return view('front.faculty', compact('faculty_data'));
    }

    public function faculty_show($id)
    {
        $faculty_data = Faculty::where('id',$id)->first();
        $department_data = Department::where('faculty_id',$id)->orderBy('created_at', 'desc')->get();
        $post_data = FacultyPost::with('rDepartment')->orderBy('id','desc')->get();
        return view('front.faculty_show', compact('faculty_data','department_data','post_data'));
    }

    public function department()
    {
        $department_data = Department::orderBy('created_at', 'desc')->get();
        return view('front.department', compact('department_data'));
    }

    public function department_show($id)
    {
        $department_data = Department::where('id',$id)->first();
        $faculty_data = Faculty::where('id',$id)->first();
        $post_data = FacultyPost::with('rDepartment')->where('id',$id)->orderBy('id','desc')->get();
        return view('front.department_show', compact('department_data','post_data','faculty_data'));
    }

    public function vocational(){
        $vocational_data = Vocational::orderBy('created_at', 'desc')->get();
        return view('front.vocational', compact('vocational_data'));
    }

    public function vocational_show($id)
    {
        $vocational_data = Vocational::where('id',$id)->first();
        $department_data = VocDepartment::where('vocational_id',$id)->orderBy('created_at', 'desc')->get();
        $post_data = VocPost::with('rDepartment')->orderBy('id','desc')->get();
        return view('front.vocational_show', compact('vocational_data','department_data','post_data'));
    }

    public function voc_department()
    {
        $department_data = VocDepartment::orderBy('created_at', 'desc')->get();
        return view('front.voc_department', compact('department_data'));
    }

    public function voc_department_show($id)
    {
        $department_data = VocDepartment::where('id',$id)->first();
        $vocational_data = Vocational::where('id',$id)->first();
        $post_data = VocPost::with('rDepartment')->where('id',$id)->orderBy('id','desc')->get();
        return view('front.voc_department_show', compact('department_data','post_data','vocational_data'));
    }



}
