<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
 

Route::group([  'middleware' => 'auth'], function()
{
   

    Route::get('/','DashboardController@index')->name('dashboard');
    Route::get('/post','PostController@index')->name('post');

    Route::resource('/event-category','EventCategoryController');
    Route::resource('/event','EventController');
    Route::resource('/blog-category','BlogCategoryController');
    Route::resource('/blog','BlogController');
    Route::resource('/salat','SalatController');
    Route::resource('/imam','ImamController');
    Route::resource('/designation','DesignationController');
    Route::resource('/committee','CommitteeController');
    Route::resource('/programs','ProgramController');
    Route::resource('/gallery','GalleryController');
    Route::resource('/sessions','SessionController');
    Route::resource('/praying','PrayingTimeController');
    Route::resource('/donations','DonationController');




    Route::resource('/users','UserController')->middleware(['auth','admin']);




    Route::post('/committee_position','CommitteeController@position');
    Route::post('/store-event-category','EventCategoryController@storeCategory');
    Route::post('/store-blog-category','BlogCategoryController@storeCategory');



});


