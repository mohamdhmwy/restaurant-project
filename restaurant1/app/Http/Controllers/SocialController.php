<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $finduser = User::where('social_id', $user->id)->first();
            if ($finduser) {

                Auth::login($finduser);
                return redirect('/')->with('success' , 'Successfully Login');
            } else {
                $newuser = new User();
                $newuser->name = $user->name;
                $newuser->email = $user->email;
                $newuser->social_id = $user->id;
                $newuser->social_type = 'google';
                $newuser->image = 'google';
                $newuser->is_admin = '0';
                $newuser->password = Hash::make($user->password);
                $newuser->save();

                Auth::login($newuser);
                return redirect()->route('user')->with('success' , 'successfully login');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
    public function redirectToFacebook()
    {
        return Socialite::driver('Facebook')->redirect();
    }
    public function handleFacebookCallback()
    {
        try {
            $user = Socialite::driver('Facebook')->user();
            $finduser = User::where('social_id', $user->id)->first();
            if ($finduser) {

                Auth::login($finduser);
                return redirect('/')->with('success' , 'Successfully Login With Google');
            } else {
                $newuser = new User();
                $newuser->name = $user->name;
                $newuser->email = $user->email;
                $newuser->social_id = $user->id;
                $newuser->social_type = 'Facebook';
                $newuser->image = 'Facebook';
                $newuser->is_admin = '0';
                $newuser->password = Hash::make($user->password);
                $newuser->save();

                Auth::login($newuser);
                return redirect()->route('user')->with('success' , 'Successfully Login With Facebook');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}








