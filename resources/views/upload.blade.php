<x-app-layout>
    <x-slot name="header">
        <h2 class="pt-6 pb-2 tracking-widest font-nokora font-[700] text-3xl leading-tight border-b-2 border-[#841A26]">
            {{ __('ADD ARTPIECE') }}
        </h2>
    </x-slot>  

    
    <div class="mb-6 flex justify-center">
        <div class="flex flex-col items-center w-full">

        <!-- Title input field -->
            <label for="title" class="mr-[600px] pt-10 text-center tracking-widest font-nokora text-[#841A26] leading-tight font-bold uppercase text-sm">
                Title <span class="text-[#841A26]">*</span>
            </label>
        
            <input 
                type="text"
                class="place-content-center w-1/2 custom-border custom-border:focus text-[#841A26] focus:outline-none placeholder:text-[#841A26]/50 font-neuton"
                placeholder="Enter art title"
            />

            <p class="text-md text-[#841A26] bg-[#EAD8B4] px-3 py-1 mt-2 inline-block font-neuton" >
                This field is required.
            </p>
        </div>
    </div>

    <!-- Input Field Adjacent Container -->
    <div class="flex justify-center">
        <div class="flex space-x-[200px] max-w-8xl w-full px-10"> <!-- Adjust Dri --> 
        
            <!-- Dropdown -->
            <div class="flex flex-col w-1/2 relative">
                <label for="art-type" class="tracking-widest font-nokora text-[#841A26] uppercase leading-tight font-[700] block text-sm mb-1">
                    Type <span class="text-[#841A26]">*</span>
                </label>

                <select 
                    id="art-type" 
                    name="art-type" 
                    placeholder="Art Type" 
                    class="appearance-none w-full border-0 border-b border-[#841A26] bg-transparent py-1.5 pl-3 pr-10 text-base text-[#841A26] placeholder:text-[#841A26]/50 font-neuton focus:outline-none focus:ring-0" 
                >
                    <option>oil painting</option>
                    <option>acrylic painting</option>
                    <option>watercolor painting</option>
                    <option>coffee painting</option>
                    <option>sketch</option>
                </select>    

                <!-- Dropdown Arrow -->
                <!-- <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                    <svg class="h-4 w-4 text-[#841A26]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7l3 3 3-3" />
                    </svg>
                </div> -->

                <!-- Error Message -->
                <p class="inline-block text-md text-[#841A26] bg-[#EAD8B4] px-3 py-1 mt-2 font-neuton">
                    This field is required.
                </p>
            </div>

            <!-- Medium Input Text Field  -->
            <div class="flex flex-col w-1/2">
                <label for="medium" class="tracking-widest font-nokora text-[#841A26] leading-tight font-bold uppercase text-sm mb-1 text-left">
                    Medium
                </label>

                <input 
                    type="text"
                    id="medium"
                    name="medium"
                    class="appearance-none w-full border-0 border-b border-[#841A26] bg-transparent text-[#841A26] focus:outline-none focus:border-[#841A26] placeholder:text-[#841A26]/50 font-neuton"
                    placeholder="Enter art medium"
                />
            </div>

        </div>
    </div>

    <!-- Input Field Adjacent Container -->
    <div class="flex justify-center">
        <div class="flex space-x-[100px] max-w-8xl w-full px-10"> <!-- Adjust Dri --> 
        
            <!-- Year input field -->
            <div class="flex flex-col w-1/2 relative">
                <label for="Year" class="tracking-widest font-nokora text-[#841A26] leading-tight font-bold uppercase text-sm">
                    Year Created<span class="text-[#841A26]">*</span>
                </label>
            
                <input 
                    type="text"
                    class="place-content-center w-1/2 custom-border custom-border:focus text-[#841A26] focus:outline-none placeholder:text-[#841A26]/50 font-neuton"
                    placeholder="Enter year created"
                />

                <p class="text-md text-[#841A26] bg-[#EAD8B4] px-3 py-1 mt-2 inline-block font-neuton" >
                    This field is required.
                </p>
            </div>

            <!-- Tags Input Text Field  -->
            <div class="flex flex-col w-1/2">
                <label for="Tags" class="tracking-widest font-nokora text-[#841A26] leading-tight font-bold text-sm mb-1 text-left">
                    Tags (comma-separated)
                </label>

                <input 
                    type="text"
                    id="Tags"
                    name="Tags"
                    class="appearance-none w-full border-0 border-b border-[#841A26] bg-transparent text-[#841A26] focus:outline-none focus:border-[#841A26] placeholder:text-[#841A26]/50 font-neuton"
                    placeholder="Enter art tags"
                />
            </div>

        </div>
    </div>

</x-app-layout>




