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
            

    });
    Route::group(['namespace' => 'Site', 'middleware'=>'guest'],function(){
            Route::get('category/{slug}',function(){

            })->name('category');
        //guest user

     });
   
    
});




