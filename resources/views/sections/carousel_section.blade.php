

<section id="carousel">


<div id="indicators-carousel" class="relative w-full" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-screen">
         <!-- Item 1 -->
        <div class="duration-700 opacity-30" data-carousel-item="active">
            <img src="/pic 2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 opacity-30" data-carousel-item>
            <img src="/pic 4.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 opacity-30" data-carousel-item>
            <img src="/pic 5.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>

    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

</section>

<script>
    AOS.init();
</script>


<script>
   document.addEventListener('DOMContentLoaded', function() {
    const carousel = document.querySelector('[data-carousel="static"]');
    const items = carousel.querySelectorAll('[data-carousel-item]');
    const prevButton = carousel.querySelector('[data-carousel-prev]');
    const nextButton = carousel.querySelector('[data-carousel-next]');
    const indicators = carousel.querySelectorAll('[data-carousel-slide-to]');
    let activeIndex = 0;
    const intervalTime = 5000; // Durasi dalam milidetik (5 detik)

    function updateCarousel(index) {
        items.forEach((item, i) => {
            item.classList.toggle('hidden', i !== index);
            item.setAttribute('data-carousel-item', i === index ? 'active' : '');
        });
        indicators.forEach((indicator, i) => {
            indicator.setAttribute('aria-current', i === index);
        });
    }

    prevButton.addEventListener('click', function() {
        activeIndex = (activeIndex > 0) ? activeIndex - 1 : items.length - 1;
        updateCarousel(activeIndex);
    });

    nextButton.addEventListener('click', function() {
        activeIndex = (activeIndex < items.length - 1) ? activeIndex + 1 : 0;
        updateCarousel(activeIndex);
    });

    indicators.forEach((indicator, i) => {
        indicator.addEventListener('click', function() {
            activeIndex = i;
            updateCarousel(activeIndex);
        });
    });

    // Inisialisasi pertama kali
    updateCarousel(activeIndex);

    // Auto-slide function
    setInterval(() => {
        nextButton.click();
    }, intervalTime);
});


</script>


