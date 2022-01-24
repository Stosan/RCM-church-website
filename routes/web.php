<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/about-us', function () {
    return view('about');
});

Route::get('/articles', [\App\Http\Controllers\BlogPostController::class, 'index']);

Route::get('/articles/{blogPost}', [\App\Http\Controllers\BlogPostController::class, 'show']);

Route::get('/streaming', function () {
    return view('live');
});

Route::get('/audio-messages', [\App\Http\Controllers\AudioController::class, 'index']);

Route::get('/giving', function () {
    return view('giving');
});
Route::get('/events', function () {
    return view('events');
});
Route::get('/register', function () {
    return view('reg');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/who', function () {
    $url = 'https://sam-ayo.herokuapp.com';
    return Redirect::to($url);
});
Route::get('/admin', function () {
    return view('admin/login');
});
Route::get('/admin/blog', function () {
    return view('admin-blog');
});
Route::get('/admin/create-blogpost', function () {
    return view('crblog');
});

//Admin goes below here
/*
Route::get('/blog/create/post, [\App\Http\Controllers\BlogPostController::class, "create"]);
Route::post('/blog/create/post, [\App\Http\Controllers\BlogPostController::class, 'store']); //saves the created post to the databse
Route::get('/blog/{blogPost}/edit', [\App\Http\Controllers\BlogPostController::class, 'edit']); //shows edit post form
Route::put('/blog/{blogPost}/edit', [\App\Http\Controllers\BlogPostController::class, 'update']); //commits edited post to the database 
Route::delete('/blog/{blogPost}', [\App\Http\Controllers\BlogPostController::class, 'destroy']); //deletes post from the database
*/
