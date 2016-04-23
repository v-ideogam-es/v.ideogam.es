@extends('layouts.app')

@section('content')
    <h1>organization: create</h1>

    <form class="ui form" action="{{ route('organization.update', ['id' => $organization->id]) }}" method="POST">
        {{ csrf_field() }}

        {{ method_field('PUT') }}

        <div class="field">
            <label>
                Name: <input name="name" type="text" value="{{ $organization->name }}">
            </label>
        </div>


        <div class="field">
            <label>
                Nickname: <input name="nickname" type="text" value="{{ $organization->nickname }}">
            </label>
        </div>

        <div class="field">
            <label>
                URL: <input name="url" type="text" value="{{ $organization->url }}">
            </label>
        </div>

        <button class="ui primary button" type="submit">Save</button>
    </form>
@endsection
