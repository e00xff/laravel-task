<?php

use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('tasks', 'TaskController');

Route::get('tasks', 'TaskController@index')->name('tasks.index');
Route::get('tasks/{task}', 'TaskController@show')->name('tasks.show');
Route::get('tasks/create', 'TaskController@create')->name('tasks.create');
