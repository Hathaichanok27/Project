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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'HomeController@adminhome')->name('admin.home')->middleware('is_admin');
Route::get('superadmin/home', 'HomeController@superadminHome')->name('superadmin.home')->middleware('is_superadmin');

Route::resource('roombookings', RoombookingController::class);
Route::resource('roommedias', RoommediaController::class);