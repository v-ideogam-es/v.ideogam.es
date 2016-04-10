<article class="ui card h-product">
    <div class="content">
        <h1 class="header p-name">
            <a href="{{ route('release.show', ['id' => $release->id]) }}">{{ $release->game->name }}</a>
        </h1>
        @if ($release->game->description)
            <p class="p-description">{{ $release->game->description }}</p>
        @endif
    </div>
    <div class="extra content">
        <span class="left floated">
            <i class="building outline icon" role="presentation"></i>
            <a href="{{ route('organization.show', ['id' => $release->publisher->id]) }}" class="p-brand h-card">
                {{ $release->publisher->nickname or $release->publisher->name }}
            </a>
        </span>
        <span class="right floated">
            <i class="code icon" role="presentation"></i>
            <a href="{{ route('organization.show', ['id' => $release->game->developer->id]) }}" class="h-card">
                {{ $release->game->developer->nickname or $release->game->developer->name }}
            </a>
        </span>
    </div>
</article>