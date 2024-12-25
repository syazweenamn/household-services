<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Servicecategory;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        view()->share('servicecategories',
            Servicecategory::all());
    }
}
