<?php

namespace App\Http\Controllers;

use App\Actor;

use Illuminate\Http\Request;

class ActorController extends Controller
{
    //
    public function overview()
    {
    	$actors = Actor::orderBy('name', 'asc')
    		->get();
		return view('actor.overview', ['actors' => $actors]);
    }

    public function detail($id)
    {
    	$actor = Actor::findOrFail($id);
    	$movies = $actor->movies;
    	return view('actor.detail', ['movies' => $movies]);
    }
}
