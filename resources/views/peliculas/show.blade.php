<x-app-layout>
    <div class="card bg-base-100 w-96 shadow-sm">
        <div class="card-body">
            <ul class="list bg-base-100 rounded-box shadow-md">

                <li class="p-4 pb-2 text-xs opacity-60 tracking-wide">{{ $pelicula->titulo }}</li>
                <li class="p-4 pb-2 text-xs opacity-60 tracking-wide">{{ $entradas }}</li>
            </ul>
        </div>
    </div>

</x-app-layout>