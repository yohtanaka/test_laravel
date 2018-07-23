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

Route::get('/mail', 'MailController@mail');
Route::post('/mail/confirm', 'MailController@confirm');
Route::post('/mail/sent', 'MailController@sent');

Route::get('/csv', 'CsvController@csv');
Route::post('/csv/import', 'CsvController@import');
Route::get('/csv/export', 'CsvController@export');

Route::get('/slack', 'SlackController@slack');
Route::post('/slack', 'SlackController@post');

Route::get('/twitter', 'TwitterController@index');
Route::get('/twitter/create', 'TwitterController@create');
Route::post('/twitter/store', 'TwitterController@store');
Route::get('/twitter/search', 'TwitterController@search');
Route::post('/twitter/show_result', 'TwitterController@showResult');

Route::get('/birthday', 'BirthdayController@birthday');
Route::post('/birthday/search', 'BirthdayController@search');
