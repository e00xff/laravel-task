<?php

Route::get('/', function () {
    return view('welcome');
});

Route::resource('tasks', 'TaskController');

Route::get('tasks/{task}/completed', 'TaskController@completed');
Route::get('tasks/{task}/uncompleted', 'TaskController@uncompleted');
