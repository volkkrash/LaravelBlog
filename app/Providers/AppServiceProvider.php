<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('particles.footer-company-info', function($view) {
            $view->with(
                [
                    'companyData' => \App\Models\CompanyContactData::getData(),
                    'socialsData' => \App\Models\SocialService::getData()
                ]);
        });

        view()->composer('layouts.index', function($view) {
            $view->with('mainMenu', \App\Models\Menu::with('children')->where('parent_id', NULL)->orderBy('sort')->get());
        });
    }
}
