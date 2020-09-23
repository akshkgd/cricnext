<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    public function team1()
    {
        return $this->belongsTo(Team::class, 'team_1');
    }
    public function team2()
    {
        return $this->belongsTo(Team::class, 'team_2');
    }
}
