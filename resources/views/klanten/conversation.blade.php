<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Conversation') }}
        </h2>
    </x-slot>
    <form action="{{route('contact.conversationStore', [$info->id])}}" method="post">
        @csrf
        <div class="flex justify-center">
            <div class="flex flex-col ml-2">
                <div class="conversation_date mt-3">
                    <input class="rounded-lg" type="date" name="conversation_date" min="2024-01-01" max="2024-12-31">
                </div>
                <div class="conversation_time mt-3">
                    <input class="rounded-lg" type="time" name="conversation_time" min="12:00" max="20:00"><span class="text-gray-600">Only between 12:00 and 20:00</span>
                </div>
                <div class="talked_with mt-3">
                    <input class="rounded-lg" type="text" name="talked_with" placeholder="talked_with" value="{{$info->firstname}}">
                </div>
                <div class="notes_conversation mt-3">
                    <textarea class="rounded-lg" rows="1" cols="20" name="notes_conversation" placeholder="notes_conversation"></textarea>
                </div>
            </div>
            <input class="button ml-3 bg-white p-3 self-center cursor-pointer hover:border-blue-600 hover:border-2 border border-black/50 rounded-lg" type="submit" value="Submit">
        </div>
    </form>
</x-app-layout>