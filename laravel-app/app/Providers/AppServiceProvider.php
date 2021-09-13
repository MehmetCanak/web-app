<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;

use App\View\Components\Alert;
use App\View\Components\Button;

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
        View::share('key', 'value');
        Blade::component('package-alert', Alert::class);
        Blade::component('button', Button::class);
        //Blade::component('alert', Alert::class);
        //Blade::componentNamespace('App\View\Components', 'comp');
    }
}
