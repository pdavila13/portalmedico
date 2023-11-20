@extends('layout')

@section('menu')
    <x-menu/>
@endsection

@section('content')
    <h1>Cuatro Médico</h1>
    
    @if ($message = Session::get('message'))
    <div>
        {{ $message }}
    </div>
    @endif
    
    <x-listado rutashow="doctors.show" :items="$doctors"/>
@endsection