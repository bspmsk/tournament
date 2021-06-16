<?php


use App\Repositories\Contracts\TournamentRepositoryContract;

if (!function_exists('regulations')) {
    function regulations()
    {
        return app(TournamentRepositoryContract::class);
    }
}
