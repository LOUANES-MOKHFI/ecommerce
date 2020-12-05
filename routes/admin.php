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

});

Route::group(['namespace' => 'Admin', 'middleware'=>'guest:admins','prefix' => 'admin'],function(){
    Route::get('login','LoginController@login')->name('admin.login');
    Route::post('login','LoginController@Postlogin')->name('admin.login');
});

});