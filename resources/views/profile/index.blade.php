<x-app-layout>
    <x-slot name="header">
        <div class="mt-6 flex justify-between items-baseline leading-tight border-b-2 border-[#841A26]">
            <h2 class="font-neuton font-[400] text-3xl">
                {{ $user->username }}'s Gallery
            </h2>
            <a href="/posts/create" class="font-neuton font-[400] text-base underline underline-offset-1">Add New Post</a>
        </div>

        <div><p class="font-neuton font-[400] text-base">{{ $user->profile->bio }}</p></div>

        <div>
            <a class="font-neuton font-[400] text-base underline underline-offset-1" href="https://www.instagram.com/bykaysart?igsh=MWw3ZXM4YW52dGJwZQ==" target="_blank">
                {{ $user->profile->url ?? 'N/A'}}
            </a>
        </div>

    </x-slot>

    <div class="grid grid-cols-4 gap-4 max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        @foreach($user->posts as $post)
            
            <div class="flex flex-col items-start">
                <img src="/storage/{{ $post->image }}" class="w-60" alt="">
                <p class="font-neuton font-[400] text-base mt-2"> {{ $post->title }}</p>
                <p class="font-neuton font-[400] text-base"> {{ $post->year }}</p>
                <p class="font-neuton font-[400] text-base"> {{ $post->type }}</p>
            </div>
        @endforeach
    </div>
</x-app-layout>

