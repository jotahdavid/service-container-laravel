<?php

namespace App\Providers;

use App\ReportGenerators\ReportGeneratorFactory;
use App\Repositories\UserRepository\EloquentUserRepository;
use App\Repositories\UserRepository\IUserRepository;
use App\Repositories\UserRepository\PrismaUserRepository;
use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            IUserRepository::class,
            EloquentUserRepository::class
        );

        $this->app->when(ReportGeneratorFactory::class)
            ->needs(IUserRepository::class)
            ->give(PrismaUserRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
