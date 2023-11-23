@extends('layout')

@section('menu')
    <x-menu/>
@endsection

@section('content')
    <h1>Pacientes</h1>

    @foreach ($errors->all() as $error )
        {{ $error }}<br/>
    @endforeach

    <div class="flex">
        <form method="POST" action="{{ route('patients.store') }}">
            @csrf
            <x-card nombre="Nuevo Paciente" bgcolor="A0A0FF" ancho=600>
                <x-slot:texto>
                    <x-field name="name" label="Nombre" :value="old('name')"/>
                    <x-field name="middleName" label="Primer Apellido" :value="old('middleName')"/>
                    <x-field name="lastName" label="Segundo Apellido" :value="old('lastName')"/>
                    <x-field name="email" label="Correo electrónico" :value="old('email')"/>
                </x-slot:texto>

                <x-slot:botones>
                    <button type="submit" class="text-white bg-slate-300 m-4 p-1">Guardar</button>
                </x-slot:botones>
            </x-card>
        </form>
    </div>
@endsection
