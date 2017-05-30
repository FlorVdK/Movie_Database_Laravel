@extends('layouts.master')
@section('title', 'Actors')
@section('content')
    @if ($actors)
                @forelse ($actors as $actor)
                    <div class="item">
                        <a href="{{ url('/actor')}}/{{ $actor->id }}" title="{{ $actor->name }}">{{ str_limit($actor->name,20) }} <img src="{{ asset($actor->imageurl)}} " border="0" width="150" height="225" alt="{{ $actor->name }}"></a>
                    </div>
                @empty
                    <p>No actors to show!</p>
                @endforelse

            @endif


    @endsection