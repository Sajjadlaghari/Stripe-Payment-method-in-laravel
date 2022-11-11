<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;



class FaceBookController  extends Controller
{
    /**
     * Login Using Facebook
     */
    // public function loginUsingFacebook()
    // {
    //    return Socialite::driver('facebook')->redirect();
    // }
    // public function fbres()
    // {
    //     $user=Socialite::driver('facebook')->stateless()->user();

    //     echo "<pre>";
    //     print_r($user);

    //     echo "<img src=".$user->avatar." width='200'>";


    // }

    // public function loginUsingGoogle()
    // {
    //    return Socialite::driver('google')->redirect();
    // }
    // public function googleres()
    // {
    //     $user=Socialite::driver('facebook')->stateless()->user();

    //     echo "<pre>";
    //     print_r($user);

    //     echo "<img src=".$user->avatar." width='200'>";


    // }
}
