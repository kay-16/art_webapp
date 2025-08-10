<x-app-layout>
    <x-slot name="header">
        <div class="mt-6 flex justify-between items-baseline leading-tight border-b-2 border-[#841A26]">
            <h2 class="font-neuton font-[400] text-3xl">
                {{ $user->username }}'s Gallery
            </h2>
            <a href="#" class="font-neuton font-[400] text-base underline underline-offset-1">Add New Post</a>
        </div>

        <div><p class="font-neuton font-[400] text-base">{{ $user->profile->bio }}</p></div>

        <div>
            <a class="font-neuton font-[400] text-base underline underline-offset-1" href="https://www.instagram.com/bykaysart?igsh=MWw3ZXM4YW52dGJwZQ==" target="_blank">
                {{ $user->profile->url ?? 'N/A'}}
            </a>
        </div>

    </x-slot>

    <div class="grid grid-cols-4 gap-4 max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <img src="{{ asset('img_1.jpeg') }}" class="w-60" alt="">
        <img src="{{ asset('img_2.jpeg') }}" class="w-60" alt="">
        <img src="{{ asset('img_3.jpeg') }}" class="w-60" alt="">
        <img src="{{ asset('img_4.jpeg') }}" class="w-60" alt="">
    </div>
</x-app-layout>

<!--
<div class="d-flex justify-content-between">
            <h2 class="pt-6 pb-2 font-neuton font-[400] text-3xl leading-tight border-b-2 border-[#841A26]">
                {{ $user->username }}'s Gallery
            </h2>
            <a href="#" class="font-neuton font-[400] text-xs">Add New Post</a>
        </div>

-->