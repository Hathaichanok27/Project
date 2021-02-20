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

//Superadmin
Route::resource('superadminroombookings', SuperadminroombookingController::class)->middleware('auth')->middleware('is_superadmin');
Route::resource('superadminroommedias', SuperadminroommediaController::class);
Route::resource('manageadmins', ManageadminController::class);
Route::resource('rooms', RoomController::class);

//Admin
Route::resource('adminroombookings', AdminroombookingController::class)->middleware('auth')->middleware('is_admin');
Route::resource('adminroommedias', AdminroommediaController::class);
Route::resource('adminroommediastaffs', AdminroommediastaffController::class);
Route::resource('queuelistmediagroups', QueuelistmediagroupController::class);
Route::resource('queuelistmediasingles', QueuelistmediasingleController::class);
Route::resource('reports', ReportController::class);

//User
//Mediaroom
Route::resource('roombookings', RoombookingController::class);
Route::resource('roommedias', RoommediaController::class);
Route::resource('mediagroups', MediagroupController::class);
Route::resource('mediasingles', MediasingleController::class);
Route::resource('confirmmediagroups', ConfirmmediagroupController::class)->middleware('auth');
Route::resource('confirmmediasingles', ConfirmmediasingleController::class)->middleware('auth');
Route::resource('mybookings', MybookingController::class);
Route::resource('orderbookings', OrderbookingController::class);
Route::resource('detailreserves', DetailreserveController::class);

//Meetingroom
Route::resource('roommeetings', RoommeetingController::class);
Route::resource('reservemeets', ReservemeetController::class);
Route::resource('detailmeetrooms', DetailmeetroomController::class);
