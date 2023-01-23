<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\Language;
use App\Helper\Helpers;

class PhotoController extends Controller
{
    public function index()
    {
        $photos = Photo::paginate(10);
        return view('front.photo_gallery', compact('photos'));
    }
}
