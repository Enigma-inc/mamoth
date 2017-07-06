<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'medical'], function () {
    Route::get('/home', 'MedicalPagesController@home')->name('medical-aid.home');
    Route::get('/options', 'MedicalPagesController@options')->name('medical-aid.options');
    Route::get('/become-member/{type}', 'MedicalPagesController@becomeMember')->name('medical-aid.become-member');
    Route::get('/benefits', 'MedicalPagesController@benefits')->name('medical-aid.benefits');
    Route::get('/find-doctor', 'MedicalPagesController@findDoctor')->name('medical-aid.find-doctor');
    Route::get('/lodge-claim', 'MedicalPagesController@lodgeClaim')->name('medical-aid.lodge-claim');
});

Route::group(['prefix' => 'funeral'], function () {
   Route::get('/home', 'FuneralPagesController@home')->name('funeral.home');
});
