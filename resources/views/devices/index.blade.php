@forelse ($devices as $device)
    {{ $device->organization()->nickname or $device->organization()->name }} {{ $device->name }}<br>
@empty
    No Devices
@endforelse