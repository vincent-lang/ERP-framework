<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Klanten lijst') }}
        </h2>
    </x-slot>
    <div class="flex justify-start">
        @foreach ($data as $info)
        <div class="flex justify-start ml-5">
            <div class="p-4 mt-6 bg-white border border-black rounded-lg font-semibold text-l">
                <h2 class="text-gray-800 leading-tight">Firstname: <span class="font-normal mt-4">{{$info->firstname}}</span></h2>
                <h2 class="text-gray-800 leading-tight">Lastname: <span class="font-normal mt-4">{{$info->lastname}}</span></h2>
                <h2 class="text-gray-800 leading-tight">Street: <span class="font-normal mt-4">{{$info->street}}</span></h2>
                <h2 class="text-gray-800 leading-tight">House number: <span class="font-normal mt-4">{{$info->house_number}}</span></h2>
                <h2 class="text-gray-800 leading-tight">Zipcode: <span class="font-normal mt-4">{{$info->zipcode}}</span></h2>
                <h2 class="text-gray-800 leading-tight">Location: <span class="font-normal mt-4">{{$info->location}}</span></h2>
                <h2 class="text-gray-800 leading-tight">E-mail: <span class="font-normal mt-4">{{$info->email}}</span></h2>
                <h2 class="text-gray-800 leading-tight">Phone number: <span class="font-normal mt-4">{{$info->phone_number}}</span></h2>
                <h2 class="text-gray-800 leading-tight mb-3">Function: <span class="font-normal mt-4">{{$info->function}}</span></h2>
                <a class="p-2 underline bg-white border border-black rounded-lg hover:border-blue-600 hover:border-2" href="{{route('klanten.edit', [$info->id])}}">wijzigen</a>
                <a class="p-2 underline bg-white border border-black rounded-lg hover:border-blue-600 hover:border-2" href="{{route('contact.conversation', [$info->id])}}">conversation</a>
                <a class="p-2 underline bg-white border border-black rounded-lg hover:border-blue-600 hover:border-2" href="{{route('klant.gegevens', [$info->id])}}">Klant gegevens</a>
            </div>
        </div>
        @endforeach
    </div>
</x-app-layout>