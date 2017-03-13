<?php

Route::get('/', 'HomeController@showHome')->name('show-home');

Route::get('/listing', 'ListingController@showListing')->name('show-listing');
Route::get('/detail', 'DetailController@showDetail')->name('show-detail');
Route::get('/contact', 'ContactController@showContact')->name('show-detail');