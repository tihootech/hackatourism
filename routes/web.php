<?php

// ==== laravel default routes
Route::get('/', 'LandingController@index');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


// ===== resource routes
Route::resource('artisan', 'ArtisanController')->except('show');
Route::resource('product', 'ProductController')->except('show');

// ===== manage images
Route::get('images/{type}/{id}', 'ImageController@manage')->name('image.manage');
Route::post('images', 'ImageController@upload')->name('image.upload');
Route::delete('images/{image}', 'ImageController@destroy')->name('image.destroy');

// ===== list text messages
Route::get('text-messages', 'TextMessageController@index')->name('message.index');
