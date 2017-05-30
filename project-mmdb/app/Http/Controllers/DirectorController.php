<?php

namespace App\Http\Controllers;

use App\Director;

use Illuminate\Http\Request;

class DirectorController extends Controller
{
    //
    public function detail($id)
    {
    	$director = Director::findOrFail($id);
    	$movies = $director->movies;
    	return view('director.detail', ['movies' => $movies]);
    }
}
