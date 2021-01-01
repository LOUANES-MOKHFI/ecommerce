<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Site Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function(){ 

        Route::get('/','Site\HomeController@home')->name('home')->middleware('VerifiedUser');

        Route::group(['namespace' => 'Site','middleware'=>['auth','VerifiedUser']],function(){

            // must be authentificated user ans verified
            Route::get('/profile',function(){
                return 'you are authentified';
            });
            
           
        });


        Route::group(['namespace' => 'Site', 'middleware'=>'auth'],function(){

          // must be authentificated user
            Route::post('verify-code-user/','VerificationCodeController@verify')->name('verify-code-user');
            Route::get('verify','VerificationCodeController@getVerifyCodePage')->name('get.verification.form');

            Route::get('products/{productId}/reviews', 'ProductReviewController@index')->name('products.reviews.index');
            Route::post('products/{productId}/reviews', 'ProductReviewController@store')->name('products.reviews.store');
            Route::get('payment', 'PayementController@getPayments') -> name('payment');
            Route::post('payment', 'PayementController@processPayment') -> name('payment.process');
           // Route::get('/stripe-payment', PayementController::class, 'handleGet'])->name('payement');
            //Route::post('/stripe-payment', [StripeController::class, 'handlePost'])->name('stripe.payment');

    });


Route::group(['namespace' => 'Site',/* 'middleware'=>'guest'*/],function(){
        //guest user
        Route::get('category/{slug}','CategoryController@getproductsByslug')->name('category');
        route::get('product/{slug}', 'ProductController@productsBySlug')->name('product.details');
        /**
         *  Cart routes
         */
        Route::group(['prefix' => 'cart'], function () {
            Route::get('/', 'CartController@cart')->name('site.cart.index');
            Route::post('/cart/add', 'CartController@add')->name('site.cart.add');
            Route::get('/remove-from-cart/{rowId}','CartController@remove')->name('site.cart.remove-from-cart');
            Route::post('/update-product-in-cart', 'CartController@update')->name('site.cart.update-product-in-cart');
            Route::post('/update-all', 'CartController@postUpdateAll')->name('site.cart.update-all');
        });
     });
   
    
});

Route::group(['namespace' => 'Site', 'middleware' => 'auth'], function () {
    Route::post('wishlist', 'WishlistController@store')->name('wishlist.store');
    Route::delete('wishlist', 'WishlistController@destroy')->name('wishlist.destroy');
    Route::get('wishlist/products', 'WishlistController@index')->name('wishlist.products.index');
});


