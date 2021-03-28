<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

/*Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ 
   */

Route::group(['namespace' => 'Admin','middleware'=>'auth:admins','prefix' => 'admin' ],function(){
    Route::get('/','AdminController@index')->name('admin.index');

    //Logout
    Route::get('logout','LoginController@logout')->name('admin.logout');

    Route::group(['prefix' => 'setting','middleware' => 'can:settings'], function(){
        
        //Shippings
        Route::get('shipping-methods/{type}','SettingController@editShippingMethods')->name('edit.shipping.methods');
        Route::post('shipping-methods/{id}','SettingController@updateShippingMethods')->name('update.shipping.methods');

    });

    Route::group(['prefix' => 'profile'], function(){
        
        //Profile
        Route::get('edit','ProfileController@editProfile')->name('edit.profile');
        Route::post('update','ProfileController@updateProfile')->name('update.profile');
    });

    /////orders Route////
     Route::group(['prefix' => 'orders','middleware' => 'can:commandes'],function(){
        Route::get('/','OrdersController@index')->name('admin.orders');
        Route::get('show/{id}','OrdersController@show')->name('admin.orders.show');
        Route::post('changeStatus','OrdersController@changeStatus')->name('admin.orders.changeStatus');
    });
    /////Category Route /////
    Route::group(['prefix' => 'maincategory','middleware' => 'can:categories'],function(){
        Route::get('/','MainCategoryController@index')->name('admin.maincategories');
        Route::get('create','MainCategoryController@create')->name('admin.maincategories.create');
        Route::post('store','MainCategoryController@store')->name('admin.maincategories.store');
        Route::get('edit/{id}','MainCategoryController@edit')->name('admin.maincategories.edit');
        Route::post('update/{id}','MainCategoryController@update')->name('admin.maincategories.update');
        Route::get('delete/{id}','MainCategoryController@destroy')->name('admin.maincategories.delete');
        Route::get('changeStatus','MainCategoryController@changeStatus')->name('admin.maincategories.changeStatus');
    });

    Route::group(['prefix' => 'subcategory'],function(){
        Route::get('/','SubCategoryController@index')->name('admin.subcategories');
        Route::get('create','SubCategoryController@create')->name('admin.subcategories.create');
        Route::post('store','SubCategoryController@store')->name('admin.subcategories.store');
        Route::get('edit/{id}','SubCategoryController@edit')->name('admin.subcategories.edit');
        Route::post('update/{id}','SubCategoryController@update')->name('admin.subcategories.update');
        Route::get('delete/{id}','SubCategoryController@destroy')->name('admin.subcategories.delete');
        Route::get('changeStatus/{id}','SubCategoryController@changeStatus')->name('admin.subcategories.changeStatus');
    });

    Route::group(['prefix' => 'brands', 'middleware' => 'can:brands'],function(){
        Route::get('/','BrandsController@index')->name('admin.brands');
        Route::get('create','BrandsController@create')->name('admin.brands.create');
        Route::post('store','BrandsController@store')->name('admin.brands.store');
        Route::get('edit/{id}','BrandsController@edit')->name('admin.brands.edit');
        Route::post('update/{id}','BrandsController@update')->name('admin.brands.update');
        Route::get('delete/{id}','BrandsController@destroy')->name('admin.brands.delete');
        Route::get('changeStatus/{id}','BrandsController@changeStatus')->name('admin.brands.changeStatus');
    });

    Route::group(['prefix' => 'tags','middleware' => 'can:tags'],function(){
        Route::get('/','TagsController@index')->name('admin.tags');
        Route::get('create','TagsController@create')->name('admin.tags.create');
        Route::post('store','TagsController@store')->name('admin.tags.store');
        Route::get('edit/{id}','TagsController@edit')->name('admin.tags.edit');
        Route::post('update/{id}','TagsController@update')->name('admin.tags.update');
        Route::get('delete/{id}','TagsController@destroy')->name('admin.tags.delete');
        Route::get('changeStatus/{id}','TagsController@changeStatus')->name('admin.tags.changeStatus');
    });

    Route::group(['prefix' => 'products','middleware' => 'can:products'],function(){
        Route::get('/','ProductController@index')->name('admin.products');
        Route::get('general-information','ProductController@create')->name('admin.products.general.create');
        Route::post('store-general-information','ProductController@store')->name('admin.products.general.store');
       // Route::get('edit-general-information/{id}','ProductController@edit')->name('admin.products.general-edit');
        //Route::post('update-general-information/{id}','ProductController@update')->name('admin.products.general-update');

        Route::get('images/{id}','ProductController@getImages')->name('admin.products.images');
        Route::post('store-images','ProductController@postImages')->name('admin.products.images.store');
        Route::post('save-images/db','ProductController@saveImageDB')->name('admin.products.images.store.db');

        Route::get('stock/{id}','ProductController@getStock')->name('admin.products.stock');
        Route::post('store-stock','ProductController@postStock')->name('admin.products.stock.store');

        Route::get('price/{id}','ProductController@getPrice')->name('admin.products.price');
        Route::post('store-price','ProductController@postPrice')->name('admin.products.price.store');
        Route::get('edit-general-information/{id}','ProductController@edit')->name('admin.products.edit');
        Route::post('update-general-information/{id}','ProductController@update')->name('admin.products.update');
        Route::get('delete/{id}','ProductController@destroy')->name('admin.products.delete');
        Route::get('changeStatus/{id}','TagsController@changeStatus')->name('admin.products.changeStatus');
    });

    Route::group(['prefix' => 'attributes','middleware' => 'can:attributes'],function(){
        Route::get('/','AttributeController@index')->name('admin.attributes');
        Route::get('create','AttributeController@create')->name('admin.attributes.create');
        Route::post('store','AttributeController@store')->name('admin.attributes.store');
        Route::get('edit/{id}','AttributeController@edit')->name('admin.attributes.edit');
        Route::post('update/{id}','AttributeController@update')->name('admin.attributes.update');
        Route::get('delete/{id}','AttributeController@destroy')->name('admin.attributes.delete');
    });

    Route::group(['prefix' => 'options','middleware' => 'can:options'],function(){
        Route::get('/','OptionsController@index')->name('admin.options');
        Route::get('create','OptionsController@create')->name('admin.options.create');
        Route::post('store','OptionsController@store')->name('admin.options.store');
        Route::get('edit/{id}','OptionsController@edit')->name('admin.options.edit');
        Route::post('update/{id}','OptionsController@update')->name('admin.options.update');
        Route::get('delete/{id}','OptionsController@destroy')->name('admin.options.delete');
    });

    Route::group(['prefix' => 'sliders','middleware' => 'can:sliders'], function () {
        Route::get('/', 'SlidersController@addImages')->name('admin.sliders.create');
        Route::post('images', 'SlidersController@saveSliderImages')->name('admin.sliders.images.store');
        Route::post('images/db', 'SlidersController@saveSliderImagesDB')->name('admin.sliders.images.store.db');

    });

    // Role Route
    Route::group(['prefix' => 'roles','middleware' => 'can:roles'],function(){
        Route::get('/','RolesController@index')->name('admin.roles');
        Route::get('create','RolesController@create')->name('admin.roles.create');
        Route::post('store','RolesController@store')->name('admin.roles.store');
        Route::get('edit/{id}','RolesController@edit')->name('admin.roles.edit');
        Route::post('update/{id}','RolesController@update')->name('admin.roles.update');
        Route::get('delete/{id}','RolesController@destroy')->name('admin.roles.delete');
    });

Route::group(['prefix' => 'users','middleware' => 'can:users'],function(){
        Route::get('/','UserController@index')->name('admin.users');
        Route::get('create','UserController@create')->name('admin.users.create');
        Route::post('store','UserController@store')->name('admin.users.store');
        Route::get('edit/{id}','UserController@edit')->name('admin.users.edit');
        Route::post('update/{id}','UserController@update')->name('admin.users.update');
        Route::get('delete/{id}','UserController@destroy')->name('admin.users.delete');
    });
Route::group(['prefix' => 'states',/*'middleware' => 'can:users'*/],function(){
        Route::get('/','StatesController@index')->name('admin.states');
        Route::get('create','StatesController@create')->name('admin.states.create');
        Route::post('store','StatesController@store')->name('admin.states.store');
        Route::get('edit/{id}','StatesController@edit')->name('admin.states.edit');
        Route::post('update/{id}','StatesController@update')->name('admin.states.update');
        Route::get('delete/{id}','StatesController@destroy')->name('admin.states.delete');
        Route::get('changeStatus/{id}','StatesController@changeStatus')->name('admin.states.changeStatus');

    });

Route::group(['prefix' => 'showrooms',/*'middleware' => 'can:users'*/],function(){
        Route::get('/','ShowroomsController@index')->name('admin.showrooms');
        Route::get('create','ShowroomsController@create')->name('admin.showrooms.create');
        Route::post('store','ShowroomsController@store')->name('admin.showrooms.store');
        Route::get('edit/{id}','ShowroomsController@edit')->name('admin.showrooms.edit');
        Route::post('update/{id}','ShowroomsController@update')->name('admin.showrooms.update');
        Route::get('delete/{id}','ShowroomsController@destroy')->name('admin.showrooms.delete');

    });


});

Route::group(['namespace' => 'Admin', 'middleware'=>'guest:admins','prefix' => 'admin'],function(){
    Route::get('login','LoginController@login')->name('admin.login');
    Route::post('login','LoginController@Postlogin')->name('admin.login');
});

//});