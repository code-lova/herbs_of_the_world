<div x-data="{ activeSlide: 0, totalSlides: 2 }" x-init="setInterval(() => { activeSlide = (activeSlide + 1) % totalSlides }, 5000)" class="relative w-full overflow-hidden hidden lg:block">
    <!-- Slider container -->
    <div class="flex transition-transform duration-500 ease-in-out"
         :style="{ transform: 'translateX(-' + activeSlide * 100 + '%)' }">

        <!-- Slide 1 (4 items) -->
        <div class="flex-shrink-0 w-full flex flex-row items-center justify-around space-x-10 p-10">
            <!-- Item 1 -->
            <div class="w-full h-[530px] max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="p-8 rounded-t-lg  object-contain mx-auto w-[350px] h-[350px]" src="{{ asset('/images/liver-up.png') }}" alt="product image" />
                </a>
                <div class="px-5 pb-5">
                    <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Liver Up™ EQ32 | Horse Liver Detox for Energy</h5>
                    </a>
                    <div class="flex items-center mt-1 mb-5">
                        <div class="flex items-center space-x-1 rtl:space-x-reverse">
                            <p>⭐⭐⭐⭐⭐</p>
                        </div>
                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3">5.0</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
                        <a href="#" class="text-primary font-bold bg-yellow hover:bg-green-800 hover:text-white focus:ring-4 focus:outline-none rounded-lg text-sm px-5 py-2.5 text-center">Add to cart</a>
                    </div>
                </div>
            </div>


            <!-- Item 2 -->
            <div class="w-full h-[530px] max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="p-8 rounded-t-lg  object-contain mx-auto w-[350px] h-[350px]" src="{{ asset('/images/horse.png') }}" alt="product image" />
                </a>
                <div class="px-5 pb-5">
                    <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Cellular Equine Detox Flush™ EQ15</h5>
                    </a>
                    <div class="flex items-center mt-1 mb-5">
                        <div class="flex items-center space-x-1 rtl:space-x-reverse">
                            <p>⭐⭐⭐⭐⭐</p>
                        </div>
                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3">5.0</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
                        <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
                    </div>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="w-full h-[530px] max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="p-8 rounded-t-lg  object-contain mx-auto w-[350px] h-[350px]" src="{{ asset('/images/horse-herb.png') }}" alt="product image" />
                </a>
                <div class="px-5 pb-5">
                    <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Ulcer Ease™ EQ55 | Horse, Equine Ulcer Support</h5>
                    </a>
                    <div class="flex items-center mt-1 mb-5">
                        <div class="flex items-center space-x-1 rtl:space-x-reverse">
                            <p>⭐⭐⭐⭐⭐</p>
                        </div>
                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3">5.0</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
                        <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Slide 2 (4 items) -->
        <div class="flex-shrink-0 w-full flex flex-row items-center justify-around space-x-10 p-10">
            <!-- Item 5 -->
            <div class="w-full h-[530px] max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="p-8 rounded-t-lg  object-contain mx-auto w-[350px] h-[350px]" src="{{ asset('/images/pet-herb.png') }}" alt="product image" />
                </a>
                <div class="px-5 pb-5">
                    <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Liver Up™ EQ32 | Horse Liver Detox for Energy</h5>
                    </a>
                    <div class="flex items-center mt-1 mb-5">
                        <div class="flex items-center space-x-1 rtl:space-x-reverse">
                            <p>⭐⭐⭐⭐⭐</p>
                        </div>
                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3">5.0</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
                        <a href="#" class="text-primary font-bold bg-yellow hover:bg-green-800 hover:text-white focus:ring-4 focus:outline-none rounded-lg text-sm px-5 py-2.5 text-center">Add to cart</a>
                    </div>
                </div>
            </div>


            <!-- Item 6 -->
            <div class="w-full h-[530px] max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="p-8 rounded-t-lg  object-contain mx-auto w-[350px] h-[350px]" src="{{ asset('/images/human-herb.png') }}" alt="product image" />
                </a>
                <div class="px-5 pb-5">
                    <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Liver Up™ EQ32 | Horse Liver Detox for Energy</h5>
                    </a>
                    <div class="flex items-center mt-1 mb-5">
                        <div class="flex items-center space-x-1 rtl:space-x-reverse">
                            <p>⭐⭐⭐⭐⭐</p>
                        </div>
                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3">5.0</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
                        <a href="#" class="text-primary font-bold bg-yellow hover:bg-green-800 hover:text-white focus:ring-4 focus:outline-none rounded-lg text-sm px-5 py-2.5 text-center">Add to cart</a>
                    </div>
                </div>
            </div>

            <!-- Item 7 -->
            <div class="w-full h-[530px] max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="p-8 rounded-t-lg  object-contain mx-auto w-[350px] h-[350px]" src="{{ asset('/images/pet-herb.png') }}" alt="product image" />
                </a>
                <div class="px-5 pb-5">
                    <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Liver Up™ EQ32 | Horse Liver Detox for Energy</h5>
                    </a>
                    <div class="flex items-center mt-1 mb-5">
                        <div class="flex items-center space-x-1 rtl:space-x-reverse">
                            <p>⭐⭐⭐⭐⭐</p>
                        </div>
                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3">5.0</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
                        <a href="#" class="text-primary font-bold bg-yellow hover:bg-green-800 hover:text-white focus:ring-4 focus:outline-none rounded-lg text-sm px-5 py-2.5 text-center">Add to cart</a>
                    </div>
                </div>
            </div>
        </div>




    </div>

    <!-- Slide indicators -->
    <div class="flex justify-center mt-4 space-x-2">
        <div @click="activeSlide = 0" :class="{ 'bg-green-500': activeSlide === 0 }" class="w-4 h-4 rounded-full bg-gray-300 cursor-pointer"></div>
        <div @click="activeSlide = 1" :class="{ 'bg-green-500': activeSlide === 1 }" class="w-4 h-4 rounded-full bg-gray-300 cursor-pointer"></div>
    </div>
