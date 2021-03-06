<?php

Route::get('/', function () { return view('index'); });

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('/post')->group(function() {
  Route::get('/', 'PostController@index');
  Route::get('/create', 'PostController@create');
  Route::post('/confirm', 'PostController@confirm');
  Route::post('/store', 'PostController@store');
  Route::get('/{id}', 'PostController@show');
  Route::get('/{id}/edit', 'PostController@edit');
  Route::put('/{id}', 'PostController@update');
  Route::delete('/{id}','PostController@destroy');
});

Route::prefix('/mail')->group(function() {
  Route::get('/', 'MailController@index');
  Route::post('/confirm', 'MailController@confirm');
  Route::post('/sent', 'MailController@sent');
});

Route::prefix('/csv')->group(function() {
  Route::get('/', 'CsvController@index');
  Route::post('/import', 'CsvController@import');
  Route::get('/export', 'CsvController@export');
});

Route::prefix('/slack')->group(function() {
  Route::get('/', 'SlackController@index');
  Route::post('/', 'SlackController@post');
});

Route::prefix('/twitter')->group(function() {
  Route::get('/', 'TwitterController@index');
  Route::get('/create', 'TwitterController@create');
  Route::post('/store', 'TwitterController@store');
  Route::get('/search', 'TwitterController@search');
  Route::post('/show_result', 'TwitterController@showResult');
});

Route::prefix('/birthday')->group(function() {
  Route::get('/', 'BirthdayController@index');
  Route::post('/search', 'BirthdayController@search');
});

Route::prefix('/timer')->group(function() {
  Route::get('/', 'TimerController@index');
  Route::post('/birthday', 'TimerController@birthday');
});

Route::prefix('/photo')->group(function() {
  Route::get('/', 'PhotoController@index');
  Route::get('/create', 'PhotoController@create');
  Route::post('/confirm', 'PhotoController@confirm');
  Route::post('/store', 'PhotoController@store');
  Route::get('/{id}', 'PhotoController@show');
});

Route::prefix('/calendar')->group(function() {
  Route::get('/', 'CalendarController@index');
});

Route::prefix('/quiz')->group(function() {
  Route::get('/', 'QuizController@index');
});

Route::prefix('/search')->group(function() {
  Route::get('/', 'SearchController@index');
});

Route::prefix('/vote')->group(function() {
  Route::get('/', 'VoteController@index');
});
