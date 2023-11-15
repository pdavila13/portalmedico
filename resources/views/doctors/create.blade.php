@extends('layout')

@section('menu')
    <x-menu/>
@endsection

@section('content')
    <h1>Cuatro Médico</h1>
    <div class="flex">
        <x-card nombre="Nuevo Doctor" bgcolor="A0A0FF" ancho=80>
            <x-slot:texto>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" value="">
            <br>&nbsp;<br>
            <label for="especialidad">Especialidad:</label>
            <input type="text" name="especialidad" id="especialidad" value="">
            </x-slot:texto>

            <x-slot:botones>
                <a href="{{ route('doctors.create', 0) }}" class="text-white bg-slate-300 m-4 p-1">Ver</a>
            </x-slot:botones>    
        </x-card>
    </div>
@endsection