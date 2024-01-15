<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="flex justify-evenly">
        <div class="p-6 mt-48 bg-white border border-black rounded-lg">
            <h2 class="text-xl text-gray-800 leading-tight">Aantal geregistreerde klanten: <p class="font-semibold mt-4">{{$klanten}}</p>
            </h2>
        </div>
        <div class="p-6 mt-48 bg-white border border-black rounded-lg">
            <h2 class="text-xl text-gray-800 leading-tight">Aantal geregistreerde bedrijven: <p class="font-semibold mt-4">{{$bedrijven}}</p>
            </h2>
        </div>
    </div>
</x-app-layout>