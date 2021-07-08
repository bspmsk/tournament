<?php

namespace App\Providers;

use App\Repositories\Contracts\TournamentRepositoryContract;
use App\Repositories\Regulations\TwoDivisionsWithPlayoffTreeType;
use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public $singletons = [
        TournamentRepositoryContract::class => TwoDivisionsWithPlayoffTreeType::class
    ];

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->isLocal()) {
            $this->app->register(IdeHelperServiceProvider::class);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
