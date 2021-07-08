<?php


namespace App\Repositories\Regulations;

use App\Models\Division;
use App\Models\Stage;
use App\Models\Team;
use App\Repositories\Contracts\TournamentRepositoryContract;
use Illuminate\Database\Eloquent\Model;

class TwoDivisionsWithPlayoffTreeType implements TournamentRepositoryContract
{

    public function register_new_team(string $name): void
    {

        $new_team = Team::create([
            'name' => $name,
            'division_id' => Division::VacantForNewTeam()->first()->id
        ]);

//        dd($new_team->division_id);
//        $new_team->division_id = $divisions->;


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
