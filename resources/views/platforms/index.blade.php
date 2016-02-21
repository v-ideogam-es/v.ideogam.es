@forelse ($platforms as $platform)
    {{ $platform->nickname or $platform->name }}
@empty
    <h3>No Platforms</h3>
@endforelse