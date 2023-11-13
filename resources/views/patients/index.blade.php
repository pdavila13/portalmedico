@extends('patients.layout')

@section('content')
    Contenido para el layout principal.

    <x-card bgcolor="FFA0A0" :paciente="$nombre" fecha="13/11/2023">
        <x-slot:texto >
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <strong>Duis aute irure dolor in reprehenderit 
            in voluptate velit esse cillum dolore eu fugiat nulla pariatur</strong>. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 
            mollit anim id est laborum.
        </x-slot:texto>
    </x-card>
    {{ $nombre }}
@endsection