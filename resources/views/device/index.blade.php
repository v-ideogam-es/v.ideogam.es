<ul>
@forelse ($devices as $device)
    <li>{{ $device->organization()->nickname or $device->organization()->name }} - {{ $device->nickname or $device->name }}
@empty
    <li>No Devices
@endforelse
</ul>