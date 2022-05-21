<?php
Route::resource('brands','BrandController'); // Brands
Route::resource('products','ProductController'); // Product
Route::resource('product-category','ProductCategoryController'); // Product Categories
Route::resource('shippings','ShippingController'); // Shipping
Route::resource('coupons','CouponController'); // Coupon

Route::resource('attributes','AttributeController'); // attribute

#Orders
Route::group(['prefix' => 'orders'], function () {
    Route::get('/', 'OrderController@index')->name('orders.index');
    Route::get('/{order}/show', 'OrderController@show')->name('orders.show');
 });
#Product Attribute
 Route::get('attributes/load', 'ProductAttributeController@loadAttributes');
 Route::post('attributes', 'ProductAttributeController@productAttributes');
 Route::post('attributes/values', 'ProductAttributeController@loadValues');
 Route::post('attributes/add', 'ProductAttributeController@addAttribute');
 Route::post('attributes/delete', 'ProductAttributeController@deleteAttribute');


