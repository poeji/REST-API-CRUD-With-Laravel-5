<?php

use Illuminate\Http\Request;

Route::post('auth/register', 'AuthController@register');
Route::post('auth/login', 'AuthController@login');
Route::get('users', 'UserController@users');
Route::get('users/{id}', 'UserController@profileById')->middleware('auth:api');
//Route::get('users/profile', 'UserController@profile')->middleware('auth:api');
Route::post('post', 'PostController@add')->middleware('auth:api');
Route::put('post/{post}', 'PostController@update')->middleware('auth:api');
Route::delete('post/{post}', 'PostController@delete')->middleware('auth:api');