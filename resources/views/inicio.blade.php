<html>
    <h1>Vista</h1>
    <p>hola {{ $name }} - {{ $surname }}</p>

    <!-- Comprobar el parametro existe -->
    @isset($phone)
        <p>Teléfono: {{ $phone }}</p>
    @endisset
</html>