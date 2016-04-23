@extends('layouts.app')

@section('content')
    @include('partials.organization', ['organization' => $organization])
@endsection