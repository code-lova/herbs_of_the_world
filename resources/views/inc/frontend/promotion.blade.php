<div class="grid grid-cols-1 lg:grid-cols-2 mt-12">
    <div class="items-start">
        <h1 class="subheading_text">Herbs For Pets: <br/> Black Seed Oil for Dogs P50 </h1>
        <p class="sub_text mt-2">Do you need a natural herbal antibiotic for your dog™ Traditonal Plant Based, according to stories told anciently
            Black Seed Oil is an herbs for pet product known for its antibiotic, anti-oxidant, anti-inflammatory and anticancer properties.</p>
            <p class="heading_color font-bold text-lg mt-4 item-start">READ MORE..</p>
        <div class="flex flex-row  items-start space-x-6 mt-6">
            <p class="text-gray-500 font-bold text-4xl line-through">$400</p>
            <p class="heading_color font-bold text-4xl">$300</p>
        </div>

        <div x-data="countdown()" x-init="startCountdown()" class="flex flex-row items-start space-x-4 mt-4">
            <!-- Days Box -->
            <div class="border border-green-900 rounded-md w-[60px] h-[60px] lg:w-[100px] lg:h-[80px] ">
                <div class="flex flex-col items-center lg:text-center lg:mt-2">
                    <p class="heading_color font-extrabold text-base lg:text-xl mt-1" x-text="days">00</p>
                    <p class="sub_text sm:text-sm">Days</p>
                </div>
            </div>

            <!-- Hours Box -->
            <div class="border border-green-900 rounded-md w-[60px] h-[60px] lg:w-[100px] lg:h-[80px]">
                <div class="flex flex-col items-center lg:text-center lg:mt-2">
                    <p class="heading_color font-extrabold text-base lg:text-xl mt-1" x-text="hours">00</p>
                    <p class="sub_text sm:text-sm">Hours</p>
                </div>
            </div>

            <!-- Minutes Box -->
            <div class="border border-green-900 rounded-md w-[60px] h-[60px] lg:w-[100px] lg:h-[80px]">
                <div class="flex flex-col items-center lg:text-center lg:mt-2">
                    <p class="heading_color font-extrabold text-base lg:text-xl mt-1" x-text="minutes">00</p>
                    <p class="sub_text sm:text-sm">Mins</p>
                </div>
            </div>

            <!-- Seconds Box -->
            <div class="border border-green-900 rounded-md w-[60px] h-[60px] lg:w-[100px] lg:h-[80px]">
                <div class="flex flex-col items-center lg:text-center lg:mt-2">
                    <p class="heading_color font-extrabold text-base lg:text-xl mb-1" x-text="seconds">00</p>
                    <p class="sub_text sm:text-sm">Secs</p>
                </div>
            </div>
        </div>

        <div class="mt-8">
            <button class="bg-yellow py-3 px-8 rounded-3xl font-bold heading_color hover:text-primary transitioning">
                Shop Now
            </button>
        </div>
    </div>
    <div class="items-center mx-auto mt-16 lg:mt-0">
        <img
            src="{{ asset('/images/countdown.webp') }}"
            alt="Herbs for dogs"
            class="object-cover w-auto h-auto"
        />

    </div>
</div>


@section('countdown')

<!-- Alpine.js Countdown Script -->
<script>
    function countdown() {
        return {
            days: 0,
            hours: 0,
            minutes: 0,
            seconds: 0,
            targetDate: new Date('2024-10-31T20:59:59'),  // Set your countdown target date here

            startCountdown() {
                const calculateTime = () => {
                    const now = new Date();
                    const timeDiff = this.targetDate - now;

                    if (timeDiff >= 0) {
                        this.days = Math.floor(timeDiff / (1000 * 60 * 60 * 24));
                        this.hours = Math.floor((timeDiff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        this.minutes = Math.floor((timeDiff % (1000 * 60 * 60)) / (1000 * 60));
                        this.seconds = Math.floor((timeDiff % (1000 * 60)) / 1000);
                    } else {
                        clearInterval(this.interval);
                    }
                };

                calculateTime();  // Initial call to display the countdown immediately

                this.interval = setInterval(() => {
                    calculateTime();
                }, 1000);  // Update every second
            }
        };
    }
</script>

@endsection
