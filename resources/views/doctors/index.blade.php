@extends('layout')

@section('menu')
    <x-menu/>
@endsection

@section('content')
    <h1>Cuatro Médico</h1>
    <div class="flex">
        @foreach ($doctors as $key => $doctor)
        <x-card paciente="{{ $doctor[1] }} {{ $doctor[2] }}" bgcolor="A0A0FF" texto="{{ $doctor[3] }}">
            <x-slot:botones>
                <a href="{{ route('doctors.show', $doctor[0]) }}" class="text-white bg-slate-300 m-4 p-1">Ver</a>
            </x-slot:botones>    
        </x-card>
        @endforeach
    </div>
@endsection