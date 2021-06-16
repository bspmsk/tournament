<?php


namespace App\Repositories\Regulations;

use App\Models\Stage;
use App\Repositories\Contracts\TournamentRepositoryContract;

class TwoDivisionsWithPlayoffTreeType implements TournamentRepositoryContract {

    public function register_new_team(string $name): void
    {
        // TODO: Implement register_new_team() method.
    }

    public function play_next_game_by_schedule(): void
    {
        // TODO: Implement play_next_game_by_schedule() method.
    }

    public function is_tournament_completed(): bool
    {
        // TODO: Implement is_tournament_completed() method.
    }

    public function get_results_of_stage(Stage $stage): object
    {
        // TODO: Implement get_results_of_stage() method.
    }
}
