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
 

    Route::get('/','DashboardController@index')->name('dashboard');

    Route::resource('/event-category','EventCategoryController');
    Route::resource('/event','EventController');
    Route::resource('/blog-category','BlogCategoryController');
    Route::resource('/blog','BlogController');
    Route::resource('/salat','SalatController');
    Route::resource('/imam','ImamController');
    Route::resource('/designation','DesignationController');
    Route::resource('/committee','CommitteeController');
    Route::resource('/activity','ActivityController');




    Route::post('/committee_position','CommitteeController@position');





