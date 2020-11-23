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




Route::get('/','IndexController@index')->name('home');





Route::get('donations','PaymentController@donationIndex')->name('donations');
Route::get('checkout','PaymentController@checkData')->name('checkout');

Route::resource('payments','PaymentController');
Route::resource('about','AboutController');

Route::post('donation-success','DonationController@success')->name('donationSuccess');
Route::post('donation-success/{user}','DonationController@success')->name('donationSuccess');

Route::get('events','EventController@frontendView')->name('events');
Route::get('events/{id}','EventController@singleview')->name('event-single');

Route::get('programs','ProgramController@FrontendProgram')->name('programs');
Route::get('program-single/{id}','ProgramController@programSingle')->name('program-single');
Route::get('program-category/{category_id}','ProgramController@FrontendProgramCategory')->name('program-category');

Route::get('blogs','BlogController@frontendView')->name('blogs');
Route::get('blog/{id}','BlogController@singleview')->name('blog-singleview');

Route::get('mmc-members','CommitteeController@frontendView')->name('mmc-members');




Route::get('mmc-members','CommitteeController@frontendView')->name('mmc-members');
Route::get('mmc-members/{type_id}','CommitteeController@frontendViewTwo')->name('mmc-type');
Route::get('executive','CommitteeController@executive')->name('executive');



Route::get('gallery','GalleryController@showImage')->name('gallery');
Route::get('praying-time','SalatController@prayingtime')->name('praying-time');



// setting development
Route::resource('/setting','SettingController');
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


Route::get('/test-mail','test@index')->name('test');







