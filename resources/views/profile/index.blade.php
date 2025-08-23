<x-app-layout>
    <x-slot name="header">
        <!-- User profile -->
        <div class="mt-10 ml-20 mr-16 flex gap-[14rem]">
            <!-- Profile picture  -->
            <div class="w-[18rem] h-[18rem] rounded-full bg-[#E0D9AB]"></div>

            <!-- User Info -->
            <div class="flex flex-col flex-1 leading-tight">
                <div class="flex justify-between items-baseline border-b-2 border-[#841A26]">
                    <!-- Name of user -->
                    <h2 class="font-neuton font-[400] text-3xl">{{ $user->username }}'s Gallery</h2>

                    <!-- Add new post button -->
                    <a href="/posts/create" class="font-neuton font-[400] text-base underline underline-offset-1">Add New Post</a>
                </div>

                <!-- Stats row -->
                <div class="mt-3 flex justify-between gap-10">
                    <p class="font-nokora font-[400] text-base"> 120 followers</p>
                    <p class="font-nokora font-[400] text-base">{{ $user->posts->count() }} posts</p>
                </div>

                <!-- Bio -->
                <div class="mt-3 max-w-xl">
                    <p class="font-neuton font-[400] text-base">{{ $user->profile->bio }}</p>   
                </div>

                <!-- Social links -->
                <div>
                    
                </div>
            </div>
        
            

        </div>

        

        

        <div>
            <a class="font-neuton font-[400] text-base underline underline-offset-1" href="https://www.instagram.com/bykaysart" target="_blank">
                {{ $user->profile->url ?? 'N/A'}}
            </a>
        </div>

    </x-slot>

    <div class="mt-[7rem] grid grid-cols-4 gap-4 max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        @foreach($user->posts as $post)
            
            <div class="flex flex-col items-start">
                <a href="/posts/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-60" alt="">
                </a>
                <p class="font-neuton font-[400] text-[22px] mt-2 text-[#841A26]"> {{ $post->title }}</p>
                <p class="font-nokora font-[300] text-lg text-[#841A26]"> {{ $post->type }}</p>
                <p class="font-nokora font-[200] text-sm text-[#841A26]"> {{ $post->year }}</p>
            </div>
        @endforeach
    </div>
</x-app-layout>

