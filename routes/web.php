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

// Route::view('grade1','user.dashboard.exam.grading');

Route::view('user', 'user.dashboard.exam.home')->name('user');
Route::resource('grade','GradeController');
//Route::get('PinSearch/{$pincode}', 'PinSearchController@fetchState')->name('fetchState');