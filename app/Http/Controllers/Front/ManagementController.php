<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Management;
use App\Models\Advisor;
use App\Models\Secretary;
use App\Models\Senate;
use App\Models\Council;

class ManagementController extends Controller
{
    public function rector()
    {
        $rector_data = Management::where('id',1)->first();
        return view('front.rector', compact('rector_data'));
    }

    public function advisor() // rektör yardımcısı
    {
        $advisor_data = Advisor::orderBy('created_at', 'desc')->get();
        return view('front.advisor', compact('advisor_data'));
    }

    public function secretary() // genel sekreter
    {
        $secretary_data = Secretary::orderBy('created_at', 'desc')->get();
        return view('front.secretary', compact('secretary_data'));
    }

    public function senate() // senato
    {
        $senate_data = Senate::orderBy('created_at', 'desc')->get();
        return view('front.senate', compact('senate_data'));
    }

    public function council() // yönetim kurulu
    {
        $council_data = Council::orderBy('created_at', 'desc')->get();
        return view('front.council', compact('council_data'));
    }

}
