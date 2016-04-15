@extends('layouts.app')

@section('content')
    <h1>device: edit</h1>

    <form class="ui form" action="{{ route('device.update', ['id' => $device->id]) }}" method="POST">
        {{ csrf_field() }}

        {{ method_field('PUT') }}

        <div class="field">
            <label>
                Name: <input name="name" type="text" value="{{ $device->name }}">
            </label>
        </div>

        <div class="field">
            <label>
                Nickname: <input name="name" type="text" value="{{ $device->nickname }}">
            </label>
        </div>

        <div class="field">
            <label>
                Description: <textarea name="description" rows="2">{{ $device->description }}</textarea>
            </label>
        </div>

        <div class="field">
            <label>
                Photo: <input name="photo" type="text" value="{{ $device->photo }}">
            </label>
        </div>

        <div class="field">
            <label>
                Price: <input name="price" type="text" value="{{ $device->price }}">
            </label>
        </div>

        <div class="field">
            <label>
                UPC-A: <input name="upc_a" type="text" value="{{ $device->upc_a }}">
            </label>
        </div>

        <div class="field">
            <label>
                URL: <input name="url" type="text" value="{{ $device->url }}">
            </label>
        </div>

        <div class="field">
            <label>
                Organization:
                <select name="organization_id">
                    @foreach($organizations as $organization)
                        @if ($device->organization_id == $organization->id)
                            <option value="{{ $organization->id }}" selected>
                        @else
                            <option value="{{ $organization->id }}">
                        @endif
                            {{ $organization->nickname or $organization->name }}
                        </option>
                    @endforeach
                </select>
            </label>
        </div>

        <button class="ui primary button" type="submit">Update</button>
    </form>
@endsection
