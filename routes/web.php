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

Auth::routes();

//Route::Verb(URI, Controller@Action)->name(Route Name)
Route::get('/', 'App\Http\Controllers\IndexController@index');
Route::get('/home', 'App\Http\Controllers\HomeController@index');
Route::get('/send-sms-notification', 'App\Http\Controllers\NotificationController@sendSmsNotification');