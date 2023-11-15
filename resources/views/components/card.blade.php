<div style="background-color: #{{ $bgcolor }}">
    <h2>{{ $paciente }}</h2>
    @isset($fecha)
    {{ $fecha }}
    @endisset
    
    {{ $texto }}
</div>