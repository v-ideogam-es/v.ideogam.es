@extends('layouts.app')

@section('content')
    @if (session('success'))
        <div class="ui success message">
            <i class="close icon" role="presentation"></i>
            <span class="header">{{ session('success') }}</span>
        </div>
    @endif

    <div class="ui cards">
        @each ('partials.game', $games, 'game')
    </div>
@endsection

@section('scripts')
    @if (session('success'))
        <script>
            $('.success .close').on('click', function() {
                $(this).closest('.message').transition('fade');
            });
        </script>
    @endif
@endsection