<div x-data="{ activeSlide: 0, totalSlides: 3 }" x-init="setInterval(() => { activeSlide = (activeSlide + 1) % totalSlides }, 5000)" class="relative w-full overflow-hidden hidden lg:block">
    <!-- Slider container -->
    <div class="flex transition-transform duration-500 ease-in-out"
         :style="{ transform: 'translateX(-' + activeSlide * 100 + '%)' }">

        <!-- Slide 1 (4 items) -->
        <div class="flex-shrink-0 w-full flex flex-row items-center justify-around space-x-10 p-10">
            <!-- Item 1 -->
            <div class="flex flex-col items-start py-2 px-4 w-[200px]">
                <img src="{{ asset('/images/horse-herb.png') }}" alt="Herb Icon" class="rounded-xl object-contain w-[150px] h-auto" />
                <div class="mt-1">
                    <p>⭐⭐⭐⭐</p>
                    <p class="heading_color font-bold text-lg">Item 1</p>
                    <div class="flex flex-row items-center">
                        <p class="text-gray-500 font-bold text-base">$400</p>
                        <p class="text-green-600 font-bold text-base">$300</p>
                    </div>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="flex flex-col items-start py-2 px-4 w-[200px]">
                <img src="{{ asset('/images/human-herb.png') }}" alt="Herb Icon" class="rounded-xl object-contain w-[150px] h-auto" />
                <div class="mt-1">
                    <p>⭐⭐⭐⭐⭐</p>
                    <p class="heading_color font-bold text-lg">Item 2</p>
                    <div class="flex flex-row items-center">
                        <p class="text-gray-500 font-bold text-base">$400</p>
                        <p class="text-green-600 font-bold text-base">$300</p>
                    </div>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="flex flex-col items-start py-2 px-4 w-[200px]">
                <img src="{{ asset('/images/pet-herb.png') }}" alt="Herb Icon" class="rounded-xl object-contain w-[150px] h-auto" />
                <div class="mt-4">
                    <p>⭐⭐⭐⭐</p>
                    <p class="heading_color font-bold text-lg">Item 3</p>
                    <div class="flex flex-row items-center">
                        <p class="text-gray-500 font-bold text-base">$400</p>
                        <p class="text-green-600 font-bold text-base">$300</p>
                    </div>
                </div>
            </div>

            <!-- Item 4 -->
            <div class="flex flex-col items-start py-2 px-4 w-[200px]">
                <img src="{{ asset('/images/human-herb.png') }}" alt="Herb Icon" class="rounded-xl object-contain w-[150px] h-auto" />
                <div class="mt-1">
                    <p>⭐⭐⭐⭐⭐</p>
                    <p class="heading_color font-bold text-lg">Item 4</p>
                    <div class="flex flex-row items-center">
                        <p class="text-gray-500 font-bold text-base">$400</p>
                        <p class="text-green-600 font-bold text-base">$300</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 (4 items) -->
        <div class="flex-shrink-0 w-full flex flex-row items-center justify-around space-x-10 p-10">
            <!-- Item 5 -->
            <div class="flex flex-col items-start py-2 px-4 w-[200px]">
                <img src="{{ asset('/images/pet-herb.png') }}" alt="Herb Icon" class="rounded-xl object-contain w-[150px] h-auto" />
                <div class="mt-4">
                    <p>⭐⭐⭐⭐</p>
                    <p class="heading_color font-bold text-lg">Item 5</p>
                    <div class="flex flex-row items-center">
                        <p class="text-gray-500 font-bold text-base">$400</p>
                        <p class="text-green-600 font-bold text-base">$300</p>
                    </div>
                </div>
            </div>

            <!-- Item 6 -->
            <div class="flex flex-col items-start py-2 px-4 w-[200px]">
                <img src="{{ asset('/images/human-herb.png') }}" alt="Herb Icon" class="rounded-xl object-contain w-[150px] h-auto" />
                <div class="mt-1">
                    <p>⭐⭐⭐⭐⭐</p>
                    <p class="heading_color font-bold text-lg">Item 6</p>
                    <div class="flex flex-row items-center">
                        <p class="text-gray-500 font-bold text-base">$400</p>
                        <p class="text-green-600 font-bold text-base">$300</p>
                    </div>
                </div>
            </div>

            <!-- Item 7 -->
            <div class="flex flex-col items-start py-2 px-4 w-[200px]">
                <img src="{{ asset('/images/pet-herb.png') }}" alt="Herb Icon" class="rounded-xl object-contain w-[150px] h-auto" />
                <div class="mt-4">
                    <p>⭐⭐⭐⭐</p>
                    <p class="heading_color font-bold text-lg">Item 7</p>
                    <div class="flex flex-row items-center">
                        <p class="text-gray-500 font-bold text-base">$400</p>
                        <p class="text-green-600 font-bold text-base">$300</p>
                    </div>
                </div>
            </div>

            <!-- Item 8 -->
            <div class="flex flex-col items-start py-2 px-4 w-[200px]">
                <img src="{{ asset('/images/human-herb.png') }}" alt="Herb Icon" class="rounded-xl object-contain w-[150px] h-auto" />
                <div class="mt-1">
                    <p>⭐⭐⭐⭐⭐</p>
                    <p class="heading_color font-bold text-lg">Item 8</p>
                    <div class="flex flex-row items-center">
                        <p class="text-gray-500 font-bold text-base">$400</p>
                        <p class="text-green-600 font-bold text-base">$300</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 3 (4 items) -->
        <div class="flex-shrink-0 w-full flex flex-row items-center justify-around space-x-10 p-10">
            <!-- Item 9 -->
            <div class="flex flex-col items-start py-2 px-4 w-[200px]">
                <img src="{{ asset('/images/pet-herb.png') }}" alt="Herb Icon" class="rounded-xl object-contain w-[150px] h-auto" />
                <div class="mt-4">
                    <p>⭐⭐⭐⭐</p>
                    <p class="heading_color font-bold text-lg">Item 9</p>
                    <div class="flex flex-row items-center">
                        <p class="text-gray-500 font-bold text-base">$400</p>
                        <p class="text-green-600 font-bold text-base">$300</p>
                    </div>
                </div>
            </div>

            <!-- Item 10 -->
            <div class="flex flex-col items-start py-2 px-4 w-[200px]">
                <img src="{{ asset('/images/human-herb.png') }}" alt="Herb Icon" class="rounded-xl object-contain w-[150px] h-auto" />
                <div class="mt-1">
                    <p>⭐⭐⭐⭐⭐</p>
                    <p class="heading_color font-bold text-lg">Item 10</p>
                    <div class="flex flex-row items-center">
                        <p class="text-gray-500 font-bold text-base">$400</p>
                        <p class="text-green-600 font-bold text-base">$300</p>
                    </div>
                </div>
            </div>

            <!-- Item 11 -->
            <div class="flex flex-col items-start py-2 px-4 w-[200px]">
                <img src="{{ asset('/images/pet-herb.png') }}" alt="Herb Icon" class="rounded-xl object-contain w-[150px] h-auto" />
                <div class="mt-4">
                    <p>⭐⭐⭐⭐</p>
                    <p class="heading_color font-bold text-lg">Item 11</p>
                    <div class="flex flex-row items-center">
                        <p class="text-gray-500 font-bold text-base">$400</p>
                        <p class="text-green-600 font-bold text-base">$300</p>
                    </div>
                </div>
            </div>

            <!-- Item 12 -->
            <div class="flex flex-col items-start py-2 px-4 w-[200px]">
                <img src="{{ asset('/images/human-herb.png') }}" alt="Herb Icon" class="rounded-xl object-contain w-[150px] h-auto" />
                <div class="mt-1">
                    <p>⭐⭐⭐⭐⭐</p>
                    <p class="heading_color font-bold text-lg">Item 12</p>
                    <div class="flex flex-row items-center">
                        <p class="text-gray-500 font-bold text-base">$400</p>
                        <p class="text-green-600 font-bold text-base">$300</p>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <!-- Slide indicators -->
    <div class="flex justify-center mt-4 space-x-2">
        <div @click="activeSlide = 0" :class="{ 'bg-green-500': activeSlide === 0 }" class="w-4 h-4 rounded-full bg-gray-300 cursor-pointer"></div>
        <div @click="activeSlide = 1" :class="{ 'bg-green-500': activeSlide === 1 }" class="w-4 h-4 rounded-full bg-gray-300 cursor-pointer"></div>
        <div @click="activeSlide = 2" :class="{ 'bg-green-500': activeSlide === 2 }" class="w-4 h-4 rounded-full bg-gray-300 cursor-pointer"></div>
    </div>
