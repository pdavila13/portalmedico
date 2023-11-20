@extends('layout')

@section('menu')
    <x-menu/>
@endsection

@section('content')
    <h1>Cuatro Médico</h1>

    @foreach ($errors->all() as $error )
        {{ $error }}<br/>
    @endforeach

    <div class="flex">
        <form method="POST" action="{{ route('doctors.store') }}">
            @csrf
            <x-card nombre="Nuevo Doctor" bgcolor="A0A0FF" ancho=80>
                <x-slot:texto>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}">
                @error('nombre')
                    {{ $message }}
                @enderror
                <br>&nbsp;<br>
                <label for="especialidad">Especialidad:</label>
                <input type="text" name="especialidad" id="especialidad" value="{{ old('especialidad') }}">
                @error('especialidad')
                    {{ $message }}
                @enderror
                </x-slot:texto>

                <x-slot:botones>
                    <button type="submit" class="text-white bg-slate-300 m-4 p-1">Guardar</button>
                </x-slot:botones>    
            </x-card>
        </form>
    </div>
@endsection