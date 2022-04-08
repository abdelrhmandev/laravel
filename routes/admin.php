<?php
// Route
// Route::get('/', 'HomeController@index')->name('admin.dashboard');

// /*
//  Muli Languages Application Handle
// */
// Route::resource('languages','LanguageController'); // Language

// Route::get('/form/add', function(){
//     return view('admin.forms.add');
// });

Route::resource('countries','CountryController',['only'=>['index']]); // Country
Route::resource('cities','CityController'); // Cities
Route::resource('areas','AreaController'); // Areas
Route::resource('districts','DistrictController'); // Districts
Route::resource('recipes','RecipeController'); // Recipe
Route::resource('posts','PostController'); // Post

Route::resource('PostCategories','PostCategoryController'); // Post Categories

 
// Menu Management
 
 

 

// End Of Menu Management


// Route::resource('pages','PageController');// Pages

///// Menu Management ////////////
// $path = rtrim(config('menu.route_path'));
// Route::get('/menus', 'MenuController@index')->name('menus'); 
// Route::put($path . '/add_menu_item','MenuController@add_menu_item')->name('add_menu_item');
// Route::post($path . '/hgeneratemenucontrol_override','MenuController@hgeneratemenucontrol_override')->name('hgeneratemenucontrol_override');


// Route::resource('banners','BannerController');// Bnnner
// Route::resource('users','UserController');// Banner
// Route::get('profile','AdminController@profile')->name('admin-profile'); // Profile
// Route::post('/profile/{id}','AdminController@profileUpdate')->name('profile-update'); // Profile Update
// Route::resource('products-categories','ProductCategoryController'); // Product Categories
// Route::resource('products','ProductController');// Product
// Route::resource('post-category','PostCategoryController'); // POST category

// Route::resource('posts-tags','PostTagController'); // Post tag



// Route::resource(LaravelLocalization::transRoute('routes.posts'),'PostController'); // Post

// Route::resource('faqs','FaqController');// faqs
//Route::resource('messages','MessageController'); // Message
//Route::get('/messages/five','MessageController@messageFive')->name('messages.five'); 




/* Ecommerce Rotues */
// Route::resource('orders','OrderController'); // Order
// Route::resource('shippings','ShippingController'); // Shipping
// Route::resource('coupons','CouponController'); // Coupon
// Route::resource('brands','BrandController');// Brands


// Route::get('settings','AdminController@settings')->name('settings'); // Settings
?>