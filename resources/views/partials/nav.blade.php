<nav class="ui menu">
    <div class="header item">v.ideogam.es</div>
    <a class="@if (request()->path() === 'device') active @endif item" href="{{ route('device.index') }}">Devices</a>
    <a class="item" href="{{ route('game.index') }}">Games</a>
    <a class="item" href="{{ route('organization.index') }}">Organizations</a>
    <a class="item" href="{{ route('release.index') }}">Releases</a>
</nav>