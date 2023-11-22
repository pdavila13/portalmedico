@extends('layout')

@section('menu')
    <x-menu/>
@endsection

@section('content')
    <h1>Cuatro Médico</h1>
    <div class="flex">
        <x-card nombre="{{ $doctor->name }} {{ $doctor->middleName }}" bgcolor="A0A0FF" texto="{{ $doctor->speciality }}">
            <x-slot:botones>
                <a href="{{ route('doctors.edit', $doctor->id) }}" class="text-white bg-slate-300 m-4 p-1">Modificar</a>
                <form action="{{ route('doctors.destroy', $doctor->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-white bg-slate-300 m-4 p-1">Borrar</button>
                </form>
            </x-slot:botones>
        </x-card>
    </div>
@endsection
