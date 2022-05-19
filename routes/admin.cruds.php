<?php
// Route

Route::resource('languages','LanguageController'); // languages
Route::resource('countries','CountryController',['only'=>['index']]); // Country
Route::resource('cities','CityController'); // Cities
Route::resource('areas','AreaController'); // Areas
Route::resource('districts','DistrictController'); // Districts
Route::resource('pages','PageController');// Pages
Route::resource('banners','BannerController');// Bnnners
Route::resource('brands','BrandController'); // Brands
Route::resource('users','UserController');// Users
Route::resource('nutritions','NutritionController'); // Nutritions
Route::resource('recipes','RecipeController'); // Recipes
Route::resource('recipe-category','RecipeCategoryController'); // Recipe Categories
Route::resource('posts','PostController'); // Post
Route::resource('post-category','PostCategoryController'); // Post Categories
Route::resource('tags','TagController'); // Post Tags
Route::resource('post-tag','PostTagController'); // Post Tags
Route::resource('faqs','FaqController'); // Faqs
Route::resource('slides','SlideController'); // Slides


Route::resource('products','ProductController'); // Product
Route::resource('product-category','ProductCategoryController'); // Product Categories


 
// Menu Management
// End Of Menu Management
/* Ecommerce Rotues */
Route::resource('orders','OrderController'); // Order
Route::resource('shippings','ShippingController'); // Shipping
Route::resource('coupons','CouponController'); // Coupon


?>