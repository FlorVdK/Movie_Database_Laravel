@extends('layouts.master')
@section('title', $movie->title)
@section('content')
    @if ($movie)
        <div class="body item_body">
            <div>
                <h1>
                    <span> <a href="#" title="{{ $movie->title }} ({{ $movie->release_date }})"> {{ $movie->title }} ({{ $movie->release_date }})</a> </span>
                </h1>
                <div class="movie_info_header" >
                    MMDB:
                    <strong>
                        <span style="color:green;">
                            @if ($votes)
                                {{ $score }} / 10
                            @endif
                        </span>
                    </strong>
                </div>
            </div>
            <div class="clear">              
            </div>
            <div class="movie_info">
                <div class="movie_thumb">
                    <img src="{{ asset($movie->imageurl)}} " border="0" width="158" alt="{{ $movie->title }}">
                </div>
                <div class="movie_data">
                    <div class="synopsis">
                        {{ $movie->description}}
                    </div>
                    <table width="100%" border="0" cellspacing="5" cellpadding="0"> 
                        <tbody>
                            <tr>
                                <th width="100" valign="top">Genres</th>
                                <td valign="top"><a href="#">{{ $genre->genre }}</a></td>
                            </tr>
                            <tr></tr>
                            <tr>
                                <th width="100" valign="top">Director</th>
                                <td valign="top"><a href="{{ url('/director')}}/{{ $director->id }}">{{ $director->name }}</a></td>
                            </tr>
                            <tr>
                                <th width="100" valign="top">Starring</th>
                                <td valign="top">
                                    <span class="movie_actors">
                                        @if ($actors)
                                            @forelse ($actors as $actor)
                                            <a href="{{ url('/actor')}}/{{ $actor->id }}"> {{ $actor->name }} </a>
                                            , 
                                            @empty
                                                <p>No blogposts to show!</p>
                                            @endforelse

                                        @endif
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>                
            </div>
        </div>
    @endif

    @endsection