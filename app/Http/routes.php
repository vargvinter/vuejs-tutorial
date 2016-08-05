<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('02', 'StaticController@lesson02');
Route::get('03', 'StaticController@lesson03');
Route::post('03', 'StaticController@lesson03_post');
Route::get('04', 'StaticController@lesson04');
Route::get('05', 'StaticController@lesson05');
Route::get('06', 'StaticController@lesson06');
Route::get('07', 'StaticController@lesson07');
Route::get('08', 'StaticController@lesson08');
Route::get('09', 'StaticController@lesson09');
Route::get('10', function() {
    $tasks = App\Task::latest()->get();

    return view('10', compact('tasks'));
});
Route::get('10a', function() {
    return view('10a');
});
Route::get('11', 'StaticController@lesson11');
Route::get('12', 'StaticController@lesson12');
Route::get('13', 'StaticController@lesson13');
Route::get('14', 'StaticController@lesson14');
Route::get('15', 'StaticController@lesson15');


Route::get('/', function () {
    return view('welcome');
});

Route::get('api/tasks', function() {
   return App\Task::latest()->get();
});
