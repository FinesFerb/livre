<?php

namespace App\Http\Controllers;

use App\Service\SocialService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function index()
    {
        return Socialite::driver('vkontakte')->redirect();
    }
    public function callback(): RedirectResponse
    {
        $user = Socialite::driver('vkontakte')->stateless()->user();
        $objSocial = new SocialService();
        if($user = $objSocial->saveSocialData($user)){
            \Auth::login($user);
            return redirect()->route('welcome');
        }
        return back(400);
    }

    public function google()
    {
        return Socialite::driver('google')->redirect();
    }
    public function callbackGoogle(): RedirectResponse
    {
        $user = Socialite::driver('google')->stateless()->user();
        $objSocial = new SocialService();
        if($user = $objSocial->saveSocialData($user)){
            \Auth::login($user);
            return redirect()->route('welcome');
        }
        return back(400);
    }
}
