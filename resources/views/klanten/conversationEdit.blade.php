<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit gesprek') }}
        </h2>
    </x-slot>
    <form action="{{route('conversation.update', [$info->id])}}" method="post">
        @csrf
        @method('put')
        <div class="flex justify-center ml-5">
            <div class="flex-col p-4 mt-6 bg-white border border-black rounded-lg text-l">
                <div class="mt-3">
                    <input type="date" class="text-gray-800 leading-tight rounded-lg" name="conversation_date" value="{{$info->conversation_date}}">
                </div>
                <div class="mt-3">
                    <input type="time" class="text-gray-800 leading-tight rounded-lg" name="conversation_time" value="{{$info->conversation_time}}">
                </div>
                <div class="mt-3">
                    <input type="text" class="text-gray-800 leading-tight rounded-lg" name="talked_with" placeholder="Talked with" value="{{$info->talked_with}}">
                </div>
                <div class="mt-3">
                    <textarea class="text-gray-800 leading-tight rounded-lg" rows="1" cols="20" name="notes_conversation" placeholder="Notes conversation">{{$info->notes_conversation}}</textarea>
                </div>
            </div>
            <input class="ml-3 bg-white p-3 self-center cursor-pointer hover:border-blue-600 hover:border-2 border border-black/50 rounded-lg" type="submit" value="Submit">
        </div>
    </form>
</x-app-layout>