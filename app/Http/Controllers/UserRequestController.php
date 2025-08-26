<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

class UserRequestController extends Controller
{
    public function userRequest($id)
    {   
        $serviceRequest = [

            1 => 'Import LCL Consolidation service rates enquiry',
            2 => 'Import LCL Consolidation service schedule enquiry',
            3 => 'Export LCL Consolidation service rates enquiry',
            4 => 'Export LCL Consolidation service schedules enquiry',
            5 => 'Freight Forwarding rate enquiry',
            6 => 'Contact for Haz Specialist',
            7 => 'Warehousing enquiry for storage tariffs',
            8 => 'Liner Agency Services'
        ];

        if(!isset($serviceRequest[$id]))
            return redirect('/oceanfreight#headingOne');
        
        $subject = $serviceRequest[$id];    
        return view('userrequest', array('subject' => $subject));
    }

    public function userRequestPost(Request $request) 
    {
        $this->validate($request, [ 
            'fname' => 'required|max:20', 
            'lname' => 'required|max:20',
            'email' => 'required|email',
            'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10', 
            'subject' => 'required|max:100',
            'message' => 'required|max:500',
            'g-recaptcha-response' => 'required|captcha', 
        ], [
            'fname.required' => 'Please provide your first name',
            'fname.max' => 'The first name may not be greater than :max characters.',
            'lname.required' => 'Please provide your last name',
            'lname.max' => 'The last name may not be greater than :max characters.',
            'g-recaptcha-response' => 'Please verify that you’re a human'
        ]);
        $subject = $request->get('subject');
        // echo env('MAIL_FROM_ADDRESS') . '  '. env('ADMIN_MAIL') . "  " . env('MAIL_FROM_NAME'); exit;
        Mail::send('email.userrequest',
        array(
            'fname' => $request->get('fname'),
            'lname' => $request->get('lname'),
            'email' => $request->get('email'),
            'mobile' => $request->get('mobile'),
            'subject' => $request->get('subject'),
            'user_message' => $request->get('message')
        ), function($message) use ($subject)
            {
                $message->from('no-reply@avantfreight.in');
                $message->to('cs@avantfreight.in', 'Admin')->subject('Avantfreight.in: ' .$subject);
            });

        return back()->with('success', 'Thanks for contacting us! We will be in touch with you shortly.'); 
    }
}
