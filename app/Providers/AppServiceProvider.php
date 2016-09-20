<?php

namespace App\Providers;

use App\ContentBlock;
use App\CountryList;
use App\MailChimp;
use App\Setting;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('interests', function($attribute, $value, $parameters, $validator) {
            return in_array(true, $value, true);
        });

        view()->composer('*', function($view){
            $view_name = str_replace('.', '-', $view->getName());
            view()->share('view_name', $view_name);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('App\CountryList', function () {
            return new CountryList();
        });

        $this->app->bind('App\MailChimp', function () {
            return new MailChimp();
        });

        $this->app->singleton('App\Setting', function () {
            return new Setting();
        });

        $this->app->singleton('App\ContentBlock', function() {
            return new ContentBlock();
        });
    }
}
