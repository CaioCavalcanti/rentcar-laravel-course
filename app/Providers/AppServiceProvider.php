<?php

namespace App\Providers;

use App\Domain\Contracts\UsersContract;
use Illuminate\Support\ServiceProvider;
use UsersRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerRepositories();
    }

    private function registerRepositories() {
        $this->app->bind(UsersContract::class, UsersRepository::class);
    }
}
