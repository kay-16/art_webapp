<x-app-layout>
    <x-slot name="header">
        <h2 class="pt-6 pb-2 tracking-widest font-nokora font-[700] text-3xl leading-tight border-b-2 border-[#841A26]">
            {{ __('ADD ARTPIECE') }}
        </h2>
    </x-slot>  

    <!-- Title input field -->
    <div class="mb-6 flex justify-center"> <!--to center the input field itself-->
        <div class="flex flex-col items-center w-full">
            <label for="title" class="pt-6 pb-2 text-center tracking-widest font-nokora text-[#841A26] leading-tight font-bold uppercase block text-sm mb-1">
                Title <span class="text-[#841A26]">*</span>
            </label>
        
            <input 
                id="title"
                name="title"
                type="text"
                class="place-content-center w-1/2 bg-transparent border-b border-[#841A26] text-[#841A26] focus:outline-none focus:border-b-2 focus:border-[#841A26] placeholder:text-[#841A26]/50"
                placeholder="Enter Title"
            >

            <p class="text-sm text-[#841A26] bg-[#EAD8B4] px-3 py-1 mt-2 inline-block">
                This field is required.
            </p>
        </div>
    </div>

    <!-- Dropdown -->
    <div>
        <label for="price" class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 pt-6 pb-2 tracking-widest font-nokora text-[#841A26] leading-tight font-[700] block text-sm/6">TYPE</label>
        <div class="mt-2">
            <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 has-[input:focus-within]:outline-2 has-[input:focus-within]:-outline-offset-2 has-[input:focus-within]:outline-indigo-600">
            <div class="shrink-0 text-base text-gray-500 select-none sm:text-sm/6">$</div>
            <input id="price" type="text" name="price" placeholder="0.00" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" />
            <div class="grid shrink-0 grid-cols-1 focus-within:relative">
                <select id="currency" name="currency" aria-label="Currency" class="col-start-1 row-start-1 w-full appearance-none rounded-md py-1.5 pr-7 pl-3 text-base text-gray-500 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                <option>USD</option>
                <option>CAD</option>
                <option>EUR</option>
                </select>
                <svg viewBox="0 0 16 16" fill="currentColor" data-slot="icon" aria-hidden="true" class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-500 sm:size-4">
                <path d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" />
                </svg>
            </div>
            </div>
        </div>
    </div>
</x-app-layout>
