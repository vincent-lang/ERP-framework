<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="flex justify-center">
        <div class="p-6 mt-48 bg-white border border-black rounded-lg">
            <h2 class="text-xl text-gray-800 leading-tight">Amount registered client's: <p class="font-semibold mt-4">{{$amount}}</p>
            </h2>
        </div>
    </div>
</x-app-layout>