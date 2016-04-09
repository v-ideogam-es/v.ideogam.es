 <article class="ui card">
    <div class="content h-product">
        <h1 class="header p-name">{{ $game->name }}</h1>
        @if ($game->description)
            <p class="p-description">{{ $game->description }}</p>
        @endif
    </div>
     <div class="extra content">
        <span class="right floated">
            <a href="{{ $game->developer->url or '#' }}" class="p-brand h-card">
                {{ $game->developer->nickname or $game->developer->name }}
            </a>
        </span>
     </div>
 </article>