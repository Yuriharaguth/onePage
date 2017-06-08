<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class IndexServiceProvider extends ServiceProvider
{

    public function boot() {
        view()->composer(['home.welcome'],'App\Http\ViewComposer\IndexComposer');
    }


    public function register() {
        //
    }
}
