@extends('layouts.app')

@section('content')
    @include('partials.device', ['device' => $device])
@endsection