@extends('layouts.app')

@section('content')
    <h1>release: index</h1>
    <div class="ui cards">
        @each ('partials.release', $releases, 'release')
    </div>
@endsection