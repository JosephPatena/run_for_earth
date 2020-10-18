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

Route::get('/', function () {
    return view('index');
});

Route::post('register', 'App\Http\Controllers\RegisterController@register')->name('register');
Route::get('congratulation', 'App\Http\Controllers\ParticipantsController@congratulation')->name('congratulation');
Route::get('participants', 'App\Http\Controllers\ParticipantsController@participants')->name('participants');
