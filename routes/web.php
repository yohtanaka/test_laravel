<?php

Route::get('/', function () { return view('index'); });

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post', 'PostController@index');
Route::get('/post/create', 'PostController@create');
Route::post('/post/confirm', 'PostController@confirm');
Route::post('/post/store', 'PostController@store');
Route::get('/post/show/{id}', 'PostController@index');
Route::get('/post/edit/{id}', 'PostController@edit');
Route::get('/post/update/{id}', 'PostController@update');
Route::post('/post/destroy/{id}','PostController@destroy');
