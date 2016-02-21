<article class="h-product">
    <h1 class="p-name">{{ $game->name }}</h1>
    @if ($game->description)
        <p class="p-description">{{ $game->description }}</p>
    @endif
    <a href="{{ $game->publisher()->url }}" class="p-brand h-card">
        {{ $game->publisher()->nickname or $game->publisher()->name }}
    </a>
</article>
