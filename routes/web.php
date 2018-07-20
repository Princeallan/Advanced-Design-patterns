<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create.vue something great!
|
*/


Route::get('/checkage', 'HomeController@getName');

Route::get('/', 'BlogController@index');

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

