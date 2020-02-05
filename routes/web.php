<?php

// laravel default routes
Route::get('/', 'LandingController@index');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


// artisans
Route::resource('artisan', 'ArtisanController')->except('show');

// list text messages
Route::get('text-messages', 'TextMessageController@index')->name('message.index');
