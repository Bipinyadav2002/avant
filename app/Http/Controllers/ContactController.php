<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function contactPost(Request $request) 
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

        Mail::send('email.contactus',
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
