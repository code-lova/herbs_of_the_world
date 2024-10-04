<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialLoginController extends Controller
{
    public function toProvider($driver){
        return Socialite::driver($driver)->redirect();
    }

    public function handleCallBack($driver){

    }
}
