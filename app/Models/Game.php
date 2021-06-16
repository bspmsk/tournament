<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'team_1',
        'team_2',
        'team_1_score',
        'team_2_score',
        'stage_id',
    ];

    public function team_home()
    {
        return $this->belongsTo(Team::class,'team1');
    }

    public function team_visitor()
    {
        return $this->belongsTo(Team::class,'team2');
    }

    public function stage()
    {
        return $this->belongsTo(Stage::class);
    }
}
