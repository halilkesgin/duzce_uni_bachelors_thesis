<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\Websitemail;
use App\Models\Page;
use App\Models\Admin;
use App\Models\Setting;

class ContactController extends Controller
{
    public function index()
    {
        $page_data = Page::first();
        $settings_data = Setting::where('id',1)->first();
        return view('front.contact', compact('page_data','settings_data'));
    }

    public function send_email(Request $request)
    {
        Helpers::read_json();

        $validator = \Validator::make($request->all(),[
            'name'=>'required',
            'email' => 'required|email',
            'message' => 'required'
        ],[
            'name.required' => ERROR_NAME_REQUIRED,
            'email.required' => ERROR_EMAIL_REQUIRED,
            'email.email' => ERROR_EMAIL_VALID,
            'message.required' => ERROR_MESSAGE_REQUIRED
        ]);
        if(!$validator->passes())
        {
            return response()->json(['code'=>0,'error_message'=>$validator->errors()->toArray()]);
        }
        else
        {
            // Send email
            $admin_data = Admin::where('id',1)->first();
            $subject = 'Contact Form Email';
            $message = 'Visitor Message Detail:<br>';
            $message .= '<b>Visitor Name: </b>'.$request->name.'<br>';
            $message .= '<b>Visitor Email: </b>'.$request->email.'<br>';
            $message .= '<b>Visitor Message: </b>'.$request->message;
            \Mail::to($admin_data->email)->send(new Websitemail($subject,$message));

            return response()->json(['code'=>1,'success_message'=>SUCCESS_CONTACT]);
        }
    }
}
