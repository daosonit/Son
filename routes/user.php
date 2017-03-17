<?php

Route::get('/', 'HomeController@showHome')->name('show-home');

Route::get('/danh-sach-san-pham.html', 'ListingProductController@showListing')->name('listing-product');
Route::get('/danh-sach-tin-tuc.html', 'ListingPostController@showListing')->name('listing-post');

Route::get('/gioi-thieu.html', 'GlobalController@showIntroduce')->name('introduce');
Route::get('/lien-he.html', 'GlobalController@showContact')->name('contact');

Route::get('/san-pham/{id}-{name}.html', 'DetailProductController@showDetail')->name('detail-product')->where(['id' => '[0-9]+', 'name' => '[a-z0-9-]+']);
Route::get('/tin-tuc/{id}-{name}.html', 'DetailPostController@showDetail')->name('detail-post')->where(['id' => '[0-9]+', 'name' => '[a-z0-9-]+']);

Route::get('/contact', 'ContactController@showContact')->name('show-detail');

Route::get('/404.html', function () {
    return view('website.error.404');
})->name('page-404');