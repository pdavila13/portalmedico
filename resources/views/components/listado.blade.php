<div class="flex">
        @foreach ($items as $key => $item)
        <x-card nombre="{{ $item->name }} {{ $item->middleName }}" bgcolor="A0A0FF" texto="{{ $item->speciality }}">
            <x-slot:botones>
                <a href="{{ route($rutashow, $item->id) }}" class="text-white bg-slate-300 m-4 p-1">Ver</a>
            </x-slot:botones>    
        </x-card>
        @endforeach
</div>