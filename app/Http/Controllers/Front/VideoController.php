<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Language;
use App\Helper\Helpers;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::paginate(8);
        return view('front.video_gallery', compact('videos'));
    }
}
