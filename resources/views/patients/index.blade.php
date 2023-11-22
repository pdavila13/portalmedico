@extends('layout')

@section('menu')
    <x-menu/>
@endsection

@section('content')
    <h1>Pacientes</h1>

    @if ($message = Session::get('message'))
    <div>
        @if ($code = Session::get('code'))
            {{ $code }} &nbsp;-&nbsp;
        @endif
        {{ $message }}
    </div>
    @endif
    <br>
    <div>
        <a href="{{ route('patients.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">Nuevo Paciente</a>
    </div>
    <div class="flex flex-wrap -mb-4">
        @foreach ($patients as $key => $pacient)
            <x-card nombre="{{ $pacient->name }} {{ $pacient->middleName }}" bgcolor="A0FFFF" ancho="300" texto="{{ $pacient->email }}">
                <x-slot:botones>
                    <a href="{{ route('patients.show', $pacient->id) }}" class="text-white bg-slate-300 m-4 p-1">Ver</a>
                </x-slot:botones>
            </x-card>
        @endforeach
    </div>

    @isset ($patients->onEachSide)
    <br>
    {{ $patients->total() }}
    @endisset

@endsection
