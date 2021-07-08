<?php

namespace App\Http\Livewire;

use App\Models\Division;
use App\Services\TournamentService;
use Livewire\Component;

class Tornament extends Component
{
    public $teams_qty;
    public $results;

    public function mount()
    {
        $this->teams_qty = 13;
    }

    public function get_tournament_results()
    {
        TournamentService::clear_old_games_results();
        TournamentService::register_teams($this->teams_qty);
//        TournamentService::play_all_tournament_games();
    }

    public function render()
    {

        TournamentService::teams_list_group_by_division();

        return view('livewire.tornament',

        );
    }
}
