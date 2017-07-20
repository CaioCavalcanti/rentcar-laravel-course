<?php

namespace App\Providers;

use AdvertisementRepository;
use App\Domain\Contracts\AdvertisementContract;
use App\Domain\Contracts\UserContract;
use App\Models\Advertisement;
use App\Models\User;
use App\Observer\AdvertisementObserver;
use App\Observer\UserObserver;
use Illuminate\Support\ServiceProvider;
use UserRepository;

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
        $this->app->bind(UserContract::class, UserRepository::class);
        $this->app->bind(AdvertisementContract::class, AdvertisementRepository::class);
    }
}
