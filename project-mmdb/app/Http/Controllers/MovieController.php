<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Comment;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class MovieController extends Controller
{
    //
    public function overview()
    {
        $search = null;
    	$movies = Movie::orderBy('title', 'asc')
    		->paginate(18);
		return view('movie.overview', ['movies' => $movies, 'search'=>$search]);
    }

    public function search(Request $request)
    {
    	$search = $request->input('search');

    	$request->flash();

    	$movies = Movie::orderBy('title', 'asc')
    		->where('title', 'like', '%' . $request->input('search').'%')
    		->paginate(18);
		return view('movie.overview', ['movies' => $movies, 'search'=>$search]);
    }

    public function detail($id)
    {
        $movie = Movie::findOrFail($id);
        $votes = $movie->votes;
        $score = 0;
        foreach ($votes as $value) {
            $score = $score + $value->vote;
        }
        $nrvotes = $votes->count();
        if ($nrvotes>0) {
            $score = $score/$nrvotes;
        }
        /*foreach ($movie->users as $value) {
            foreach ($value->comments as $value2) {
                var_dump($value2);
            }            
        }*/

        /*$comments = Movie::orderBy('id', 'asc')
            ->join('comments','movies.id','=','comments.movie_id')
            ->join('users','users.id','=','comments.user_id')
            ->select('comments.id as id','users.email as email', 'comments.description as description')
            ->get();*/
            
        return view('movie.detail', [
            'movie' => $movie,
            'score' => $score/*,
            'comments' => $comments*/
        ]);
    }

    public function sort(Request $request)
    {
        $input = $request->input('sort');
        $search = $request->input('search');
        $sort = (int) $input;
        switch ($sort) {
            case '1':
            $movies = Movie::orderBy('title', 'asc')  
            ->where('title', 'like', '%' . $request->input('search').'%')          
            ->paginate(18);
                break;

            case '2':
            $movies = Movie::orderBy('release_date', 'desc')
            ->where('title', 'like', '%' . $request->input('search').'%')
            ->paginate(18);
                break;

            case '3':
            $movies = Movie::orderBy('release_date', 'asc')
            ->where('title', 'like', '%' . $request->input('search').'%')
            ->paginate(18);
                break;

            case '4':
            $movies = Movie::orderBy('title', 'asc')
            ->where('title', 'like', '%' . $request->input('search').'%')
            ->paginate(18);
                break;
            
            default:
                abort(404);
                break;
        }


        return view('movie.overview', ['movies' => $movies, 'search'=>$search]);
    }

    public function comment(Request $request)
    {
        if(Auth::check()){
            $id = $request->input('id');
            $movie = Movie::findOrFail($id);
            $this->validate($request, [
                'comment' => 'required|max:255',
            ]);
            $test = new Comment;
            $comment = $request->input('comment');
            $test->description = $comment;
            $test->user_id = Auth::user()->id;
            $test->movie_id = $id;
            $test->save();
            /*$commentIn = Comment::create(['description' => $comment,'user_id' => Auth::user()->id,  'movie_id' => $id]);*/
            /*Auth::user()->comments()->create([
                'description' => $comment,
                'movie_id' => $id,
                ]);*/
        }else{
            return redirect('/login');
        }
        return redirect()->back();
    }
}

