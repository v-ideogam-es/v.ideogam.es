@extends('layouts.app')

@section('content')
    <h1>game: create</h1>

    <form class="ui form" action="{{ route('game.store') }}" method="POST">
        {{ csrf_field() }}

        <div class="field">
            <label>
                Name: <input name="name" type="text">
            </label>
        </div>

        <div class="field">
            <label>
                Description: <textarea name="description" rows="2"></textarea>
            </label>
        </div>

        <div class="field">
            <label>
                Photo: <input name="photo" type="text">
            </label>
        </div>

        <div class="field">
            <label>
                URL: <input name="url" type="text">
            </label>
        </div>

        <div class="field">
            <label>
                Developer:
                <select name="developer_id">
                    @foreach($developers as $developer)
                        <option value="{{ $developer->id }}">
                            {{ $developer->nickname or $developer->name }}
                        </option>
                    @endforeach
                </select>
            </label>
        </div>

        <button class="ui primary button" type="submit">Save</button>
    </form>
@endsection
