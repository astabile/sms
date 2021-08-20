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

use App\Http\Controllers\BotManController;

Auth::routes();

//Route::Verb(URI, Controller@Action)->name(Route Name)
Route::get('/', 'App\Http\Controllers\IndexController@index')->name('index.index');
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::match(['get', 'post'], 'botman', [BotManController::class, 'handle']);

Route::get('/send', 'App\Http\Controllers\NotificationController@send')->name('notification.send');
Route::get('/receive', 'App\Http\Controllers\NotificationController@receive')->name('notification.receive');