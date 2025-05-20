<?php

namespace App\Providers;

use App\Models\BarangKeluar;
use App\Models\BarangMasuk;
use App\Observers\BarangKeluarObserver;
use App\Observers\BarangMasukObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        BarangKeluar::observe(BarangKeluarObserver::class); // Add this lin
        BarangMasuk::observe(BarangMasukObserver::class); // Add this line
    }
}
