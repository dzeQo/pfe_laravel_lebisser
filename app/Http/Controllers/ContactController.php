<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
class ContactController extends Controller
{
    public function index(){
        return view('contact-us');
    }

    public function sendMail(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
            'subject'=>'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);
        $data =[
           'name'=>$request->name,
           'email'=>$request->email,
           'subject'=>$request->subject,
           'message'=>$request->message
       ];

        $messages = new Contact;
        $messages->name=$request->name;
        $messages->email=$request->email;
        $messages->subject=$request->subject;
        $messages->message=$request->message;
        $messages->save();

       Mail::to('fssmmag@gmail.com')->send(new ContactMail($data));
        return back()->with('success' , 'votre message a bien envoyé');
    }


    public function messages(){
        $messages = Contact::all();
        return view('backend.messages.index'  , ['messages' =>$messages]);
    }

    public function show($id){
        $msgs = Contact::find($id);
        return view('backend.messages.show' , ['msgs' =>$msgs] );
    }
    
}
