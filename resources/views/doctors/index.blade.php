@extends('layout')

@section('menu')
    <x-menu/>
@endsection

@section('content')
    <h1>Cuatro Médico</h1>

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
        <a href="{{ route('doctors.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">Nuevo Doctor</a>
    </div>

    <x-listado rutashow="doctors.show" :items="$doctors"/>
@endsection