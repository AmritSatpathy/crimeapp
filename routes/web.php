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

Route::get('/', 'PagesController@frontpage');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::get('/FAQ', 'PagesController@FAQ');
Route::get('/feedback', 'PagesController@feedback');
Route::get('/location', 'PagesController@location');
Route::post('formo/find', 'FormoController@find');
Route::post('formp/find', 'FormpController@find');
Route::get('session/get','SessionController@accessSessionData');
Route::get('session/set','SessionController@storeSessionData');
Route::get('session/remove','SessionController@deleteSessionData');
Route::resources(['forms'=>'FormsController']);
Route::resources(['formo'=>'FormoController']);
Route::resources(['formp'=>'FormpController']);
Route::resources(['formr'=>'FormrController']);
