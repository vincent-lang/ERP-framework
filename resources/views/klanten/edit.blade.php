<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit klant') }}
        </h2>
    </x-slot>
    <form action="{{route('klanten.update', [$info->id])}}" method="post">
        @csrf
        @method('put')
        <div class="flex justify-center ml-5">
            <div class="flex-col p-4 mt-6 bg-white border border-black rounded-lg text-l">
                <div class="mt-3">
                    <input type="text" class="text-gray-800 leading-tight rounded-lg" name="firstname" placeholder="Firstname" value="{{$info->firstname}}">
                </div>
                <div class="mt-3">
                    <input type="text" class="text-gray-800 leading-tight rounded-lg" name="lastname" placeholder="Lastname" value="{{$info->lastname}}">
                </div>
                <div class="mt-3">
                    <input type="text" class="text-gray-800 leading-tight rounded-lg" name="street" placeholder="Street" value="{{$info->street}}">
                </div>
                <div class="mt-3">
                    <input type="text" class="text-gray-800 leading-tight rounded-lg" name="house_number" placeholder="House number" value="{{$info->house_number}}">
                </div>
                <div class="mt-3">
                    <input type="text" class="text-gray-800 leading-tight rounded-lg" name="zipcode" placeholder="Zipcode" value="{{$info->zipcode}}">
                </div>
                <div class="mt-3">
                    <input type="text" class="text-gray-800 leading-tight rounded-lg" name="location" placeholder="Location" value="{{$info->location}}">
                </div>
                <div class="mt-3">
                    <input type="email" class="text-gray-800 leading-tight rounded-lg" name="email" placeholder="E-mail" value="{{$info->email}}">
                </div>
                <div class="mt-3">
                    <input type="text" class="text-gray-800 leading-tight rounded-lg" name="phone_number" placeholder="Phone number" value="{{$info->phone_number}}">
                </div>
                <div class="mt-3">
                    <input type="text" class="text-gray-800 leading-tight rounded-lg mb-3" name="function" placeholder="Function" value="{{$info->function}}">
                </div>
            </div>
            <input class="ml-3 bg-white p-3 self-center cursor-pointer hover:border-blue-600 hover:border-2 border border-black/50 rounded-lg" type="submit" value="Submit">
        </div>
    </form>
</x-app-layout>