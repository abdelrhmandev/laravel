<?php
// Route

Route::get('/', 'DashboardController@index')->name('admin.dashboard');

Route::group(['prefix' => 'profile'], function () {
    Route::get('/', 'ProfileController@index')->name('edit.profile');
    Route::put('update', 'ProfileController@update')->name('update.profile');
});

Route::group(['prefix' => 'recipes'], function () {
    Route::get('/reviews/{id}','RecipeController@reviews')->name('recipe.reviews'); // Recipe Reviews

    Route::get('/tags/{id}','RecipeController@index')->name('recipe.sortby.tags'); // 

});


Route::get('/subscriptions','SubscriptionController@index')->name('subscriptions.index');  

Route::group(['prefix' => 'settings'], function () {
Route::get('/', 'SettingController@index')->name('settings');
Route::post('/update', 'SettingController@update')->name('settings.update');
});







 



///// Menu Management ////////////
// $path = rtrim(config('menu.route_path'));

// Route::get('/menus', 'MenuController@index')->name('menus'); 
// Route::put($path . '/add_menu_item','MenuController@add_menu_item')->name('add_menu_item');
// Route::post($path . '/hgeneratemenucontrol_override','MenuController@hgeneratemenucontrol_override')->name('hgeneratemenucontrol_override');




?>