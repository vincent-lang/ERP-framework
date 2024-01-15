<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Klant gegevens') }}
        </h2>
    </x-slot>
    <div class="flex justify-start">
        <div class="flex justify-start ml-5">
            @foreach($company as $info)
            <div class="p-4 mt-6 mr-4 bg-white border border-black rounded-lg font-semibold text-l">
                <h1 class="text-xl">Contact:</h1>
                <h2 class="text-gray-800 leading-tight">Company name: <span class="font-normal mt-4">{{$info->company_name}}</span></h2>
                <h2 class="text-gray-800 leading-tight">KVK number: <span class="font-normal mt-4">{{$info->KVK_number}}</span></h2>
            </div>
            @endforeach
            @foreach($conversation_data as $data)
            <div class="p-4 mt-6 mr-4 bg-white border border-black rounded-lg font-semibold text-l">
                <h1 class="text-xl">Gesprek:</h1>
                <h2 class="text-gray-800 leading-tight">Conversation date: <span class="font-normal mt-4">{{$data->conversation_date}}</span></h2>
                <h2 class="text-gray-800 leading-tight">Conversation time: <span class="font-normal mt-4">{{$data->conversation_time}}</span></h2>
                <h2 class="text-gray-800 leading-tight">Talked with: <span class="font-normal mt-4">{{$data->talked_with}}</span></h2>
                <h2 class="text-gray-800 leading-tight">Notes conversation: <span class="font-normal mt-4">{{$data->notes_conversation}}</span></h2>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>