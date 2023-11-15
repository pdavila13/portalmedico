@isset($ancho)
<div style="background-color: #{{ $bgcolor }}" class="flex-initial w-{{$ancho}} m-2 p-4">
@else
<div style="background-color: #{{ $bgcolor }}" class="flex-initial w-32 m-2 p-4">
@endisset
    <h2>{{ $nombre }}</h2>
    @isset($fecha)
    {{ $fecha }}
    @endisset
    
    {{ $texto }}
    @isset($botones)
    <div>
        {{ $botones }}
    </div>
    @endisset
    
</div>