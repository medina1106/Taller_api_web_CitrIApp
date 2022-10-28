<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
/* Socialite */
use Laravel\Socialite\Facades\Socialite;
use Exception;

class FacebookController extends Controller
{
    public function redirectFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callbackFacebook()
    {
        try {
            $facebookUser = Socialite::driver('facebook')->user();
            $findUser = User::where('fb_id', $facebookUser->id)->first();

            if ($findUser) {
                Auth::login($findUser);
                /* return redirect()->intended('Home')->with('iniciar', 'true'); */
                return redirect()->route('Home')->with('iniciar', 'true');
            } else {
                $newUser = User::create([
                    'name' => $facebookUser->name,
                    'email' => $facebookUser->email,
                    'fb_id' => $facebookUser->id,
                    'password' => Hash::make('12345678')
                ]);
                Auth::login($newUser);
 /*                return redirect()->intended('Home')->with('registro', 'true'); */
                return redirect()->route('Home')->with('registro', 'true');
            }
        } catch (Exception $e) {
            /* dd($e->getMessage()); */
            return redirect()->route('Home')->with('registro', 'false');
        }
    }
}
