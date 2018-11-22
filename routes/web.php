<?php

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
    $medium = resolve('medium-php-sdk');
    dd($medium);
    return view('welcome');
});


// Route::get('custom', function() {
//     dd(config('app.developers'));
// });

// Route::get('custom', function() {
//     dd(config('blog.administrators'));
// });

// Route::get('custom', function() {
//     dd(env('APP_CREATOR'));
// });

Route::get('custom', function() {
    dd(config('blog.creator'));
});
Auth::routes();

// Route::get('/register', function(){
//     return 'register user';
// });

Route::get('/home', 'HomeController@index')->name('home');
