<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get('/', 'App\Http\Controllers\GroupController@index');

Route::get('/groups', 'App\Http\Controllers\GroupController@index');

Route::get('/groups/create', 'App\Http\Controllers\GroupController@create');

Route::post('/groups', 'App\Http\Controllers\GroupController@store');

Route::get(
    '/groups/{group}', 
    'App\Http\Controllers\GroupController@show'
)->name('group-one');

Route::get(
    '/groups/{group}/students/create', 
    'App\Http\Controllers\StudentController@create',
)->name('student-create');

Route::post('/groups/{group}/students', 'App\Http\Controllers\StudentController@store');

Route::get(
    '/groups/{group}/students/{student}', 
    'App\Http\Controllers\StudentController@show'
)->name('student-one');

