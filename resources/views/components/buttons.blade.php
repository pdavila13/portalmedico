<div style="background-color: {{ $bgcolor }}">
    <!-- Well begun is half done. - Aristotle -->
    @foreach ($botones as $boton)
        <button> {{ $boton }}</button> 
    @endforeach
</div>