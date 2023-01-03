<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Brian2694\Toastr\Facades\Toastr;

class ContactController extends Controller
{
   public function showcontact(){
    return view('user.contact');
   }


   public function send(){
    $contact_form =  request()->all();
    Mail::to('diptoguho4@gmail.com')->send(new ContactForm($contact_form));

    Toastr::success('Message Send Successfully!', '', ["positionClass" => "toast-top-right"]);
    return redirect()->back();
   }
}
