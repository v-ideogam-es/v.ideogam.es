<article class="h-product">
    <h1 class="p-name">{{ $game->name }}</h1>
    @if ($game->description)
        <p class="p-description">{{ $game->description }}</p>
    @endif
    <a href="{{ $game->developer()->url or '#' }}" class="p-brand h-card">
        {{ $game->developer()->nickname or $game->developer()->name }}
    </a>
</article>
