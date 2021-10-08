<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
  

Route::group(
  [
    'prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
  ], 
  function(){

    Auth::routes();

    Route::get('/',function(){
      return view('welcome');
    });
    
    
   
      Route::group(['prefix' => 'admin'], function () {
        Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
        Route::post('/login', 'AdminAuth\LoginController@login');
        Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');
      
        Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
        Route::post('/register', 'AdminAuth\RegisterController@register');
      
        Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
        Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
        Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
        Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
    //users
    
    Route::resource('users','AdminAuth\usercontroller');  
    
      Route::get('/users_show/{id}','AdminAuth\usercontroller@show')->name('users.show'); 
      Route::get('/user_destroy/{id}','AdminAuth\usercontroller@destroy')->name('users.destroy'); 
      Route::get('/users/edit/{id}', 'AdminAuth\usercontroller@edit')->name('users.edit');
      Route::get('/users/update/{id}', 'AdminAuth\usercontroller@update')->name('users.update');
    
    //categories
    Route::resource('categories','AdminAuth\categorycontroller') ;
        Route::get('/category_destroy/{id}','AdminAuth\categorycontroller@destroy')->name('categories.destroy');
        Route::get('/categories/edit/{id}', 'AdminAuth\categorycontroller@edit')->name('categories.edit');
        Route::get('/categories/update/{id}', 'AdminAuth\categorycontroller@update')->name('categories.update');
    
    //products
    Route::resource('products','AdminAuth\productcontroller');  
    Route::get('/products/edit/{id}', 'AdminAuth\productcontroller@edit')->name('products.edit');
    Route::get('/products/update/{id}', 'AdminAuth\productcontroller@update')->name('products.update');
    Route::get('/product_destroy/{id}','AdminAuth\productcontroller@destroy')->name('products.destroy');
    
    
      });
    

  });



Route::get('/khadija',function(){

  return view('user.content');

});










// Route::get('lang/{lang}',function($lang){
// app()->setlocale('ar');
// if(in_array($lang,['ar','en','tu'])){
//       if(Auth::guard('admin')->user()){
//       $admin=Auth::guard('admin')->user();
//       $admin->lang=$lang;
//       $admin->save();
//       }else{

//      if(session()->has('lang')){

//     session()->forget('lang');
//      }
//      session()->put('lang',$lang);
//      }

// }else{

//   if(Auth::guard('admin')->user()){
//     $admin=Auth::guard('admin')->user();
//     $admin->lang='en';
//     $admin->save();
  
//     }else{
    
//       if(session()->has('lang')){
    
//         session()->forget('lang');
//       }
//       session()->put('lang',en);
//     }}
//     return back();
// });

Route::get('/dashboard', 'DashboardController@index');


