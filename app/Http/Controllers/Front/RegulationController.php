<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SenateDecision;

class RegulationController extends Controller
{
    public function senatedecision()
    {
        $decision_data = SenateDecision::orderBy('created_at', 'desc')->get();
        return view('front.senatedecision', compact('decision_data'));
    }

    public function senatedecision_show($id)
    {
        $decision_data = SenateDecision::where('id',$id)->first();
        return view('front.senatedecision_show', compact('decision_data'));
    }

    public function plan()
    {
        return view('front.plan');
    }

    public function quality_policy()
    {
        return view('front.quality_policy');
    }

}
