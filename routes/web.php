<?php

Route::get('/','PostsController@index')->name('home');

// Route::get('/posts/{post}','PostsController@show');
Route::get('/posts/create','PostsController@show');

//post create

Route::post('/posts','TaskController@store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//register

Route::get('/posts/register','RegisterCnoller@register');
Route::post('/posts/register','RegisterCnoller@user_info');

//login
Route::get('/posts/login','LoginController@login');
Route::post('/posts/login','LoginController@store');

//image intervention
Route::get('/image/createimage','ImageController@create');
Route::post('/image/createimage','ImageController@store');
