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
    return view('welcome');
});

Auth::routes();

///users route
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::post('EditProfile','UserController@EditProfile')->name('EditProfile')->middleware('NormalUser');
Route::get('UploadRez','UserController@UploadRez')->name('UploadRez')->middleware('NormalUser');
Route::post('UploadRezo','UserController@uploadRezo')->name('UploadRezo')->middleware('NormalUser');
Route::get('ShowStatusRez/{id}','UserController@ShowStatusRez')->name('ShowStatusRez')->middleware('NormalUser');
Route::post('SaveMessage/{RezId}','UserController@SaveMessage')->name("SaveMessage")->middleware('NormalUser');

Route::get('UserProfile/{id}','UserController@UserProfile')->name('UserProfile');


///admin routes
Route::get('GetJobs','AdminController@GetJobs')->name('GetJobs')->middleware('Admin');
Route::post('AddJob','AdminController@AddJob')->name('AddJob')->middleware('Admin');
Route::get('ShowReceveRez/{id}','AdminController@ShowReceveRez')->name('ShowReceveRez')->middleware('Admin');
Route::get('openRez/{id}','AdminController@openRez')->name('openRez')->middleware('Admin');
Route::post('OpenORLookChat/{id}','AdminController@OpenORLookChat')->name('OpenORLookChat')->middleware('Admin');
Route::post('SaveMessageAdmin/{RezId}','AdminController@SaveMessageAdmin')->name("SaveMessageAdmin")->middleware('Admin');
Route::post('RejectAndLookChat/{id}','AdminController@RejectAndLookChat')->name('RejectAndLookChat')->middleware('Admin');
Route::post('AcceptAndLookChat/{id}','AdminController@AcceptAndLookChat')->name('AcceptAndLookChat')->middleware('Admin');

