<?php

namespace App\Http\Controllers;

use App\Movie;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class MovieController extends Controller
{
    //
    public function overview()
    {
    	$movies = Movie::orderBy('title', 'asc')
    		->get();
		return view('movie.overview', ['movies' => $movies]);
    }

    public function search(Request $request)
    {
    	$search = $request->input('search');
    	var_dump($search);

    	$request->flash();

    	$movies = Movie::orderBy('title', 'asc')
    		->where('title', 'like', '%' . $request->input('search').'%')
    		->get();
		return view('movie.overview', ['movies' => $movies]);
    }

    public function detail($id)
    {
        $movie = Movie::findOrFail($id);
        $votes = $movie->votes;
        $score = 0;
        $genre = $movie->genres;
        $director = $movie->directors;
        foreach ($votes as $value) {
            $score = $score + $value->vote;
        }
        $actors = $movie->actors;
        return view('movie.detail', [
            'movie' => $movie,
            'actors' => $actors,
            'votes' => $votes,
            'genre' => $genre,
            'director' => $director,
            'score' => $score
        ]);
    }

    public function sort(Request $request)
    {
        $search = $request->input('search');
        var_dump($search);

        $request->flash();

        $movies = Movie::orderBy('title', 'asc')
            ->where('title', 'like', '%' . $request->input('search').'%')
            ->get();
        return view('movie.overview', ['movies' => $movies]);
    }
}
