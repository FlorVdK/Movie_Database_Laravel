<?php

namespace App\Http\Controllers;

use App\Director;
use App\Movie;

use Illuminate\Http\Request;

class DirectorController extends Controller
{
    //
    public function detail($id)
    {
    	$director = Director::findOrFail($id);
    	$movies = $director->movies()->paginate(18);
    	return view('director.detail', ['movies' => $movies, 'director'=>$director]);
    }

    public function sort(Request $request)
    {
        $search = $request->input('sort');
        $directorid = $request->input('invisible');
        $directorid = (int)$directorid;
        $sort = (int) $search;
        $director = Director::findOrFail($directorid);
        switch ($sort) {
            case '1':
            $movies = Movie::orderBy('title', 'asc')
            ->where('director_id', $directorid)
            ->paginate(18);
                break;

            case '2':
            $movies = Movie::orderBy('release_date', 'desc')
            ->where('director_id', $directorid)
            ->paginate(18);
                break;

            case '3':
            $movies = Movie::orderBy('release_date', 'asc')
            ->where('director_id', $directorid)
            ->paginate(18);
                break;

            case '4':
            $movies = Movie::orderBy('title', 'asc')
            ->where('director_id', $directorid)
            ->paginate(18);
                break;
            
            default:
                abort(404);
                break;
        }

        return view('director.detail', ['movies' => $movies, 'director'=>$director]);
    }
}
