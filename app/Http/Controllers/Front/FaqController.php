<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Faq;

class FaqController extends Controller
{
    public function index()
    {
        $page_data = Page::first();
        $faq_data = Faq::get();
        return view('front.faq', compact('page_data', 'faq_data'));
    }
}
