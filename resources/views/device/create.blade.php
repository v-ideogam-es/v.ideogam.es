@extends('layouts.app')

@section('content')
    <h1>device: create</h1>

    <form class="ui form" action="{{ route('device.store') }}" method="POST">
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
                Price: <input name="price" type="text">
            </label>
        </div>

        <div class="field">
            <label>
                UPC-A: <input name="upc_a" type="text">
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
                    @each('partials.options.organization', $organizations, 'organization')
                </select>
            </label>
        </div>

        <div class="field">
            <label>
                Platform:
                <select name="platform_id">
                    @each('partials.options.platform', $platforms, 'platform')
                </select>
            </label>
        </div>

        <button class="ui primary button" type="submit">Save</button>
    </form>
@endsection
