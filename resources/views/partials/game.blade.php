 <article class="ui card">
    <div class="content h-product">
        <h1 class="header p-name"><a href="{{ route('game.show', ['id' => $game->id]) }}">{{ $game->name }}</a></h1>
        @if ($game->description)
            <p class="p-description">{{ $game->description }}</p>
        @endif
    </div>
     <div class="extra content">
        <span class="right floated">
            <a href="{{ $game->developer->url or '#' }}" class="p-brand h-card">
                {{ $game->developer->nickname or $game->developer->name }}
            </a>
            &nbsp;
            <i class="code icon" role="presentation"></i>
        </span>
     </div>
 </article>