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
/*
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function(){ 
        */
        Auth::routes();
        Auth::routes(['verify' => true]);

        Route::get('/','Site\HomeController@home')->name('home');//->middleware('VerifiedUser');

        Route::group(['namespace' => 'Site','middleware'=>'auth'],function(){

            // must be authentificated user ans verified
            Route::get('/profile',function(){
                return 'you are authentified';
            });
            
           
        });


        Route::group(['namespace' => 'Site', 'middleware'=>'auth'],function(){

          // must be authentificated user
            //Route::post('verify-code-user/','VerificationCodeController@verify')->name('verify-code-user');
            //Route::get('verify','VerificationCodeController@getVerifyCodePage')->name('get.verification.form');

            Route::get('products/{productId}/reviews', 'ProductReviewController@index')->name('products.reviews.index');
            Route::post('products/{productId}/reviews', 'ProductReviewController@store')->name('products.reviews.store');
            Route::get('payment', 'PayementController@getPayments')->name('card_payment');//->middleware('verified');
            Route::post('payment', 'PayementController@processPayment') -> name('payment.process');//->middleware('verified');

            Route::get('payment-shipping', 'PayementController@getPayments_shipping') -> name('payment_shipping');//->middleware('verified');
            Route::post('payment-shipping', 'PayementController@processPayment_shipping') -> name('payment-shipping.process');//->middleware('verified');

        Route::group(['prefix'=>'account'/*,'middleware' =>'verified'*/],function(){
        Route::get('/','AccountController@index')->name('account.my-account');
        Route::post('/update','AccountController@updateProfile')->name('account.update.informations');
        Route::post('/password/update','AccountController@updatePassword')->name('account.update.password');

    });
            
           

    });


Route::group(['namespace' => 'Site'],function(){
        //guest user

        Route::get('all-products','ProductController@index')->name('all-products');

        /// category
        Route::get('all-products/{slug}','ProductController@getproductsBySlug')->name('category');
        
        Route::get('/category/get_ceramic/{id}','ProductController@filtre_product_in_category');
        
        Route::get('/category/get_ceramic_by_options/{id}','ProductController@filtre_product_by_option_in_category');

        Route::get('/category/get_ceramic_by_brand/{id}','ProductController@filtre_product_by_brand_in_category');
        

        ///all ceramic
        Route::get('/get_ceramic/{id}','ProductController@filtre_product');
        
        Route::get('/get_ceramic_by_options/{id}','ProductController@filtre_product_by_option');

        Route::get('/get_ceramic_by_brand/{id}','ProductController@filtre_product_by_brand');

        //Route::get('product/{slug}', 'ProductController@getproductsBySlug')->name('product.details');
        //Route::post('product-brand', 'ProductController@getproductsBybrand')->name('product.brand');
        //Route::get('search-products','ProductController@search')->name('products.search');
        //Route::get('produts/filtr-by-price','ProductController@filtrebyprice')->name('product.price');
        
        //Route::get('produts-price/{ordre}','ProductController@filtrebyordre')->name('product.price.orderby');
       // Route::get('produts-salled','ProductController@filtrebyvente')->name('product.vente');
        
        //suivi la commande
        //Route::get('/commande/suivi-commande','HomeController@suiviCommande')->name('commande.suivi-commande');
        //  contact route

        Route::get('contactez-nous','ContactController@contact')->name('contact');
        Route::post('contacte/store','ContactController@store')->name('contact.store');


        Route::get('qui-sommes-nous','ContactController@about')->name('about');
                    Route::post('add-to-cart','CartController@addCart')->name('add-to-cart');//->middleware('verified');
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


   
    
//});

Route::group(['namespace' => 'Site', 'middleware' => 'auth'], function () {
    Route::post('wishlist', 'WishlistController@store')->name('wishlist.store');
    Route::delete('wishlist', 'WishlistController@destroy')->name('wishlist.destroy');
    Route::get('wishlist/products', 'WishlistController@index')->name('wishlist.products.index');
});

    Route::post('/check-subscriber-email/','Site\SubscribersController@checksubscribe');
    Route::post('/add-subscriber-email/','Site\SubscribersController@addsubscribe');

