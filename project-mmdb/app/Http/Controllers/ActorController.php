<?php

namespace App\Http\Controllers;

use App\Actor;
use App\Movie;

use Illuminate\Http\Request;

class ActorController extends Controller
{
    //Overview of actors order by alphabet
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
        $input = $request->input('sort');
        $actorid = $request->input('actorid');
        $actorid = (int)$actorid;
        $sort = (int) $input;
        $actor = Actor::findOrFail($actorid);
        switch ($sort) {
            case '1':
            $movies= $actor->movies()->orderBy('title', 'asc')->paginate(18);
            //$sort->sortByDesc('title');
                break;

            case '2':
            $movies= $actor->movies()->orderBy('release_date', 'desc')->paginate(18);
                break;

            case '3':
            $movies= $actor->movies()->orderBy('release_date', 'asc')->paginate(18);
                break;

            case '4':
            $movies= $actor->movies()->orderBy('title', 'asc')->paginate(18);
                break;
            
            default:
                abort(404);
                break;
        }

        return view('actor.detail', ['movies' => $movies, 'actor'=>$actor]);
    }
}
