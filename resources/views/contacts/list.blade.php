<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bedrijven lijst') }}
        </h2>
    </x-slot>
    @foreach ($data as $info)
    <div class="flex justify-start ml-5">
        <div class="p-4 mt-6 bg-white border border-black rounded-lg font-semibold text-l">
            <h2 class="text-gray-800 leading-tight">Company name: <span class="font-normal mt-4">{{$info->company_name}}</span></h2>
            <h2 class="text-gray-800 leading-tight mb-3">KVK number: <span class="font-normal mt-4">{{$info->KVK_number}}</span></h2>
            <a class="p-2 underline bg-white border border-black rounded-lg hover:border-blue-600 hover:border-2" href="{{route('contacts.edit', [$info->id])}}">wijzigen</a>
            <a class="p-2 underline bg-white border border-black rounded-lg hover:border-blue-600 hover:border-2" href="{{route('contacts.delete', [$info->id])}}">delete</a>
            <a class="p-2 underline bg-white border border-black rounded-lg hover:border-blue-600 hover:border-2" href="{{route('contact.addList', [$info->id])}}">add to klant</a>
        </div>
    </div>
    @endforeach
</x-app-layout>