<?php

namespace App\Http\Controllers;

use Auth;

use Illuminate\Http\Request;
use Socialite;


use App\Http\Requests;

class SocialAuthController extends Controller
{
    public function  redirect() {
        return Socialite::driver('facebook')->redirect();

    }

    public function  callback() {

    }
}
