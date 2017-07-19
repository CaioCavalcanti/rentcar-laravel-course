<?php

namespace App\Providers;

use App\Domain\Contracts\UsersContract;
use App\Models\Advertisement;
use App\Models\User;
use App\Observer\AdvertisementObserver;
use App\Observer\UserObserver;
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
        $this->registerObservers();
    }

    private function registerObservers()
    {
        User::observe(UserObserver::class);
        Advertisement::observe(AdvertisementObserver::class);
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
