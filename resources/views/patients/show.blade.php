@extends('layout')

@section('menu')
    <x-menu/>
@endsection

@section('content')
    <h1>Pacientes</h1>
    <div class="flex">
        <x-card nombre="{{ $patient->name }} {{ $patient->middleName }} {{ $patient->lastName }}" bgcolor="A0AFFF" ancho="500">
            <x-slot:texto>
                <p>Email: {{ $patient->email }}</p>
            </x-slot:texto>
            <x-slot:botones>
                <a href="{{ route('patients.edit', $patient->id) }}" class="text-white bg-slate-300 m-4 p-1">Modificar</a>
                <form action="{{ route('patients.destroy', $patient->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-white bg-slate-300 m-4 p-1">Borrar</button>
                </form>
            </x-slot:botones>
        </x-card>
    </div>
@endsection
