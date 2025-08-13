<x-app-layout>
    <form action="/posts" enctype="multipart/form-date" method="post">
        @csrf

        <x-slot name="header">
            <h2 class="pt-6 pb-2 tracking-widest font-nokora font-[700] text-3xl leading-tight border-b-2 border-[#841A26]">
                {{ __('ADD ARTPIECE') }}
            </h2>
        </x-slot>  

        
        <div class="mb-6 flex justify-center">
            <div class="flex flex-col items-center w-full">

            <!-- TITLE input field -->
                <label for="title" class="mr-[600px] pt-10 text-center tracking-widest font-nokora text-[#841A26] leading-tight font-bold uppercase text-sm">
                    Title 
                    <span class="text-[#841A26]">*</span>
                </label>
            
                <input 
                    type="text"
                    name="title"
                    class="place-content-center w-1/2 custom-border custom-border:focus text-[#841A26] focus:outline-none placeholder:text-[#841A26]/50 font-neuton"
                    placeholder="Enter art title"
                />

                <!-- Error Message -->
                @error('title') 
                    <p class="alert alert-danger text-md text-[#841A26] bg-[#EAD8B4] px-3 py-1 mt-2 inline-block font-neuton">
                        {{ $message }}
                    </p>
                @enderror
            </div>
        </div>

        <!-- Input Field Adjacent Container -->
        <div class="mb-6 flex justify-center mt-[20px]">
            <div class="flex space-x-[100px] w-full px-10"> <!-- Adjust Dri --> 
            
                <!-- ART TYPE Dropdown -->
                <div class="flex-col w-1/2 relative">
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
                    @error('art-type') 
                        <p class="alert alert-danger text-md text-[#841A26] bg-[#EAD8B4] px-3 py-1 mt-2 inline-block font-neuton">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- MEDIUM Input Text Field  -->
                <div class="flex-col w-1/2">
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
        <div class="flex justify-center mt-[20px]">
            <div class="flex space-x-[100px] max-w-8xl w-full px-10"> <!-- Adjust Dri --> 
            
                <!-- YEAR input field -->
                <div class="flex-col w-1/2 relative">
                    <label for="Year" class="tracking-widest font-nokora text-[#841A26] leading-tight font-bold uppercase text-sm">
                        Year Created
                        <span class="text-[#841A26]">*</span>
                    </label>
                
                    <input 
                        type="text"
                        name="year"
                        class="place-content-center w-full custom-border custom-border:focus text-[#841A26] focus:outline-none placeholder:text-[#841A26]/50 font-neuton"
                        placeholder="Enter year created"
                    />
                    
                    <!-- Error Message -->
                    @error('year') 
                        <p class="alert alert-danger text-md text-[#841A26] bg-[#EAD8B4] px-3 py-1 mt-2 inline-block font-neuton">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- TAGS Input Text Field  -->
                <div class="flex-col w-1/2">
                    <label for="Tags" class="tracking-widest font-nokora text-[#841A26] leading-tight font-bold text-sm mb-1 text-left">
                        Tags (comma-separated)
                    </label>

                    <input 
                        type="text"
                        id="tags"
                        name="tags"
                        class="appearance-none w-full border-0 border-b border-[#841A26] bg-transparent text-[#841A26] focus:outline-none focus:border-[#841A26] placeholder:text-[#841A26]/50 font-neuton"
                        placeholder="Enter art tags"
                    />
                </div>
            </div>
        </div>

        <!-- Input Field Adjacent Container -->
        <div class="mb-6 flex justify-center mt-[20px]">
            <div class="flex space-x-[100px] w-full px-10"> 

            <!-- ART DESCRIPTION input field -->
                <div class="flex-col w-1/2 relative">
                    <label for="Year" class="tracking-widest font-nokora text-[#841A26] leading-tight font-bold uppercase text-sm">
                        Art Description
                    </label>
                
                    <textarea 
                        name="art-description" 
                        id="art-description" 
                        class="field-sizing-fixed w-100 appearance-none w-full border-0 border-b border-[#841A26] bg-transparent text-[#841A26] focus:outline-none focus:border-[#841A26] placeholder:text-[#841A26]/50 font-neuton" 
                        rows="2" 
                        placeholder="Describe your artpiece here..."
                    >
                    </textarea>
                </div>

                <!-- VISIBILITY Input Text Field  -->
                <!-- <div class="flex flex-col w-1/2">
                    <label for="Tags" class="tracking-widest font-nokora text-[#841A26] leading-tight font-bold text-sm mb-1 text-left">
                        Visibility
                    </label>

                    <input 
                        type="text"
                        id=""
                        name=""
                        class="appearance-none w-full border-0 border-b border-[#841A26] bg-transparent text-[#841A26] focus:outline-none focus:border-[#841A26] placeholder:text-[#841A26]/50 font-neuton"
                    />
                </div> -->
            </div>
        </div>

        <!-- FILE INPUT field -->
        <div class="mb-6 mt-[30px] flex space-x-[100px] max-w-[655px] px-10">    
            <div class="flex-col w-full relative">
                <label for="Year" class="tracking-widest font-nokora text-[#841A26] leading-tight font-bold uppercase text-sm">
                    Upload Artpiece Image
                    <span class="text-[#841A26]">*</span>
                </label>
                
                <!-- Error Message -->
                @error('image') 
                    <p class="alert alert-danger text-md text-[#841A26] bg-[#EAD8B4] px-3 py-1 mt-2 inline-block font-neuton">
                        {{ $message }}
                    </p>
                @enderror

                <label 
                    for="dropzone-file" 
                    class="mt-[20px] flex flex-col items-center justify-center w-full h-64 border-[1.5px] border-[#841A26] cursor-pointer bg-[#FDF5C8] dark:hover:bg-[#D3CB9F] dark:bg-[#D3CB9F] hover:bg-[#D3CB9F] dark:border-[#D3CB9F]">
                        
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg class="w-10 h-10 mb-4 text-[#841A26] dark:dark:text-[#741621]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                            </svg>
                            <p class="mb-2 text-[15px] text-[#841A26] dark:dark:text-[#741621]">
                                <span class="font-neuton">Click to upload</span> 
                                <span class="text-[#841A26] font-nokora"> or</span>
                                <span class="text-[#841A26] font-nokora font-bold text-[14.5px]">drag and drop</span>
                            </p>
                            <p class="text-xs text-[#841A26] font-neuton dark:text-[#741621]">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                        </div>
                    <input id="dropzone-file" name="image" type="file" class="hidden" />
                </label>
            </div>    
        </div>

        <div class="mb-6 flex justify-center">
            <button class="font-nokora px-11 py-4 mt-10 mb-10 text-[#FEFBDC] bg-[#841A26] hover:bg-[#741621] rounded-none">Add New Post</button>
        </div>

    </form>
</x-app-layout>




