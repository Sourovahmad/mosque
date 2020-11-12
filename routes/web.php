<?php

use App\event;
use Carbon\Carbon;
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

    $date = Carbon::now()->format('T-m-d');
    $events = event::where('date','>=',$date)->take(6)->get();

    return view('index',compact('events'));
})->name("home");




Route::resource('donations','DonationController');
Route::resource('payments','PaymentController');
Route::resource('about','AboutController');
Route::post('donation-success','DonationController@success')->name('donationSuccess');


Route::get('events','EventController@frontendView')->name('events');
Route::get('events/{id}','EventController@singleview')->name('event-single');

Route::get('/members',function(){
    return view('blog');
})->name('blog');

Route::get('/blog',function(){
    return view('blog');
})->name('blog');






// setting development
Route::get('/setting','SettingController@index' )->name('setting');
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');



//  Gallery Section
Route::get('gallery','GalleryController@showImage')->name('gallery');
