<!-- Slider Container -->
<div x-data="{ currentSlide: 0, slides: 2 }" class="relative overflow-hidden mb-12 hidden lg:block">
    <!-- Slides Wrapper -->
    <div
        class="flex transition-transform duration-500 ease-out mb-12"
        :style="`transform: translateX(-${currentSlide * 100}%)`"
    >
        <!-- Individual Slide Group -->
        <div class="flex flex-none w-full space-x-5">
            <a href="{{ url('/') }}" class="flex flex-col text-center w-[500px] h-[300px] rounded-lg shadow-lg shadow-green-200 p-6">
                <img
                    src="{{ asset('/images/avatar.png') }}"
                    alt="avatar"
                    class="rounded-full object-contain w-20 h-20 mx-auto mb-4"
                />
                <p class="mb-4">⭐⭐⭐⭐</p>
                <p class="mb-4 sub_text line-clamp-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum sunt nemo commodi ad pariatur. Sunt.</p>
                <p class="heading_color font-bold text-base">Luiz Mendez</p>
            </a>
            <a href="{{ url('/') }}" class="flex flex-col text-center w-[500px] h-[300px] rounded-lg shadow-lg shadow-green-200 p-6">
                <img
                    src="{{ asset('/images/avatar.png') }}"
                    alt="avatar"
                    class="rounded-full object-contain w-20 h-20 mx-auto mb-4"
                />
                <p class="mb-4">⭐⭐⭐⭐</p>
                <p class="mb-4 sub_text line-clamp-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum sunt nemo commodi ad pariatur. Sunt.</p>
                <p class="heading_color font-bold text-base">Luiz Mendez</p>
            </a>
            <a href="{{ url('/') }}" class="flex flex-col text-center w-[500px] h-[300px] rounded-lg shadow-lg shadow-green-200 p-6">
                <img
                    src="{{ asset('/images/avatar.png') }}"
                    alt="avatar"
                    class="rounded-full object-contain w-20 h-20 mx-auto mb-4"
                />
                <p class="mb-4">⭐⭐⭐⭐</p>
                <p class="mb-4 sub_text line-clamp-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum sunt nemo commodi ad pariatur. Sunt.</p>
                <p class="heading_color font-bold text-base">Luiz Mendez</p>
            </a>
        </div>
        <!-- Repeat this block for additional slides -->
        <div class="flex flex-none w-full space-x-5">
            <a href="{{ url('/') }}" class="flex flex-col text-center w-[500px] h-[300px] rounded-lg shadow-lg shadow-green-200 p-6">
                <img
                    src="{{ asset('/images/avatar.png') }}"
                    alt="avatar"
                    class="rounded-full object-contain w-20 h-20 mx-auto mb-4"
                />
                <p class="mb-4">⭐⭐⭐⭐</p>
                <p class="mb-4 sub_text line-clamp-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum sunt nemo commodi ad pariatur. Sunt.</p>
                <p class="heading_color font-bold text-base">Luiz Mendez</p>
            </a>
            <a href="{{ url('/') }}" class="flex flex-col text-center w-[500px] h-[300px] rounded-lg shadow-lg shadow-green-200 p-6">
                <img
                    src="{{ asset('/images/avatar.png') }}"
                    alt="avatar"
                    class="rounded-full object-contain w-20 h-20 mx-auto mb-4"
                />
                <p class="mb-4">⭐⭐⭐⭐</p>
                <p class="mb-4 sub_text line-clamp-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum sunt nemo commodi ad pariatur. Sunt.</p>
                <p class="heading_color font-bold text-base">Luiz Mendez</p>
            </a>
            <a href="{{ url('/') }}" class="flex flex-col text-center w-[500px] h-[300px] rounded-lg shadow-lg shadow-green-200 p-6">
                <img
                    src="{{ asset('/images/avatar.png') }}"
                    alt="avatar"
                    class="rounded-full object-contain w-20 h-20 mx-auto mb-4"
                />
                <p class="mb-4">⭐⭐⭐⭐</p>
                <p class="mb-4 sub_text line-clamp-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum sunt nemo commodi ad pariatur. Sunt.</p>
                <p class="heading_color font-bold text-base">Luiz Mendez</p>
            </a>
        </div>
    </div>

    <!-- Navigation Buttons -->
    <div class="flex flex-row justify-center space-x-3">
        <button
            class="relative   -translate-y-1/2 bg-green-500 text-white px-4 py-2 rounded shadow hover:bg-green-600"
            @click="currentSlide = (currentSlide === 0) ? slides - 1 : currentSlide - 1"
        >
            <
        </button>
        <button
            class="relative   -translate-y-1/2 bg-green-500 text-white px-4 py-2 rounded shadow hover:bg-green-600"
            @click="currentSlide = (currentSlide === slides - 1) ? 0 : currentSlide + 1"
        >
            >
        </button>
    </div>
