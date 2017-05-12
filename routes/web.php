<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'medical'], function () {
    Route::get('/home', 'MedicalPagesController@home')->name('medical-aid.home');
});

Route::group(['prefix' => 'funeral'], function () {
   Route::get('/home', 'FuneralPagesController@home')->name('funeral.home');
});
