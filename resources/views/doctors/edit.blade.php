@extends('layout')

@section('menu')
    <x-menu/>
@endsection

@section('content')
    <h1>Cuatro Médico</h1>
    <div class="flex">
        <form method="POST" action="{{ route('doctors.update', $doctor->id) }}">
            @csrf
            @method('PUT')
            <x-card nombre="Modificar Doctor" bgcolor="A0A0FF" ancho="500">
                <x-slot:texto>
                    <x-field name="name" label="Nombre" :value="$doctor->name"/>
                    <x-field name="middleName" label="Primer Apellido" :value="$doctor->middleName"/>
                    <x-field name="lastName" label="Segundo Apellido" :value="$doctor->lastName"/>
                    <x-field name="speciality" label="Especialidad" :value="$doctor->speciality"/>
                    <x-field name="phone" label="Teléfono" :value="$doctor->phone"/>
                    <x-field name="dni" label="Nº Identificación" :value="$doctor->dni"/>
                    <x-field name="email" label="Correo electrónico" :value="$doctor->email"/>
                </x-slot:texto>

                <x-slot:botones>
                    <button type="submit" class="text-white bg-slate-300 m-4 p-1">Guardar</button>
                </x-slot:botones>
            </x-card>
        </form>
    </div>
@endsection
