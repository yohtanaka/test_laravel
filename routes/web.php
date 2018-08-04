<?php

Route::get('/', function () { return view('index'); });

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post', 'PostController@index');
Route::get('/post/create', 'PostController@create');
Route::post('/post/confirm', 'PostController@confirm');
Route::post('/post/store', 'PostController@store');
Route::get('/post/{id}', 'PostController@show');
Route::get('/post/{id}/edit', 'PostController@edit');
Route::put('/post/{id}', 'PostController@update');
Route::delete('/post/{id}','PostController@destroy');

Route::get('/mail', 'MailController@index');
Route::post('/mail/confirm', 'MailController@confirm');
Route::post('/mail/sent', 'MailController@sent');

Route::get('/csv', 'CsvController@index');
Route::post('/csv/import', 'CsvController@import');
Route::get('/csv/export', 'CsvController@export');

Route::get('/slack', 'SlackController@index');
Route::post('/slack', 'SlackController@post');

Route::get('/twitter', 'TwitterController@index');
Route::get('/twitter/create', 'TwitterController@create');
Route::post('/twitter/store', 'TwitterController@store');
Route::get('/twitter/search', 'TwitterController@search');
Route::post('/twitter/show_result', 'TwitterController@showResult');

Route::get('/birthday', 'BirthdayController@index');
Route::post('/birthday/search', 'BirthdayController@search');

Route::get('/timer', 'TimerController@index');
Route::post('/timer/birthday', 'TimerController@birthday');

Route::get('/photo', 'PhotoController@index');
Route::get('/photo/create', 'PhotoController@create');
Route::post('/photo/confirm', 'PhotoController@confirm');
Route::post('/photo/store', 'PhotoController@store');
Route::get('/photo/{id}', 'PhotoController@show');
