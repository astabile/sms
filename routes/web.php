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
Route::get('/', 'App\Http\Controllers\IndexController@index')->name('index.index');;
Route::get('/send-sms-notification', 'App\Http\Controllers\NotificationController@sendSmsNotification')->name('notification.send');

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');;