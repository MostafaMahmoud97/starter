<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function redirect($servece){
        return Socialite::driver($servece)->redirect();
    }

    public function callback($servece){
        $user =  Socialite::driver($servece)->user();

        $data = [];

        $data['id'] = $user->getId();
        $data['avtare'] = $user->getAvatar();
        $data['Email'] = $user->getEmail();
        $data['Name'] = $user->getName();
        $data['NickName'] = $user->getNickname();

        return $data;
    }

}
