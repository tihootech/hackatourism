<?php

// laravel default routes
Route::get('/', 'LandingController@index');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


// artisans
Route::resource('artisan', 'ArtisanController')->except('show');
