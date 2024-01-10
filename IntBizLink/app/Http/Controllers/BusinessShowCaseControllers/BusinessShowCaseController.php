<?php

namespace App\Http\Controllers\BusinessShowCaseControllers;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BusinessShowCaseController extends Controller
{
    public function homePage(){
        return view('BusinessShowCase.home');
    }
    public function contactPage(){
        return view('BusinessShowCase.contact');
    }
    public function contactFormSubmit(Request $request){
        $request->validate(
            [
                'name'=>'required',
                'email'=>'required | email',
                'subject'=>'required',
                'message'=>'required'
            ]
            );

            $mailData=$request->all();
            Mail::to('mianwalicodehouse@gmail.com')->send(new ContactMail('Contact Visitor',$mailData));
            Mail::to($request->email)->send(new ContactMail('Message Recieved','Visitor'));
        echo 'sent successfully';
        // return view('BusinessShowCase.contact')->with(['msg'=>'sent succssfully']);
    }
    public function clientLoginPage(){
        return view('BusinessShowCase.login');
    }
}
