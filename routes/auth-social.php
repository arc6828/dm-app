<?php

use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;
use Laravel\Socialite\Two\InvalidStateException;


Route::get('/auth/line/redirect', function () {
    return Socialite::driver('line')->redirect();
});

Route::get('/auth/line/callback', function () {
    
    try {
        // $socialite = Socialite::driver($provider)->user();
        $social_user = Socialite::driver('line')->user();
    } catch (InvalidStateException $e) {        
        // $socialite = Socialite::driver($provider)->stateless()->user();
        $social_user = Socialite::driver('line')->stateless()->user();
    }

    // $user->token
    $user = User::updateOrCreate([
        'provider_id' => $social_user->id,
    ], [
        'name' => $social_user->name,
        'email' => isset($social_user->email) ? $social_user->email : $social_user->id,
        'avatar' => $social_user->avatar,
        'password' => Str::password(16, true, true, false, false),
        // 'github_token' => $social_user->token,
        // 'github_refresh_token' => $social_user->refreshToken,
    ]);

    Auth::login($user);

    return redirect('/dashboard');
});