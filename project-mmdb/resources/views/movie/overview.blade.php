@extends('layouts.master')
@section('title', 'Movies')
@section('content')

    @if ($movies)
                @forelse ($movies as $movie)
                    <div class="item">
                        <a href="{{ url('/movie')}}/{{ $movie->id }}" title="{{ $movie->title }}">{{ str_limit($movie->title,20) }} ({{ $movie->release_date }})<img src="{{ asset($movie->imageurl)}} " border="0" width="150" height="225" alt="{{ $movie->title }}"></a>
                    </div>
                @empty
                    <p>No movies to show!</p>
                @endforelse

            @endif


    @endsection
    