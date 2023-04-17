<?php

namespace App\Http\Controllers;

use App\Mail\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function createForm(Request $request) {
        return view('Contact');
      }

      public function sendEmail(Request $req) {

        $data=[
            'name' => $req->name,
            'email' => $req->email,
            'subject'=> $req->subject,
            'message' => $req->message
         ];
        Mail::to('reveicer@gmail.com')->send(new contact($data));
        return redirect('/Contact')->with('status', 'Message has been sent!');
    }

}
