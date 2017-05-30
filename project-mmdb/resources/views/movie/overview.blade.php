@extends('layouts.master')
@section('title', 'Movies')
@section('content')
<p class="breadcrumb"><a href="{{ url('/') }}/">Movies</a> </p>
        <div class="sort_bar">
            <a href="/?genres">Generes</a> |
            {!! Form::open(array('url' => 'movie/sort', 'method' => 'GET')) !!}
            {!! Form::select('sort', array('1' => 'Sort By', '2' => 'Release &darr;', '3' => 'Release &uarr;', '4' => 'Alphabet'), '', array('onchange' => 'this.form.submit()')) !!}
            {!! Form::close() !!}
        </div>

    @if ($movies)
                @forelse ($movies as $movie)
                    <div class="item">
                        <a href="{{ url('/movie')}}/{{ $movie->id }}" title="{{ $movie->title }}">{{ str_limit($movie->title,20) }} ({{ $movie->release_date }})<img src="{{ asset($movie->imageurl)}} " border="0" width="150" height="225" alt="{{ $movie->title }}"></a>
                    </div>
                @empty
                    <p>No movies to show!</p>
                @endforelse

            @endif
    {{ $movies->links() }}

    @endsection
    