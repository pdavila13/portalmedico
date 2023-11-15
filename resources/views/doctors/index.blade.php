@extends('layout')

@section('menu')
    <x-menu/>
@endsection

@section('content')
    <h1>Cuatro Médico</h1>
    <div class="flex">
        @foreach ($doctors as $doctor)
            <x-card paciente="{{ $doctor[1] }} {{ $doctor[2] }}" bgcolor="A0A0FF" texto="{{ $doctor[3] }}"/>
        @endforeach
    </div>
@endsection