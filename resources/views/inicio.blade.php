<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista</title>
</head>
<body>
    <h1>Vista Inicio</h1>
    <p>hola {{ $name }} - {{ $surname }}</p>

    <!-- Comprobar el parametro existe -->
    @isset($phone)
        <p>Teléfono: {{ $phone }}</p>
    @endisset

</body>
</html>