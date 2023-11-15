<div style="background-color: #{{ $bgcolor }}" class="flex-initial w-32 m-2 p-4">
    <h2>{{ $paciente }}</h2>
    @isset($fecha)
    {{ $fecha }}
    @endisset
    
    {{ $texto }}
</div>