</div>



<!-- Additional Slider Container for Medium and Small Screens -->
<div x-data="{ currentTestimonial: 0, testimonials: 4 }" class="relative overflow-hidden lg:hidden">
    <!-- Testimonial Wrapper -->
    <div
        class="flex w-full transition-transform duration-500 ease-out"
        :style="`transform: translateX(-${currentTestimonial * 100}%)`"
    >
        <!-- Testimonial 1 -->
        <div class="flex flex-none w-full">
            <a href="{{ url('/') }}" class="flex flex-col text-center w-full h-[300px] rounded-lg shadow-lg shadow-green-200 p-6">
                <img
                    src="{{ asset('/images/avatar.png') }}"
                    alt="avatar"
                    class="rounded-full object-contain w-20 h-20 mx-auto mb-4"
                />
                <p class="mb-4">⭐⭐⭐⭐</p>
                <p class="mb-4 sub_text line-clamp-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum sunt nemo commodi ad pariatur. Sunt.</p>
                <p class="heading_color font-bold text-base">Luiz Mendez</p>
            </a>
        </div>
        <!-- Testimonial 2 -->
        <div class="flex flex-none w-full">
            <a href="{{ url('/') }}" class="flex flex-col text-center w-full h-[300px] rounded-lg shadow-lg shadow-green-200 p-6">
                <img
                    src="{{ asset('/images/avatar.png') }}"
                    alt="avatar"
                    class="rounded-full object-contain w-20 h-20 mx-auto mb-4"
                />
                <p class="mb-4">⭐⭐⭐⭐</p>
                <p class="mb-4 sub_text line-clamp-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum sunt nemo commodi ad pariatur. Sunt.</p>
                <p class="heading_color font-bold text-base">Luiz Mendez</p>
            </a>
        </div>
        <!-- Testimonial 3 -->
        <div class="flex flex-none w-full">
            <a href="{{ url('/') }}" class="flex flex-col text-center w-full h-[300px] rounded-lg shadow-lg shadow-green-200 p-6">
                <img
                    src="{{ asset('/images/avatar.png') }}"
                    alt="avatar"
                    class="rounded-full object-contain w-20 h-20 mx-auto mb-4"
                />
                <p class="mb-4">⭐⭐⭐⭐</p>
                <p class="mb-4 sub_text line-clamp-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum sunt nemo commodi ad pariatur. Sunt.</p>
                <p class="heading_color font-bold text-base">Luiz Mendez</p>
            </a>
        </div>
        <!-- Testimonial 4 -->
        <div class="flex flex-none w-full">
            <a href="{{ url('/') }}" class="flex flex-col text-center w-full h-[300px] rounded-lg shadow-lg shadow-green-200 p-6">
                <img
                    src="{{ asset('/images/avatar.png') }}"
                    alt="avatar"
                    class="rounded-full object-contain w-20 h-20 mx-auto mb-4"
                />
                <p class="mb-4">⭐⭐⭐⭐</p>
                <p class="mb-4 sub_text line-clamp-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum sunt nemo commodi ad pariatur. Sunt.</p>
                <p class="heading_color font-bold text-base">Luiz Mendez</p>
            </a>
        </div>
    </div>

    <!-- Navigation Buttons for Medium and Small Screens -->
    <div class="flex flex-row justify-center space-x-3 mt-16">
        <button
            class="relative -translate-y-1/2 bg-green-500 text-white px-4 py-2 rounded shadow hover:bg-green-600"
            @click="currentTestimonial = (currentTestimonial === 0) ? testimonials - 1 : currentTestimonial - 1"
        >
            <
        </button>
        <button
            class="relative -translate-y-1/2 bg-green-500 text-white px-4 py-2 rounded shadow hover:bg-green-600"
            @click="currentTestimonial = (currentTestimonial === testimonials - 1) ? 0 : currentTestimonial + 1"
        >
            >
        </button>
    </div>
</div>
