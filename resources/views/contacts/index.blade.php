<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New contact/klant') }}
        </h2>
    </x-slot>
    <form action="{{route('contact.store')}}" method="post">
        @csrf
        <div class="flex justify-center">
            <div class="flex flex-col ml-2">
                <div class="mt-3">
                    <input class="rounded-lg check" type="text" name="company" placeholder="company: yes or no">
                </div>
                <div class="hidden company_name mt-3">
                    <input class="rounded-lg" type="text" name="company_name" placeholder="company_name">
                </div>
                <div class="hidden kvk_number mt-3">
                    <input class="rounded-lg" type="text" name="KVK_number" placeholder="KVK_number">
                </div>
                <div class="hidden firstname mt-3">
                    <input class="rounded-lg" type="text" name="firstname" placeholder="firstname">
                </div>
                <div class="hidden lastname mt-3">
                    <input class="rounded-lg" type="text" name="lastname" placeholder="lastname">
                </div>
                <div class="hidden street mt-3">
                    <input class="rounded-lg" type="text" name="street" placeholder="street">
                </div>
                <div class="hidden house_number mt-3">
                    <input class="rounded-lg" type="text" name="house_number" placeholder="house_number">
                </div>
            </div>
            <div class="flex flex-col ml-3">
                <div class="hidden zipcode mt-3">
                    <input class="rounded-lg" type="text" name="zipcode" placeholder="zipcode">
                </div>
                <div class="hidden location mt-3">
                    <input class="rounded-lg" type="text" name="location" placeholder="location">
                </div>
                <div class="hidden email mt-3">
                    <input class="rounded-lg" type="email" name="email" placeholder="email">
                </div>
                <div class="hidden phone_number mt-3">
                    <input class="rounded-lg" type="text" name="phone_number" placeholder="phone_number">
                </div>
                <div class="hidden function mt-3">
                    <input class="rounded-lg" type="text" name="function" placeholder="function">
                </div>
            </div>
            <input class="button hidden ml-3 bg-white p-3 self-center cursor-pointer hover:border-blue-600 hover:border-2 border border-black/50 rounded-lg" type="submit" value="Submit">
        </div>
    </form>
    <script src="/js/form.js"></script>
</x-app-layout>