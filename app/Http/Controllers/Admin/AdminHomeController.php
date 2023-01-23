<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faculty;
use App\Models\Department;
use App\Models\News;
use App\Models\ResearchCenter;
use App\Models\Announcement;
use App\Models\Event;
use App\Models\Slider;
use App\Models\Photo;
use App\Models\Video;
use App\Models\Faq;

class AdminHomeController extends Controller
{
    public function index()
    {
        $total_faculty = Faculty::count();
        $total_department = Department::count();
        $total_news = News::count();
        $total_research = ResearchCenter::count();
        $total_announcement = Announcement::count();
        $total_event = Event::count();
        $total_slider = Slider::count();
        $total_photo = Photo::count();
        $total_video = Video::count();
        $total_faq = Faq::count();

        return view('admin.home', compact(
            'total_faculty',
            'total_department',
            'total_news',
            'total_research',
            'total_announcement',
            'total_event',
            'total_slider',
            'total_photo',
            'total_video',
            'total_faq',
        ));
    }
}
