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
    return view('home');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function () {
    Route::resource('users', 'User\UserController')->only('show', 'update');
    // ->middleware('selfaccount');
    Route::resource('courses', 'User\CourseController');
    Route::get('courses/{id}/lectures/{lectureId}', 'User\LectureController@show');
});

Route::post('districts', 'User\DistrictController@getAllRecord');
Route::post('communes', 'User\CommuneController@getAllRecord');