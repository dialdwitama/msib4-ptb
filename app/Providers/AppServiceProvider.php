<?php

declare(strict_types=1);


namespace App\Providers;

use Maatwebsite\Excel\Excel;
use Maatwebsite\Excel\ExcelServiceProvider;
use Maatwebsite\Excel\Imports\ExcelServiceProvider as ExcelImportsServiceProvider;
use Illuminate\Support\ServiceProvider;

final class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

    }
}
