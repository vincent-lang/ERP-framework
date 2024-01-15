<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gesprekken lijst') }}
        </h2>
    </x-slot>
    <div class="flex justify-start">
        @foreach ($data as $info)
        <div class="flex justify-start ml-5">
            <div class="p-4 mt-6 bg-white border border-black rounded-lg font-semibold text-l">
                <h2 class="text-gray-800 leading-tight">Conversation date: <span class="font-normal mt-4">{{$info->conversation_date}}</span></h2>
                <h2 class="text-gray-800 leading-tight mb-3">Conversation time: <span class="font-normal mt-4">{{$info->conversation_time}}</span></h2>
                <h2 class="text-gray-800 leading-tight">Talked with: <span class="font-normal mt-4">{{$info->talked_with}}</span></h2>
                <h2 class="text-gray-800 leading-tight mb-3">Notes conversation: <span class="font-normal mt-4">{{$info->notes_conversation}}</span></h2>
                <a class="p-2 underline bg-white border border-black rounded-lg hover:border-blue-600 hover:border-2" href="{{route('conversation.edit', [$info->id])}}">wijzigen</a>
            </div>
        </div>
        @endforeach
    </div>
</x-app-layout>