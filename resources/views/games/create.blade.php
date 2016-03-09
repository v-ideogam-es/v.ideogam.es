@extends('layouts.app')

@section('content')
    <form class="ui form" action="{{ route('games.store') }}" method="POST">
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
