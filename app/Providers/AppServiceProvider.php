<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Schema;
use Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        app()->singleton('lang',function(){
            if(Auth::guard('admin')->user())
            {
            if(empty(Auth::guard('admin')->user()->lang))
            {

                return 'en';
            }else{
                
                return  Auth::guard('admin')->user()->lang;

                
            }
        }else{

                if(session()->has('lang')){
                    return session()->get('lang');
                }else{
                    return 'en';
                }
            
            }
        });

        Schema::defaultStringLength(191); 
    }
}
