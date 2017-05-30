<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actorsinmovies extends Model
{
    //
    public function actorsinmovies()
    {
        return $this->hasMany('App\Actorsinmovies', 'actor_id');
    }
}
