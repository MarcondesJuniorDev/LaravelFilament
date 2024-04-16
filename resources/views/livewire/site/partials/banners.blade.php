<div class="bg-white w-max-screen-2xl dark:bg-gray-800 overflow-hidden shadow-xl">
    <div class="p-2 sm:px-10 sm:py-8 dark:bg-gray-800">
        <h1 class="text-2xl font-semibold text-gray-900 dark:text-white text-center">
            {{ __('Banners') }}
        </h1>
        <div class="swiper w-full h-96" id="swiper-banners">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide bg-red-500">Slide 1</div>
                <div class="swiper-slide bg-yellow-500">Slide 2</div>
                <div class="swiper-slide bg-green-500">Slide 3</div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>
    </div>
</div>

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
@endpush
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper1 = new Swiper('#swiper-banners', {
            // Optional parameters
            spaceBetween: 30,
            effect: "fade",
            direction: 'horizontal',
            loop: true,
            rewind: true,
            autoplay: {
                delay: 2500,
            },

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
                type: "progressbar",
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        });
    </script>
@endpush
