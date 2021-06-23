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
    return view('welcome');
});
Route::post('/affiliate/subscribe', function(){
    $email = request('email');
    $name = request('name');

    Newsletter::subscribe($email, ['FNAME'=> $name], 'subscribers');
    Session::flash('subscribed', 'You have successfully subscribed to our newsletter.');
    return redirect()->route('home');
});


Auth::routes();

Route::get('/access/6-figures', 'HomeController@index')->name('home');
