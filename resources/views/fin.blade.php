<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fin</title>
</head>
<body>
    <h1>Ruta Fin</h1>
    <a href="/inicio">Ir a inicio</a><br>
    <a href="{{ url('/inicio') }}">Ir a inicio</a><br>
    <a href="{{ route('index', ['name' => 'Paolo', 'surname' => 'Davila']) }}">Ir a inicio</a>
    <br>
    <form method="POST" action="{{ route ('savefile') }}" enctype="multipart/form-data">
        @csrf
        <input type="text" name="nombre" id="nombre"><br>
        <input type="file" name="img" id="img"><br>
        <button type="submit">Enviar</button>
    </form>

    
    @php
        $codigoHTML = "<strong>texto en negrita</strong>";
    @endphp
    {!! $codigoHTML !!} <!-- Introducir formato HTLML -->
    <br>
    {{ $codigoHTML }} <!-- Introducir codigo HTLML  -->
</body>
</html>