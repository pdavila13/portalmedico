@extends('layout')

@section('menu')
    <x-menu/>
@endsection

@section('content')
    <h1>Cuatro Médico</h1>
    <div class="flex">
        <x-card nombre="{{ $doctor[1] }} {{ $doctor[2] }}" bgcolor="A0A0FF" texto="{{ $doctor[3] }}">
            <x-slot:botones>
                <a href="{{ route('doctors.create') }}" class="text-white bg-slate-300 m-4 p-1">Crear</a>
                <a href="{{ route('doctors.edit', $doctor[0]) }}" class="text-white bg-slate-300 m-4 p-1">Modificar</a>
                <form action="{{ route('doctors.destroy', $doctor[0]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-white bg-slate-300 m-4 p-1">Borrar</button>
                </form>
            </x-slot:botones>    
        </x-card>
    </div>
@endsection