</div>



<div x-data="{ activeSlide: 0, totalSlides: 3 }" x-init="setInterval(() => { activeSlide = (activeSlide + 1) % totalSlides }, 5000)" class="relative w-full overflow-hidden lg:hidden">
    <!-- Slider container -->
    <div class="flex transition-transform duration-500 ease-in-out"
         :style="{ transform: 'translateX(-' + activeSlide * 100 + '%)' }">

        <!-- Slide 1 (1 item per slide on md and sm screens) -->
        <div class="flex-shrink-0 w-full flex flex-row items-center justify-around space-x-10 p-10 md:flex-col sm:flex-col">
            <!-- Item 1 -->
            <div class="flex flex-col items-center py-2 px-4 w-full sm:w-[200px]">
                <img src="{{ asset('/images/horse-herb.png') }}" alt="Herb Icon" class="rounded-xl object-contain w-[150px] h-auto" />
                <div class="mt-2 text-center">
                    <p class=" mb-2">⭐⭐⭐⭐</p>
                    <p class="heading_color font-bold text-lg mb-3">Lorem ipsum dolor sit amet consectetur</p>
                    <div class="flex flex-row justify-center items-center space-x-6">
                        <p class="text-gray-500 font-bold text-base line-through">$400</p>
                        <p class="text-green-600 font-bold text-base">$300</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="flex-shrink-0 w-full flex flex-row items-center justify-around space-x-10 p-10 md:flex-col sm:flex-col">
            <!-- Item 2 -->
            <div class="flex flex-col items-center py-2 px-4 w-full sm:w-[200px]">
                <img src="{{ asset('/images/human-herb.png') }}" alt="Herb Icon" class="rounded-xl object-contain w-[150px] h-auto" />
                <div class="mt-2 text-center">
                    <p class=" mb-2">⭐⭐⭐⭐</p>
                    <p class="heading_color font-bold text-lg mb-3">Lorem ipsum dolor sit amet consectetur</p>
                    <div class="flex flex-row justify-center items-center space-x-6">
                        <p class="text-gray-500 font-bold text-base line-through">$400</p>
                        <p class="text-green-600 font-bold text-base">$300</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="flex-shrink-0 w-full flex flex-row items-center justify-around space-x-10 p-10 md:flex-col sm:flex-col">
            <!-- Item 3 -->
            <div class="flex flex-col items-center py-2 px-4 w-full sm:w-[200px]">
                <img src="{{ asset('/images/pet-herb.png') }}" alt="Herb Icon" class="rounded-xl object-contain w-[150px] h-auto" />
                <div class="mt-2 text-center">
                    <p class=" mb-2">⭐⭐⭐⭐</p>
                    <p class="heading_color font-bold text-lg mb-3">Lorem ipsum dolor sit amet consectetur</p>
                    <div class="flex flex-row justify-center items-center space-x-6">
                        <p class="text-gray-500 font-bold text-base line-through">$400</p>
                        <p class="text-green-600 font-bold text-base">$300</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Previous and Next Buttons -->
    <div class="absolute inset-y-0 left-0 flex items-center">
        <button @click="activeSlide = (activeSlide > 0) ? activeSlide - 1 : totalSlides - 1" class="bg-gray-300 text-gray-700 font-bold p-2 rounded-full hover:bg-gray-500">
            &#10094; <!-- Left Arrow -->
        </button>
    </div>

    <div class="absolute inset-y-0 right-0 flex items-center">
        <button @click="activeSlide = (activeSlide + 1) % totalSlides" class="bg-gray-300 text-gray-700 font-bold p-2 rounded-full hover:bg-gray-500">
            &#10095; <!-- Right Arrow -->
        </button>
    </div>

</div>

