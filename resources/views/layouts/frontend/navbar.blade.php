<nav x-data="{ open: false, dropdownOpen: false }" class="bg-section-color dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700 fixed top-0 w-full z-50">
    <div class="w-full h-20 px-4 sm:px-2 lg:px-12 shadow-md shadow-gray-200">
        <div class="flex justify-between items-center h-16 mt-8">
            <div class="flex -space-x-5">
                <!-- Logo -->
                <div class="-ml-10 flex items-center -mt-3">
                    <a href="{{ url('/') }}">
                        <img src={{ asset('/images/logo.png') }} alt="Logo" class="w-[170px] h-[160px]">
                    </a>
                </div>

                <!-- Navigation Links (Desktop) -->
                <div class="hidden lg:mt-14 lg:flex space-x-8 sm:space-x-4 sm:ml-10">
                    <a href="{{ url('/') }}" class="text-primary font-bold dark:text-white hover:text-gray-700 dark:hover:text-gray-300">Home</a>
                    <a href="{{ url('/') }}" class="text-primary font-bold dark:text-white hover:text-gray-700 dark:hover:text-gray-300">Affiliate</a>

                    <a href="{{ url('/') }}" class="text-primary font-bold dark:text-white hover:text-gray-700 dark:hover:text-gray-300">Blogs</a>

                    <div class="relative" x-data="{ dropdownOpen: false }">
                        <button @click="dropdownOpen = !dropdownOpen" class="text-primary font-bold dark:text-white hover:text-green-700 dark:hover:text-gray-300">
                            Shop
                            <svg class="w-5 h-5 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <!-- Dropdown Menu (Herbal Shop) -->
                        <div x-show="dropdownOpen" @click.away="dropdownOpen = false" class="absolute mt-2 w-48 rounded-md shadow-lg bg-white dark:bg-gray-800 z-10">
                            <a href="/shop/men" class="block px-4 py-2 text-secondry font-semibold dark:text-white hover:bg-green-100 dark:hover:bg-gray-700">Herbs for Horses</a>
                            <a href="/shop/women" class="block px-4 py-2 text-secondry font-semibold dark:text-white hover:bg-green-100 dark:hover:bg-gray-700">Herbs for People</a>
                            <a href="/shop/kids" class="block px-4 py-2 text-secondry font-semibold dark:text-white hover:bg-green-100 dark:hover:bg-gray-700">Herbs for Pets</a>
                        </div>
                    </div>

                    <!-- Dropdown for Explore Menu -->
                    <div class="relative" x-data="{ exploreOpen: false }"> <!-- Added Alpine.js binding here -->
                        <button @click="exploreOpen = !exploreOpen" class="text-primary font-bold dark:text-white hover:text-green-700 dark:hover:text-gray-300">
                            Explore
                            <svg class="w-5 h-5 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <!-- Dropdown Menu (Explore) -->
                        <div x-show="exploreOpen" @click.away="exploreOpen = false" class="absolute mt-2 w-48 rounded-md shadow-lg bg-white dark:bg-gray-800 z-10">
                            <a href="/explore/nature" class="block px-4 py-2 font-semibold text-secondry dark:text-white hover:bg-green-100 dark:hover:bg-gray-700">Competitive Horse Trainers</a>
                            <a href="/explore/wellness" class="block px-4 py-2 font-semibold text-secondry dark:text-white hover:bg-green-100 dark:hover:bg-gray-700">How To Use</a>
                            <a href="/explore/remedies" class="block px-4 py-2 font-semibold text-secondry dark:text-white hover:bg-green-100 dark:hover:bg-gray-700">WholeSale</a>
                            <a href="/explore/remedies" class="block px-4 py-2 font-semibold text-secondry dark:text-white hover:bg-green-100 dark:hover:bg-gray-700">Testimonials</a>

                        </div>
                    </div>


                    <a href="{{ url('/about') }}" class="text-primary font-bold dark:text-white hover:text-gray-700 dark:hover:text-gray-300">About Us</a>
                    <a href="{{ url('/contact') }}" class="text-primary font-bold dark:text-white hover:text-gray-700 dark:hover:text-gray-300">Contact</a>

                </div>
            </div>

            <!-- Icons (Desktop) -->
            <div class="hidden xl:flex lg:flex items-center space-x-6">
                <a href="#" class="bg-primary p-1 rounded-full">
                    <img
                        src="{{ asset('/images/search.png') }}" alt="Search Icon"
                        width="30"
                        height="30"
                        class="text-white object-contain"
                    />
                </a>
                <a href={{ url('/login') }} class="bg-primary p-1 rounded-full" title="login">
                    <img
                        src="{{ asset('/images/profile.png') }}" alt="Search Icon"
                        width="30"
                        height="30"
                        class="text-white object-contain"
                    />
                </a>
                <a href="#" class="bg-primary p-1 rounded-full">
                    <img
                        src="{{ asset('/images/cart.png') }}" alt="Search Icon"
                        width="30"
                        height="30"
                        class="text-white object-contain"
                    />
                </a>
            </div>

            <!-- Hamburger Menu (Mobile only) -->
            <div class="-mr-2 -mt-2 flex items-center lg:hidden">
                <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-primary hover:text-white hover:bg-primary focus:outline-none focus:bg-gray-100 focus:text-primary transition duration-250 ease-in-out">
                     <!-- Conditionally render the hamburger menu or close icon -->
                    <template x-if="!open">
                        <!-- Hamburger menu icon when closed -->
                        <svg class="h-10 w-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </template>

                    <template x-if="open">
                        <!-- Close icon when menu is open -->
                        <svg class="h-10 w-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </template>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu (hidden on lg:) -->
    <div :class="{'block': open, 'hidden': !open}" class="lg:hidden">
        <div class="pt-2 pb-3 space-y-4 px-6">
            <a href="{{ url('/') }}" class="block text-primary font-bold dark:text-white ">Home</a>
            <a href="{{ url('/') }}" class="block text-primary font-bold dark:text-white">Affiliate</a>
            <a href="{{ url('/') }}" class="block text-primary font-bold dark:text-white">Blog</a>



            <div class="relative" x-data="{ dropdownOpen: false }">
                <button @click="dropdownOpen = !dropdownOpen" class="text-primary font-bold dark:text-white hover:text-green-700 dark:hover:text-gray-300">
                    Shop
                    <svg class="w-5 h-5 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <!-- Dropdown Menu (Herbal Shop) -->
                <div x-show="dropdownOpen" @click.away="dropdownOpen = false" class="absolute mt-2 w-48 rounded-md shadow-lg bg-white dark:bg-gray-800 z-10">
                    <a href="/shop/men" class="block px-4 py-2 text-secondry font-semibold dark:text-white hover:bg-green-100 dark:hover:bg-gray-700">Herbs for Horses</a>
                    <a href="/shop/women" class="block px-4 py-2 text-secondry font-semibold dark:text-white hover:bg-green-100 dark:hover:bg-gray-700">Herbs for People</a>
                    <a href="/shop/kids" class="block px-4 py-2 text-secondry font-semibold dark:text-white hover:bg-green-100 dark:hover:bg-gray-700">Herbs for Pets</a>
                </div>
            </div>
            <div class="relative" x-data="{ exploreOpen: false }"> <!-- Added Alpine.js binding here -->
                <button @click="exploreOpen = !exploreOpen" class="text-primary font-bold dark:text-white hover:text-green-700 dark:hover:text-gray-300">
                    Explore
                    <svg class="w-5 h-5 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <!-- Dropdown Menu (Explore) -->
                <div x-show="exploreOpen" @click.away="exploreOpen = false" class="absolute mt-2 w-48 rounded-md shadow-lg bg-white dark:bg-gray-800 z-10">
                    <a href="/explore/nature" class="block px-4 py-2 font-semibold text-secondry dark:text-white hover:bg-green-100 dark:hover:bg-gray-700">Competitive Horse Trainers</a>
                    <a href="/explore/wellness" class="block px-4 py-2 font-semibold text-secondry dark:text-white hover:bg-green-100 dark:hover:bg-gray-700">How To Use</a>
                    <a href="/explore/remedies" class="block px-4 py-2 font-semibold text-secondry dark:text-white hover:bg-green-100 dark:hover:bg-gray-700">WholeSale</a>
                    <a href="/explore/remedies" class="block px-4 py-2 font-semibold text-secondry dark:text-white hover:bg-green-100 dark:hover:bg-gray-700">Testimonials</a>

                </div>
            </div>


            <a href="{{ url('/about') }}" class="block text-primary font-bold dark:text-white">About Us</a>
            <a href="{{ url('/contact') }}" class="block text-primary font-bold dark:text-white">Contact</a>
        </div>

        <!-- Mobile Icons -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="flex items-center space-x-4">
                <a href="#" class="bg-primary p-1 rounded-full ml-3">
                    <img
                        src="{{ asset('/images/search.png') }}" alt="Search Icon"
                        width="30"
                        height="30"
                        class="text-white object-contain"
                    />
                </a>

                <a href="#" class="bg-primary p-1 rounded-full">
                    <img
                        src="{{ asset('/images/profile.png') }}" alt="Search Icon"
                        width="30"
                        height="30"
                        class="text-white object-contain"
                    />
                </a>
                <a href="#" class="bg-primary p-1 rounded-full">
                    <img
                        src="{{ asset('/images/cart.png') }}" alt="Search Icon"
                        width="30"
                        height="30"
                        class="text-white object-contain"
                    />
                </a>
            </div>
        </div>
    </div>
</nav>
