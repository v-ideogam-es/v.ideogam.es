@extends('layouts.app')

@section('content')
    <h1>game: edit</h1>

    <form class="ui form" action="{{ route('game.update', ['id' => $game->id]) }}" method="POST">
        {{ csrf_field() }}

        {{ method_field('PUT') }}

        <div class="field">
            <label>
                Name: <input name="name" type="text" value="{{ $game->name }}">
            </label>
        </div>

        <div class="field">
            <label>
                Description: <textarea name="description" rows="2">{{ $game->description }}</textarea>
            </label>
        </div>

        <div class="field">
            <label>
                Photo: <input name="photo" type="text" value="{{ $game->photo }}">
            </label>
        </div>

        <div class="field">
            <label>
                URL: <input name="url" type="text" value="{{ $game->url }}">
            </label>
        </div>

        <div class="field">
            <label>
                Developer:
                <select name="developer_id">
                    @foreach($developers as $developer)
                        @if ($game->developer_id == $developer->id)
                            <option value="{{ $developer->id }}" selected>
                        @else
                            <option value="{{ $developer->id }}">
                        @endif
                            {{ $developer->nickname or $developer->name }}
                        </option>
                    @endforeach
                </select>
            </label>
        </div>

        <button class="ui primary button" type="submit">Update</button>
    </form>
@endsection
