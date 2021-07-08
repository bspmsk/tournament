<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    public $timestamps = false;

    public function teams()
    {
        return $this->hasMany(Team::class);
    }

    public function ScopeVacantForNewTeam(Builder $query)
    {
        return $query->withCount('teams')->orderBy('teams_count');
    }

    public function ScopeGroupStageGamesResults(Builder $query)
    {
        return $query->with('teams');
    }
}
