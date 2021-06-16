<?php

namespace App\Repositories\Contracts;

use App\Models\Stage;

interface TournamentRepositoryContract
{
    /**
     * Register new team in tournament.
     * @return void
     */
    public function register_new_team(string $name): void;

    /**
     * Play next game by schedule.
     * @return bool Returns true if the tournament is not yet complete
     */
    public function play_next_game_by_schedule(): void;

    /**
     * Is tournament completed?
     * @return bool
     */
    public function is_tournament_completed(): bool;

    /**
     * Get tournament table by stage.
     * @param Stage $stage
     * @return object
     */
    public function get_results_of_stage(Stage $stage): object;
}
