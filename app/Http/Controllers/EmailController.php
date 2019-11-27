<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect,Response,DB,Config;
use Mail;
use App\Mail\MailNotify;
use App\User;
use App\Customer;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
      //$user = User::all();
        //dd($request);
        $email = $request->email;

      Mail::to($email)->send(new MailNotify());
 
      /*if (Mail::failures()) {
           return response()->Fail('Sorry! Please try again latter');
      }else{
           return response()->success('Great! Successfully send in your mail');
         }*/
    }
}
