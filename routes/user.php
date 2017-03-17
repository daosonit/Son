<?php

Route::get('/', 'HomeController@showHome')->name('show-home');

Route::get('/danh-sach-san-pham.html', 'ListingProductController@showListing')->name('product-listing');
Route::get('/danh-sach-tin-tuc.html', 'ListingPostController@showListing')->name('post-listing');

Route::get('/san-pham/{id}-{name}.html', 'DetailProductController@showDetail')->name('show-detail')->where(['id' => '[0-9]+', 'name' => '[a-z]+']);
Route::get('/tin-tuc/{id}-{name}.html', 'DetailPostController@showDetail')->name('show-detail')->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

Route::get('/contact', 'ContactController@showContact')->name('show-detail');

Route::get('/404.html', function (){
    return view('website.error.404');
})->name('page-404');