</div>



<div x-data="{ activeSlide: 0, totalSlides: 3 }" x-init="setInterval(() => { activeSlide = (activeSlide + 1) % totalSlides }, 5000)" class="relative w-full overflow-hidden lg:hidden">
    <!-- Slider container -->
    <div class="flex transition-transform duration-500 ease-in-out"
         :style="{ transform: 'translateX(-' + activeSlide * 100 + '%)' }">

        <!-- Slide 1 (1 item per slide on md and sm screens) -->
        <div class="flex-shrink-0 w-full flex flex-row items-center justify-around space-x-10 p-10 md:flex-col sm:flex-col">
            <!-- Item 1 -->
            <div class="w-full h-[530px] max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="p-8 rounded-t-lg  object-contain mx-auto w-[350px] h-[350px]" src="{{ asset('/images/liver-up.png') }}" alt="product image" />
                </a>
                <div class="px-5 pb-5">
                    <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Liver Up™ EQ32 | Horse Liver Detox for Energy</h5>
                    </a>
                    <div class="flex items-center mt-1 mb-5">
                        <div class="flex items-center space-x-1 rtl:space-x-reverse">
                            <p>⭐⭐⭐⭐⭐</p>
                        </div>
                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3">5.0</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
                        <a href="#" class="text-primary font-bold bg-yellow hover:bg-green-800 hover:text-white focus:ring-4 focus:outline-none rounded-lg text-sm px-5 py-2.5 text-center">Add to cart</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="flex-shrink-0 w-full flex flex-row items-center justify-around space-x-10 p-10 md:flex-col sm:flex-col">
            <!-- Item 2 -->
            <div class="w-full h-[530px] max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="p-8 rounded-t-lg  object-contain mx-auto w-[350px] h-[350px]" src="{{ asset('/images/human-herb.png') }}" alt="product image" />
                </a>
                <div class="px-5 pb-5">
                    <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Liver Up™ EQ32 | Horse Liver Detox for Energy</h5>
                    </a>
                    <div class="flex items-center mt-1 mb-5">
                        <div class="flex items-center space-x-1 rtl:space-x-reverse">
                            <p>⭐⭐⭐⭐⭐</p>
                        </div>
                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3">5.0</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
                        <a href="#" class="text-primary font-bold bg-yellow hover:bg-green-800 hover:text-white focus:ring-4 focus:outline-none rounded-lg text-sm px-5 py-2.5 text-center">Add to cart</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="flex-shrink-0 w-full flex flex-row items-center justify-around space-x-10 p-10 md:flex-col sm:flex-col">
            <!-- Item 3 -->
            <div class="w-full h-[530px] max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="p-8 rounded-t-lg  object-contain mx-auto w-[350px] h-[350px]" src="{{ asset('/images/pet-herb.png') }}" alt="product image" />
                </a>
                <div class="px-5 pb-5">
                    <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Liver Up™ EQ32 | Horse Liver Detox for Energy</h5>
                    </a>
                    <div class="flex items-center mt-1 mb-5">
                        <div class="flex items-center space-x-1 rtl:space-x-reverse">
                            <p>⭐⭐⭐⭐⭐</p>
                        </div>
                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3">5.0</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
                        <a href="#" class="text-primary font-bold bg-yellow hover:bg-green-800 hover:text-white focus:ring-4 focus:outline-none rounded-lg text-sm px-5 py-2.5 text-center">Add to cart</a>
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

