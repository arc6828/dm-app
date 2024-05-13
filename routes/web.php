<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
                   
    return view('home-blog-classic', compact("posts","items"));
    // return view('home');
    // return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', function(){
        return view("profile");
    })->name('profile.edit');
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/about', function(){
    return view("about");
});
Route::get('/contact', function(){
    return view("contact");
});
Route::get('/knowledge', function(){
    $posts = json_decode(file_get_contents("https://ckartisan.com/api/medium/feed/ckartisan/tagged/diabetes"))->channel->item;
                   
    return view('knowledge', compact("posts"));
});

Route::get('/post/{slug}', function($slug){
    $all_posts = json_decode(file_get_contents("https://ckartisan.com/api/medium/feed/ckartisan/tagged/diabetes"))->channel->item;
    // "guid": "https://medium.com/p/8156e4fe87f0",

    $posts = array_filter($all_posts, function($item) use ($slug){
        $parts = explode("/",$item->guid);
        $s = end($parts);
        return ($s == $slug);
    });
    $post = end($posts);

    // relates
    $relates = array_filter($all_posts, function($item) use ($slug){
        $parts = explode("/",$item->guid);
        $s = end($parts);
        return ($s != $slug);
    });

    return view("post", compact("post","relates"));
});

Route::get('/watch', function(){
    $items = json_decode(file_get_contents("https://raw.githubusercontent.com/arc6828/dm-app/main/public/json/youtube.json"))->items;
                   
    return view('watch', compact("items"));
});

Route::get('/watch/{slug}', function($slug){
    $all_posts = json_decode(file_get_contents("https://raw.githubusercontent.com/arc6828/dm-app/main/public/json/youtube.json"))->items;
    // "guid": "https://medium.com/p/8156e4fe87f0",

    $posts = array_filter($all_posts, function($item) use ($slug){
        return ($item->id == $slug);
    });
    $post = end($posts);

    //relates
    $relates = array_filter($all_posts, function($item) use ($slug){
        return ($item->id != $slug);
    });

    return view("post-watch", compact("post","relates"));
});