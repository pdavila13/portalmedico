<div style="background-color: #{{ $bgcolor }}" class="flex-initial w-32 m-2 p-4">
    <h2>Editar</h2>
    
    <label for="{{ $nombreCampo }}">{{ $nombreLabel }}</label>
    <input type="text" name="{{ $nombreCampo }}" id="{{ $nombreCampo }}" value="{{ $nombre }}">

    <label for="{{ $especialidadCampo }}">{{ $nombreLabel }}</label>
    <input type="text" name="{{ $especialidadCampo }}" id="{{ $especialidadCampo }}" value="{{ $especialidad }}">


    @isset($botones)
    <div>
        {{ $botones }}
    </div>
    @endisset
    
</div>