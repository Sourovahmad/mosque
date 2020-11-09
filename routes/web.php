<?php

use Illuminate\Support\Facades\Auth;
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
})->name("home");




Route::resource('donations','DonationController');
Route::resource('payments','PaymentController');
Route::resource('about','AboutController');
Route::post('donation-success','DonationController@success')->name('donationSuccess');


Route::get('events','EventController@frontendView')->name('events');
Route::get('events/{id}','EventController@show')->name('event-single');







// setting development
Route::get('/setting','SettingController@index' )->name('setting');
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
