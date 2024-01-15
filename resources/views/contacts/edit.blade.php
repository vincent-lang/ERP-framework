<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit klant') }}
        </h2>
    </x-slot>
    <form action="{{route('contacts.update', [$info->id])}}" method="post">
        @csrf
        @method('put')
        <div class="flex justify-center ml-5">
            <div class="flex-col p-4 mt-6 bg-white border border-black rounded-lg text-l">
                <div class="mt-3">
                    <input type="text" class="text-gray-800 leading-tight rounded-lg" name="company_name" placeholder="Company name" value="{{$info->company_name}}">
                </div>
                <div class="mt-3">
                    <input type="text" class="text-gray-800 leading-tight rounded-lg" name="KVK_number" placeholder="KVK number" value="{{$info->KVK_number}}">
                </div>
            </div>
            <input class="ml-3 bg-white p-3 self-center cursor-pointer hover:border-blue-600 hover:border-2 border border-black/50 rounded-lg" type="submit" value="Submit">
        </div>
    </form>
</x-app-layout>