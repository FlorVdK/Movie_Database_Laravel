<?php

namespace App\Http\Controllers;

use App\Actor;
use App\Movie;

use Illuminate\Http\Request;

class ActorController extends Controller
{
    //
    public function overview()
    {
    	$actors = Actor::orderBy('name', 'asc')
    		->paginate(18);
		return view('actor.overview', ['actors' => $actors]);
    }

    public function detail($id)
    {
    	$actor = Actor::findOrFail($id);
    	$movies = $actor->movies()->paginate(18);
    	return view('actor.detail', ['movies' => $movies, 'actor'=>$actor]);
    }

    public function sort(Request $request)
    {
        $search = $request->input('sort');
        $actorid = $request->input('invisible');
        $actorid = (int)$actorid;
        $sort = (int) $search;
        $actor = Actor::findOrFail($actorid);
        switch ($sort) {
            case '1':
            $movies = Movie::orderBy('title', 'asc')
            ->where('actor_id', $actorid)
            ->paginate(18);
                break;

            case '2':
            $movies = Movie::orderBy('release_date', 'desc')
            ->where('actor_id', $actorid)
            ->paginate(18);
                break;

            case '3':
            $movies = Movie::orderBy('release_date', 'asc')
            ->where('actor_id', $actorid)
            ->paginate(18);
                break;

            case '4':
            $movies = Movie::orderBy('title', 'asc')
            ->where('actor_id', $actorid)
            ->paginate(18);
                break;
            
            default:
                abort(404);
                break;
        }

        return view('actor.detail', ['movies' => $movies, 'actor'=>$actor]);
    }
}
