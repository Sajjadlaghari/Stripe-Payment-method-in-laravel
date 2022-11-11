<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {
   public function basic_email() {

   
      Mail::raw('Forgot password OTP 1234',function($message) {
         $message->to('sajjadlaghari723@gmail.com', 'Test Laravel')->subject
            ('Laravel Basic Testing Mail');
         $message->from('sajjadlaghari723@gmail.com','Sajjad Ali');
      });
      echo "Basic Email Sent. Check your inbox.";
   }
  
}