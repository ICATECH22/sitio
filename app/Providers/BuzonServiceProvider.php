<?php

namespace App\Providers;

use App\Interfaces\BuzonRepositoryInterface;
use App\Repositories\BuzonRepository;
use Illuminate\Support\ServiceProvider;

class BuzonServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(BuzonRepositoryInterface::class, BuzonRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
