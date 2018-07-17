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

app()->bind('name',function (){
    return new \App\Allan\Allan;
});
Route::get('/', function () {
    return Allan::getName();
});

Route::get('/index', 'BlogController@index');

Route::resource('blogs', 'BlogController');

Route::get('/send/email', 'HomeController@mail');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile/{id}', 'HomeController@showProfile')->name('profile');

Route::get('/subscribers', function () {
    $data = '';
    return view('mails.subscribers',['message'=> $data]);
});
Route::post('/send', 'EmailController@send');
