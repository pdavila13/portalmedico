@extends('layout')

@section('menu')
    <x-menu/>
@endsection

@section('content')
    <h1>Cuatro Médico</h1>
    <x-listado rutashow="doctors.show" :items="$doctors"/>
@endsection