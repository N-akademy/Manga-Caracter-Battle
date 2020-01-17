<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name'
    ];

    public function gamer ()
    {
        return $this->hasmany('App\Gamer');
    }
}
