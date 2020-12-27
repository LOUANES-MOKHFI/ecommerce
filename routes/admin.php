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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ 
   

Route::group(['namespace' => 'Admin','middleware'=>'auth:admins','prefix' => 'admin' ],function(){
    Route::get('/','AdminController@index')->name('admin.index');

    //Logout
    Route::get('logout','LoginController@logout')->name('admin.logout');

    Route::group(['prefix' => 'setting'], function(){
        
        //Shippings
        Route::get('shipping-methods/{type}','SettingController@editShippingMethods')->name('edit.shipping.methods');
        Route::post('shipping-methods/{id}','SettingController@updateShippingMethods')->name('update.shipping.methods');

    });

    Route::group(['prefix' => 'profile'], function(){
        
        //Profile
        Route::get('edit','ProfileController@editProfile')->name('edit.profile');
        Route::post('update','ProfileController@updateProfile')->name('update.profile');
    });
    /////Category Route /////
    Route::group(['prefix' => 'maincategory'],function(){
        Route::get('/','MainCategoryController@index')->name('admin.maincategories');
        Route::get('create','MainCategoryController@create')->name('admin.maincategories.create');
        Route::post('store','MainCategoryController@store')->name('admin.maincategories.store');
        Route::get('edit/{id}','MainCategoryController@edit')->name('admin.maincategories.edit');
        Route::post('update/{id}','MainCategoryController@update')->name('admin.maincategories.update');
        Route::get('delete/{id}','MainCategoryController@destroy')->name('admin.maincategories.delete');
        Route::get('changeStatus/{id}','MainCategoryController@changeStatus')->name('admin.maincategories.changeStatus');
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

    Route::group(['prefix' => 'brands'],function(){
        Route::get('/','BrandsController@index')->name('admin.brands');
        Route::get('create','BrandsController@create')->name('admin.brands.create');
        Route::post('store','BrandsController@store')->name('admin.brands.store');
        Route::get('edit/{id}','BrandsController@edit')->name('admin.brands.edit');
        Route::post('update/{id}','BrandsController@update')->name('admin.brands.update');
        Route::get('delete/{id}','BrandsController@destroy')->name('admin.brands.delete');
        Route::get('changeStatus/{id}','BrandsController@changeStatus')->name('admin.brands.changeStatus');
    });

    Route::group(['prefix' => 'tags'],function(){
        Route::get('/','TagsController@index')->name('admin.tags');
        Route::get('create','TagsController@create')->name('admin.tags.create');
        Route::post('store','TagsController@store')->name('admin.tags.store');
        Route::get('edit/{id}','TagsController@edit')->name('admin.tags.edit');
        Route::post('update/{id}','TagsController@update')->name('admin.tags.update');
        Route::get('delete/{id}','TagsController@destroy')->name('admin.tags.delete');
        Route::get('changeStatus/{id}','TagsController@changeStatus')->name('admin.tags.changeStatus');
    });

    Route::group(['prefix' => 'products'],function(){
        Route::get('/','ProductController@index')->name('admin.products');
        Route::get('general-information','ProductController@create')->name('admin.products.general.create');
        Route::post('store-general-information','ProductController@store')->name('admin.products.general.store');

        Route::get('images/{id}','ProductController@getImages')->name('admin.products.images');
        Route::post('store-images','ProductController@postImages')->name('admin.products.images.store');
        Route::post('save-images/db','ProductController@saveImageDB')->name('admin.products.images.store.db');

        Route::get('stock/{id}','ProductController@getStock')->name('admin.products.stock');
        Route::post('store-stock','ProductController@postStock')->name('admin.products.stock.store');

        Route::get('price/{id}','ProductController@getPrice')->name('admin.products.price');
        Route::post('store-price','ProductController@postPrice')->name('admin.products.price.store');
        Route::get('edit-general-information/{id}','TagsController@edit')->name('admin.products.edit');
        Route::post('update-general-information/{id}','TagsController@update')->name('admin.products.update');
        Route::get('delete/{id}','TagsController@destroy')->name('admin.products.delete');
        Route::get('changeStatus/{id}','TagsController@changeStatus')->name('admin.products.changeStatus');
    });

    Route::group(['prefix' => 'attributes'],function(){
        Route::get('/','AttributeController@index')->name('admin.attributes');
        Route::get('create','AttributeController@create')->name('admin.attributes.create');
        Route::post('store','AttributeController@store')->name('admin.attributes.store');
        Route::get('edit/{id}','AttributeController@edit')->name('admin.attributes.edit');
        Route::post('update/{id}','AttributeController@update')->name('admin.attributes.update');
        Route::get('delete/{id}','AttributeController@destroy')->name('admin.attributes.delete');
    });

    Route::group(['prefix' => 'options'],function(){
        Route::get('/','OptionsController@index')->name('admin.options');
        Route::get('create','OptionsController@create')->name('admin.options.create');
        Route::post('store','OptionsController@store')->name('admin.options.store');
        Route::get('edit/{id}','OptionsController@edit')->name('admin.options.edit');
        Route::post('update/{id}','OptionsController@update')->name('admin.options.update');
        Route::get('delete/{id}','OptionsController@destroy')->name('admin.options.delete');
    });

    Route::group(['prefix' => 'sliders'], function () {
        Route::get('/', 'SlidersController@addImages')->name('admin.sliders.create');
        Route::post('images', 'SlidersController@saveSliderImages')->name('admin.sliders.images.store');
        Route::post('images/db', 'SlidersController@saveSliderImagesDB')->name('admin.sliders.images.store.db');

    });


});

Route::group(['namespace' => 'Admin', 'middleware'=>'guest:admins','prefix' => 'admin'],function(){
    Route::get('login','LoginController@login')->name('admin.login');
    Route::post('login','LoginController@Postlogin')->name('admin.login');
});

});