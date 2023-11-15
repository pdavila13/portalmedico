@extends('layout')

@section('menu')
    <x-menu/>
@endsection

@section('content')
    <h1>Cuatro Médico</h1>
    <div class="flex">
        @foreach ($doctors as $doctor)
        <x-card paciente="{{ $doctor[1] }} {{ $doctor[2] }}" bgcolor="A0A0FF" texto="{{ $doctor[3] }}">
            <x-slot:botones>
                <button type="button" class="text-white bg-slate-300 m-4 p-2">Ver</button>
            </x-slot:botones>    
        </x-card>
        @endforeach
    </div>
@endsection