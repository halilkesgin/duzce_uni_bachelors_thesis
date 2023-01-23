<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Post;
use App\Models\SubCategory;
use App\Models\Video;
use App\Models\Access;
use App\Models\Announcement;
use App\Models\Department;
use App\Models\Photo;
use App\Models\Faculty;
use App\Models\News;
use App\Models\Vocational;
use App\Models\VocDepartment;
use App\Models\FacultyPost;
use App\Models\Event;
use App\Models\Category;
use App\Models\Slider;
use App\Helper\Helpers;

class HomeController extends Controller
{
    public function index()
    {

        $video_data = Video::get();
        $access_data = Access::all();
        $slider_data = Slider::all();
        $setting_data = Setting::where('id',1)->first();
        $photo_data = Photo::all();
        $event_data = Event::query()->take(6)->orderBy('created_at', 'desc')->get();
        $news_data = News::query()->take(6)->orderBy('created_at', 'desc')->get();
        $announcement_data = Announcement::query()->take(6)->orderBy('created_at', 'desc')->get();
        $department_data = Department::with('rFacultyPost')->orderBy('created_at','asc')->get();
        $faculty_data = Faculty::orderBy('created_at','asc')->get();
        $total_faculty = Faculty::count();
        $total_department = Department::count();
        $total_vocational = Vocational::count();
        $total_program = VocDepartment::count();


        return view('front.home', compact(
            'access_data',
            'total_faculty',
            'total_department',
            'total_vocational',
            'total_program',
            'setting_data',
            'event_data',
            'announcement_data',
            'photo_data',
            'news_data',
            'slider_data',
            'department_data',
            'video_data',
            'faculty_data'
        ));


    }
}
