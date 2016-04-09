@extends('layouts.app')

@section('content')
    <h2>game: show</h2>

    <h3>{{ $game->nickname or $game->name }}</h3>

    <p>{{ $game->description }}</p>

    <p>{{ $game->photo }}</p>

    <p>{{ $game->url }}</p>

    <p>{{ $game->developer->nickname or $game->developer->name }}</p>
@endsection
