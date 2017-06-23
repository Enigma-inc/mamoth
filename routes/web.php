<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'medical'], function () {
    Route::get('/home', 'MedicalPagesController@home')->name('medical-aid.home');
    Route::get('/become-member', 'MedicalPagesController@becomeMember')->name('medical-aid.become-member');
    Route::get('/benefits', 'MedicalPagesController@benefits')->name('medical-aid.benefits');
    Route::get('/find-doctor', 'MedicalPagesController@findDoctor')->name('medical-aid.find-doctor');
});

Route::group(['prefix' => 'funeral'], function () {
   Route::get('/home', 'FuneralPagesController@home')->name('funeral.home');
});
