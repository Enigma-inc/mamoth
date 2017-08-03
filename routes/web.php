<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('download/{file}','MedicalPagesController@download')->name('download');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'medical'], function () {
    Route::get('/home', 'MedicalPagesController@home')->name('medical-aid.home');
    Route::get('/about-us', 'MedicalPagesController@about')->name('medical-aid.about');
    Route::get('/options', 'MedicalPagesController@options')->name('medical-aid.options');
    Route::get('/options/primary', 'MedicalPagesController@optionsPrimary')->name('medical-aid.options.primary');
    Route::get('/options/standard', 'MedicalPagesController@standard')->name('medical-aid.options.standard');
    Route::get('/options/standard-plus', 'MedicalPagesController@standardPlus')->name('medical-aid.options.standard-plus');
    Route::get('/options/elite', 'MedicalPagesController@elite')->name('medical-aid.options.elite');
    Route::get('/become-member/{type}', 'MedicalPagesController@becomeMember')->name('medical-aid.become-member');
    Route::get('/benefits', 'MedicalPagesController@benefits')->name('medical-aid.benefits');
    Route::get('/find-doctor', 'MedicalPagesController@findDoctor')->name('medical-aid.find-doctor');
    Route::get('/lodge-claim', 'MedicalPagesController@lodgeClaim')->name('medical-aid.lodge-claim');
    Route::get('/contact-us', 'MedicalPagesController@contact')->name('medical-aid.contact');
});

Route::group(['prefix' => 'funeral'], function () {
   Route::get('/home', 'FuneralPagesController@home')->name('funeral.home');
   Route::get('/about-us','FuneralPagesController@about')->name('funeral.about');
   Route::get('/plans','FuneralPagesController@plans')->name('funeral.plans');
   Route::get('/become-a-member','FuneralPagesController@becomeMember')->name('funeral.become-member');
   Route::get('/benefits','FuneralPagesController@benefits')->name('funeral.benefits');
   Route::get('/claim','FuneralPagesController@claim')->name('funeral.claim');
     Route::get('/contact-us', 'FuneralPagesController@contact')->name('funeral.contact');
});

