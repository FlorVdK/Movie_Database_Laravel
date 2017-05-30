<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //
    public function comments()
    {
        return $this->hasMany('App\Comment', 'movie_id');
    }

    public function votes()
    {
        return $this->hasMany('App\Vote', 'movie_id');
    }

    public function directors()
    {
        return $this->belongsTo('App\Director', 'director_id');
    }

    public function genres()
    {
        return $this->belongsTo('App\Genre', 'genre_id');
    }

    public function actors()
    {
        return $this->belongsToMany('App\Actor', 'Actorsinmovies');
    }

    public function users()
    {
        return $this->belongsToMany('App\User', 'Comments');
    }
}
