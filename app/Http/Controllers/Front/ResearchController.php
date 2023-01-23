<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ResearchCenter;


class ResearchController extends Controller
{
    public function research()
    {
        $research_data = ResearchCenter::orderBy('created_at', 'desc')->get();
        return view('front.research', compact('research_data'));
    }
}
