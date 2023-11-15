<div style="background-color: #{{ $bgcolor }}">
    <h2>{{ $paciente }}</h2>
    @isset($fecha)
        <h3>{{ $fecha }}</h3>
    @endisset
    
    {{ $texto }}
</div>