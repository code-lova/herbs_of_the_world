<x-frontend-layout>

    <section class="w-full h-auto bg-section-color py-20">
        <div class="px-10 grid grid-cols-1 lg:grid-cols-2 gap-2 py-10">
            <div class="items-start mt-10">
                <h1 class="font-bold text-4xl head_text dark:text-white">Herbs of the world:<br/> Proven, Time Honored Formulations Since 1995</h1>
                <p class="subhead_text mt-4">
                    We are a Natural Farm Store located in Salmon, Idaho, USA. Herbs of the world has formulated over 300 herbal mixtures for sporting and show horses since 1997! .
                </p>
                <div class="mt-4">
                    <button class="bg-yellow py-3 px-8 rounded-3xl font-bold heading_color hover:text-primary transitioning">
                        Shop Now
                    </button>
                </div>


                <div class="w-full grid grid-cols-2 mt-8 gap-1">
                    <!-- Delivery Icon Section -->
                    <div class="flex flex-row items-center gap-2">
                        <div class="bg-white p-3 rounded-full hover:bg-green-900 transition duration-300 shadow-md">
                            <img
                                src="{{ asset('/images/delivery.svg') }}" alt="Search Icon"
                                width="50"
                                height="50"
                                class="object-contain transition duration-300 hover:invert hover:brightness-0 hover:filter"
                            />
                        </div>
                        <p class="font-bold heading_color">Cheap Export & Returns</p>
                    </div>

                    <!-- Money Icon Section -->
                    <div class="flex flex-row items-center gap-4">
                        <div class="bg-white p-2 rounded-full hover:bg-green-900 transition duration-300 shadow-md">
                            <img
                                src="{{ asset('/images/currency.svg') }}" alt="Search Icon"
                                width="50"
                                height="50"
                                class="object-contain transition duration-300 hover:invert hover:brightness-0 hover:filter"
                            />
                        </div>
                        <p class="font-bold heading_color">Money Back Guarantee</p>
                    </div>
                </div>

                <div class="w-full grid grid-cols-2 mt-8 gap-1">
                    <!-- Delivery Icon Section -->
                    <div class="flex flex-row items-center gap-2">
                        <div class="bg-white p-3 rounded-full hover:bg-green-900 transition duration-300 shadow-md">
                            <img
                                src="{{ asset('/images/secure.svg') }}" alt="Search Icon"
                                width="50"
                                height="50"
                                class="object-contain transition duration-300 hover:invert hover:brightness-0 hover:filter"
                            />
                        </div>
                        <p class="font-bold heading_color">100% Secure Payment</p>
                    </div>

                    <!-- Money Icon Section -->
                    <div class="flex flex-row items-center gap-4">
                        <div class="bg-white p-2 rounded-full hover:bg-green-900 transition duration-300 shadow-md">
                            <img
                                src="{{ asset('/images/support.svg') }}" alt="Search Icon"
                                width="50"
                                height="50"
                                class="object-contain transition duration-300 hover:invert hover:brightness-0 hover:filter"
                            />
                        </div>
                        <p class="font-bold heading_color">Online Support</p>
                    </div>
                </div>
            </div>
            <div class="hidden lg:flex justify-center mt-8 relative">
                <img
                    src="{{ asset('/images/herbs-of-the-world.webp') }}"
                    alt="Search Icon"
                    class="object-fit xl:w-[700px] xl:h-[550px] lg:w-[500px] h-[500px] rounded-lg"
                />
                <div class="absolute inset-0 bg-gradient-to-r from-black/300 to-transparent"></div>
            </div>
        </div>
    </section>


    <section class="w-full h-auto bg-white py-14">
        <div class="px-10">
            <h1 class="text-center subheading_text">Featured Categories</h1>
            <div class="mt-4">
                <p class="mt-4 text-center sub_text mb-8 md:w-2/4 mx-auto">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Nesciunt quam deleniti reprehenderit magnam voluptatum natus
                </p>

            </div>

            @include('inc.frontend.featured_category')
        </div>
    </section>

    <section class="w-full h-auto bg-white py-14">
        <div class="px-10">
            <h1 class="text-center subheading_text">Popular Products</h1>
            <div class="mt-4">
                <p class="mt-4 text-center sub_text mb-8 md:w-2/4 mx-auto">
                    Suscipit tellus mauris a diam maecenas sed enim ut sem.
                    Turpis egestas maecenas pharetra convallis posuere
                </p>
            </div>

            @include('inc.frontend.popular_products')
        </div>
    </section>


    <section class="w-full h-auto bg-section-color py-14">
        <div class="px-10 lg:px-32">

            @include('inc.frontend.promotion')
        </div>
    </section>

    <section class="w-full h-auto bg-white py-2 mt-16">

        @include('inc.frontend.about_us')

    </section>

    <section class="w-full h-auto bg-white py-2">
        <div class="px-6 lg:px-32">
            <div class="mt-20">
                <h1 class="text-center subheading_text">Your Trust is Our Top Concern</h1>
            </div>
           <div class="mt-4 text-center sub_text mb-16">
                <p>Feugiat sed lectus vestibulum mattis ullamcorper velit.</p>
                <p>Sed pulvinar proin gravida hendrerit lectus</p>
           </div>
            @include('inc.frontend.testimonials')
        </div>
    </section>

    <section class="w-full h-auto bg-white">

        <div class="mt-2">
            <h1 class="text-center subheading_text">Google Ratings and Review</h1>
        </div>
        <div class="mt-4 text-center sub_text mb-16 px-6">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, in.</p>
       </div>
    </section>

    <section class="w-full h-auto bg-white mb-20">
        <div class="px-6 lg:px-32">
            <div class="mt-20">
                <h1 class="text-center subheading_text">Have Any Questions ?</h1>
            </div>
           <div class="mt-4 text-center sub_text mb-8 md:w-2/4 mx-auto">
                <p>FElementum eu facilisis sed odio morbi quis commodo odio. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque</p>
           </div>

           @include('inc.frontend.questions')
        </div>
    </section>

    <section class="w-full h-auto bg-gray-300 py-10">
       @include('inc.frontend.subscription')
    </section>

    <section class="w-full h-auto bg-green-900 py-14">
        @include('inc.frontend.footer')
    </section>




</x-frontend-layout>
