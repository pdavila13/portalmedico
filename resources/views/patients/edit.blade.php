@extends('layout')

@section('menu')
    <x-menu/>
@endsection

@section('content')
    <h1>Pacientes</h1>
    <div class="flex">
        <form method="POST" action="{{ route('patients.update', $patient->id) }}">
            @csrf
            @method('PUT')
            <x-card nombre="Modificar Paciente" bgcolor="A0AFFF" ancho="500">
                <x-slot:texto>
                    <x-field name="name" label="Nombre" :value="$patient->name"/>
                    <x-field name="middleName" label="Primer Apellido" :value="$patient->middleName"/>
                    <x-field name="lastName" label="Segundo Apellido" :value="$patient->lastName"/>
                    <x-field name="email" label="Correo electrónico" :value="$patient->email"/>
                </x-slot:texto>

                <x-slot:botones>
                    <button type="submit" class="text-white bg-slate-300 m-4 p-1">Guardar</button>
                </x-slot:botones>
            </x-card>
        </form>
    </div>
@endsection
