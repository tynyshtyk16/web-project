<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
class MailController extends Controller
{
    function index()
    {
     return view('contact');
    }
    function send(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);
 
        $data = array(
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request-> message
        );

        Mail::to($request->email)->send(new SendMail($data));

        // return back()->with('success', 'Thanks for contacting us!');
    //
}
}
