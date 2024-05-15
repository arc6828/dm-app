<?php

use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $posts = json_decode(file_get_contents("https://ckartisan.com/api/medium/feed/ckartisan/tagged/diabetes"))->channel->item;
    $items = json_decode(file_get_contents("https://raw.githubusercontent.com/arc6828/dm-app/main/public/json/youtube.json"))->items;

    return view('home-blog-classic', compact("posts", "items"));
    // return view('home');
    // return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', function () {
        return view("profile");
    })->name('profile.edit');
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


Route::get('/about', function () {
    return view("about");
});
Route::get('/contact', function () {
    return view("contact");
});
Route::get('/knowledge', function () {
    $posts = json_decode(file_get_contents("https://ckartisan.com/api/medium/feed/ckartisan/tagged/diabetes"))->channel->item;

    return view('knowledge', compact("posts"));
});

Route::get('/post/{slug}', function ($slug) {
    $all_posts = json_decode(file_get_contents("https://ckartisan.com/api/medium/feed/ckartisan/tagged/diabetes"))->channel->item;
    // "guid": "https://medium.com/p/8156e4fe87f0",

    $posts = array_filter($all_posts, function ($item) use ($slug) {
        $parts = explode("/", $item->guid);
        $s = end($parts);
        return ($s == $slug);
    });
    $post = end($posts);

    // relates
    $relates = array_filter($all_posts, function ($item) use ($slug) {
        $parts = explode("/", $item->guid);
        $s = end($parts);
        return ($s != $slug);
    });

    return view("post", compact("post", "relates"));
});

Route::get('/watch', function () {
    $items = json_decode(file_get_contents("https://raw.githubusercontent.com/arc6828/dm-app/main/public/json/youtube.json"))->items;

    return view('watch', compact("items"));
});

Route::get('/watch/{slug}', function ($slug) {
    $all_posts = json_decode(file_get_contents("https://raw.githubusercontent.com/arc6828/dm-app/main/public/json/youtube.json"))->items;
    // "guid": "https://medium.com/p/8156e4fe87f0",

    $posts = array_filter($all_posts, function ($item) use ($slug) {
        return ($item->id == $slug);
    });
    $post = end($posts);

    //relates
    $relates = array_filter($all_posts, function ($item) use ($slug) {
        return ($item->id != $slug);
    });

    return view("post-watch", compact("post", "relates"));
});

Route::get('/auth/line/redirect', function () {
    return Socialite::driver('line')->redirect();
});

Route::get('/auth/line/callback', function () {
    $social_user = Socialite::driver('line')->user();

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
