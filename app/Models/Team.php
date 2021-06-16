<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'division_id',
    ];

    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    public function games_home()
    {
        return $this->hasMany(Game::class,'team1','id');
    }

    public function games_visitor()
    {
        return $this->hasMany(Game::class,'team2','id');
    }
}
