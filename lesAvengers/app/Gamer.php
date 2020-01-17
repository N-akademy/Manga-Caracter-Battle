<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gamer extends Model
{
    protected $fillable = ['name','attack','lifePoint','power','team_id'];
    public function gamer()
    {
        return $this->belongsTo('App\Gamer');
    }
}
