@extends('layouts.app')

@section('content')
    <h1>platform: create</h1>

    <form class="ui form" action="{{ route('platform.store') }}" method="POST">
        {{ csrf_field() }}

        <div class="field">
            <label>
                Name: <input name="name" type="text">
            </label>
        </div>

        <div class="field">
            <label>
                Nickname: <input name="nickname" type="text">
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
                Organization:
                <select name="organization_id">
                    @foreach($organizations as $organization)
                        <option value="{{ $organization->id }}">
                            {{ $organization->nickname or $organization->name }}
                        </option>
                    @endforeach
                </select>
            </label>
        </div>

        <button class="ui primary button" type="submit">Save</button>
    </form>
@endsection
