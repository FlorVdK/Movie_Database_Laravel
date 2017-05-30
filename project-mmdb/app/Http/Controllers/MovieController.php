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
		return view('movie.overview', ['movies' => $movies, 'search'=>$search]);
    }

    public function detail($id)
    {
        $movie = Movie::findOrFail($id);
        $votes = $movie->votes;
        $score = 0;
        $genre = $movie->genres;
        $director = $movie->directors;
        $comments = $movie->comments;
        $nrcomments = $comments->count();
        $users = $movie->users;
        foreach ($votes as $value) {
            $score = $score + $value->vote;
        }
        $nrvotes = $votes->count();
        if ($nrvotes>0) {
            $score = $score/$nrvotes;
        }
        $actors = $movie->actors;
        return view('movie.detail', [
            'movie' => $movie,
            'actors' => $actors,
            'votes' => $votes,
            'users' => $users,
            'genre' => $genre,
            'director' => $director,
            'comments' => $comments,
            'nrcomments' => $nrcomments,
            'score' => $score
        ]);
    }

    public function sort(Request $request)
    {
        $search = $request->input('sort');
        $sort = (int) $search;
        switch ($sort) {
            case '1':
            $movies = Movie::orderBy('title', 'asc')
            ->get();
                break;

            case '2':
            $movies = Movie::orderBy('release_date', 'desc')
            ->get();
                break;

            case '3':
            $movies = Movie::orderBy('release_date', 'asc')
            ->get();
                break;

            case '4':
            $movies = Movie::orderBy('title', 'asc')
            ->get();
                break;
            
            default:
                abort(404);
                break;
        }

        return view('movie.overview', ['movies' => $movies]);
    }
}
