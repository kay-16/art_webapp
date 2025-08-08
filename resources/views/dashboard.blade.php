<x-app-layout>
    <x-slot name="header">
        <h2 class="pt-6 pb-2 font-neuton font-[400] text-3xl leading-tight border-b-2 border-[#841A26]">
            {{ $user->username }}'s Gallery
        </h2>
        <div><p class="font-neuton font-[400] text-xs"> Welcome to my Gallery!</p></div>

        <a class="font-neuton font-[400] text-xs" href="https://www.instagram.com/bykaysart?igsh=MWw3ZXM4YW52dGJwZQ==" target="_blank">
            www.instagram.com/bykaysart
        </a>

    </x-slot>

    <div class="grid grid-cols-4 gap-4 max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <img src="{{ asset('img_1.jpeg') }}" class="w-60" alt="">
        <img src="{{ asset('img_2.jpeg') }}" class="w-60" alt="">
        <img src="{{ asset('img_3.jpeg') }}" class="w-60" alt="">
        <img src="{{ asset('img_4.jpeg') }}" class="w-60" alt="">
    </div>
</x-app-layout>

