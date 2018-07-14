<?php

Route::get('/', function () { return view('index'); });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
