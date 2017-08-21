@extends('layouts.master')
@section('title', $movie->title)
@section('content')

        <p class="breadcrumb"><a href="{{ url('/') }}/">Movies</a> &raquo; @yield('title') </p>
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
                            @if ( $movie->votes)
                                {{ $score }} / 10
                            @else   
                                no scores 
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
                                <td valign="top"><a href="#">{{ $movie->genres->genre }}</a></td>
                            </tr>
                            <tr></tr>
                            <tr>
                                <th width="100" valign="top">Director</th>
                                <td valign="top"><a href="{{ url('/director')}}/{{ $movie->directors->id }}">{{ $movie->directors->name }}</a></td>
                            </tr>
                            <tr>
                                <th width="100" valign="top">Starring</th>
                                <td valign="top">
                                    <span class="movie_actors">
                                        @if ($movie->actors)
                                            @forelse ($movie->actors as $actor)
                                            <a href="{{ url('/actor')}}/{{ $actor->id }}"> {{ $actor->name }} </a>
                                            , 
                                            @empty
                                                <p>No actors to show!</p>
                                            @endforelse

                                        @endif
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>                
            </div>
            <div class="page_content">
                <div class="links_left_container">
                    <div class="comment_box">
                        <h1>
                            <span><a href="#" title="{{ $movie->title }} ({{ $movie->release_date }}) Comments">{{ $movie->title }}  Comments</a>
                            </span>
                        </h1>
                        {!! Form::open(array('url' => 'movie/comment', 'method' => 'POST')) !!}
                        {{ Form::textarea('comment', null, ['size' => '45x5']) }}
                        {{ Form::hidden('id', $movie->id) }}
                        {!! Form::submit('comment', array('class' => 'comment_button')) !!}
                        {!! Form::close() !!}
                        @if ($movie->comments)
                            <p> {{ $movie->comments->count() }} comments</p>
                            @forelse ($movie->comments as $comment)
                                <p>{{ $comment->description}}</p>                                
                                <p> {{ $comment->name }}</p>
                            @empty
                                <p>No comments to show!</p>
                            @endforelse
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endif

    @endsection