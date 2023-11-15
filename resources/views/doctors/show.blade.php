@extends('layout')

@section('menu')
    <x-menu/>
@endsection

@section('content')
    <h1>Cuatro Médico</h1>
    <div class="flex">
        <x-card nombre="{{ $doctor[1] }} {{ $doctor[2] }}" bgcolor="A0A0FF" texto="{{ $doctor[3] }}">
            <x-slot:botones>
                <a href="{{ route('doctors.create') }}" class="text-white bg-slate-300 m-4 p-1">Ver</a>
            </x-slot:botones>    
        </x-card>
    </div>
@endsection