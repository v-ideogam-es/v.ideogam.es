@extends('layouts.app')

@section('content')
    <h1>organization: create</h1>

    <form class="ui form" action="{{ route('organization.store') }}" method="POST">
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
                URL: <input name="url" type="text">
            </label>
        </div>

        <button class="ui primary button" type="submit">Save</button>
    </form>
@endsection
