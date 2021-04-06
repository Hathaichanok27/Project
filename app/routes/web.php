<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FullCalenderController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'HomeController@adminhome')->name('admin.home')->middleware('is_admin');
Route::get('superadmin/home', 'HomeController@superadminHome')->name('superadmin.home')->middleware('is_superadmin');
// Superadmin
Route::resource('superadminroombookings', SuperadminroombookingController::class)->middleware('auth')->middleware('is_superadmin');
Route::resource('superadminroommedias', SuperadminroommediaController::class);
Route::resource('manageadmins', ManageadminController::class);
Route::resource('managerooms', ManageroomController::class);
Route::resource('manageroommedias', ManageroommediaController::class);
Route::resource('rooms', RoomController::class);
Route::resource('roommediagroups', RoommediagroupController::class);
Route::resource('roommediasingles', RoommediasingleController::class);

// Admin
Route::resource('adminroombookings', AdminroombookingController::class)->middleware('auth')->middleware('is_admin');
Route::resource('adminroommedias', AdminroommediaController::class);
Route::resource('adminroommediastaffs', AdminroommediastaffController::class);
Route::resource('queuelistmediagroups', QueuelistmediagroupController::class);
Route::resource('queuelistmediasingles', QueuelistmediasingleController::class);
Route::resource('queuelistmeetings', QueuelistmeetingController::class);
Route::resource('reports', ReportController::class);

// User
Route::resource('users', UserController::class);

// Mediaroom
Route::resource('roombookings', RoombookingController::class);
Route::resource('roommedias', RoommediaController::class);
Route::resource('mediagroups', MediagroupController::class);
Route::resource('mediasingles', MediasingleController::class);
Route::resource('confirmmediagroups', ConfirmmediagroupController::class)->middleware('auth');
Route::resource('confirmmediasingles', ConfirmmediasingleController::class)->middleware('auth');
Route::resource('mybookings', MybookingController::class);

// Meetingroom
Route::resource('roommeetings', RoommeetingController::class);
Route::resource('reservemeets', ReservemeetController::class);
Route::resource('fullcalendar', CalendarController::class);

Route::resource('selectrooms', SelectroomController::class);
Route::resource('selecttimes', SelecttimeController::class);