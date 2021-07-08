<?php

namespace App\Services;

use App\Models\Division;
use App\Models\Game;
use App\Models\Stage;
use App\Models\Team;
use Illuminate\Support\Facades\DB;

class TournamentService
{
    static public function clear_old_games_results()
    {
        DB::table('games')->truncate();
        DB::table('teams')->truncate();
    }

    static public function register_teams(int $teams_qty)
    {
        $name = 'A';
        while ($teams_qty) {

            regulations()->register_new_team($name);
            $teams_qty--;
            $name++;
        }
    }

    static public function play_all_tournament_games()
    {

    }

    static public function getGamesResultsByStage(): array
    {
        // TODO: function get_GroupStageGamesResults
    }

    static public function teams_list_group_by_division(): array
    {
        foreach (
            Division::query()->with('teams')->get()
            as $division
        )
            $model[$division->name] = $division->teams->toArray();

        return $model;
    }


}
