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
    return redirect('/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::middleware(['auth','admin'])->group(function (){

    Route::resource('subject','classsms\SubjectClassController');

    Route::get('/subject-assign','classsms\SubjectClassController@assign')->name('subject.assign');

    Route::resource('classes','classsms\StudentClassController');

    Route::get('/classes-assign','classsms\StudentClassController@assign')->name('classes.assign');

    Route::resource('student','student\StudentController');

});
