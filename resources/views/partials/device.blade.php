<article class="ui card h-product">
    <div class="content">
        <h1 class="header p-name">
            <a href="{{ route('device.show', ['id' => $device->id]) }}">
                {{ $device->nickname or $device->name }}
            </a>
        </h1>
        @if ($device->description)
            <p class="p-description">{{ $device->description }}</p>
        @endif
    </div>
    <div class="extra content">
        <span class="right floated">
            <i class="building outline icon" role="presentation"></i>
            <a href="{{ route('organization.show', ['id' => $device->organization->id]) }}" class="p-brand h-card">
                {{ $device->organization->nickname or $device->organization->name }}
            </a>
        </span>
    </div>
</article>