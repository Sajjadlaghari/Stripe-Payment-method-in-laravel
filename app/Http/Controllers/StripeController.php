<?php

namespace App\Http\Controllers;

use App\Models\Charge;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Stripe;

class StripeController extends Controller
{
   public function Stripe()
   {
       return view('Stripe');
   }

   public function stripePyament(Request $req)
   {
       Stripe\Stripe::setApiKey('Use Your Stripe Secret Here');
       $data = Stripe\Charge::create([
               "amount"=>$req->amount,
               "currency"=>"usd",
               "source"=>$req->stripeToken,
               "description"=>"Test payment from expert rohila 2"
       ]);

       dd($data);



    //    dd('Working');
      //  echo "<pre>"; print_r($data);
       return back();
   }
}
