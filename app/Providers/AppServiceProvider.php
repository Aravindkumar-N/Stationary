<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
// use App\Observers\SaleObserver;
// use App\Models\Sale;

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
        Schema::DefaultStringLength(200);

        // Sale::observe(SaleObserver::class);
    }
}
