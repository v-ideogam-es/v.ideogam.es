<nav class="ui menu">
    <div class="header item">v.ideogam.es</div>
    @foreach (['device', 'game', 'organization', 'release'] as $resource)
        @if (request()->path() === $resource)
            <a class="active item" href="{{ route($resource . '.index') }}">{{ ucfirst(str_plural($resource)) }}</a>
        @else
            <a class="item" href="{{ route($resource . '.index') }}">{{ ucfirst(str_plural($resource)) }}</a>
        @endif
    @endforeach
</nav>