<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// AUTH
Auth::routes([
    'register' => false,
    'reset' => false
]);

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

// USERS
Route::get('/users','App\Http\Controllers\UserController@index')->middleware('auth');
Route::get('/user/{id}','App\Http\Controllers\UserController@show')->middleware('auth');