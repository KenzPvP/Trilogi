<div class="flex flex-col relative">
    {{-- services --}}
    <section id="services" class="flex h-full">
        <div class="container gap-7">
            <div class="flex-flex-col gap-6 p-20">
                <div data-aos="fade-down" class="flex flex-col gap-3 justify-center items-center">
                    <h2
                        class="text-2xl text-center md:text-4xl font-lora font-medium tracking-wider text-white transition-all">
                        Produk & layanan
                    </h2>
                    <p class="text-lg text-center md:text-xl font-raleway text-gray-200 mb-8">Kami menyediakan
                        produk & layanan yang
                        sesuai dengan
                        kebutuhan
                    </p>
                </div>
                <div data-aos="fade-in" class="min-h-screen flex flex-col items-center">
                    <!-- Tab Navigation -->

                    <!-- Main Content -->
                    <div class="flex flex-col w-full max-w-5xl mt-6 shadow-lg">
                        <!-- Responsive Tabs -->
                        <div
                            class="w-full flex flex-col md:flex-row justify-center space-y-2 md:space-y-0 md:space-x-2">
                            <button id="btn-slide1"
                                class="px-6 py-4 w-full md:w-64 bg-yellow-500 hover:bg-yellow-600 text-white rounded-xl focus:outline-none transition-transform transform hover:scale-105 hover:shadow-lg">
                                Solusi IT
                            </button>
                            <button id="btn-slide2"
                                class="px-6 py-4 w-full md:w-64 bg-yellow-500 hover:bg-yellow-600 text-white rounded-xl focus:outline-none transition-transform transform hover:scale-105 hover:shadow-lg not-active">
                                Solusi Perbankan
                            </button>
                            <button id="btn-slide3"
                                class="px-6 py-4 w-full md:w-64 bg-yellow-500 hover:bg-yellow-600 text-white rounded-xl focus:outline-none transition-transform transform hover:scale-105 hover:shadow-lg not-active">
                                Solusi Edukasi
                            </button>
                        </div>

                        <!-- Responsive Content -->

                        {{-- Slide 1: Solusi IT --}}
                        <div id="slide1"
                            class="flex flex-col md:flex-row p-10 space-y-6 md:space-y-0 md:space-x-6 min-h-[500px]">
                            <!-- Left Side -->
                            <div class="flex flex-col gap-6 md:w-1/2">
                                <img src="/solusiIT.jpg" class="md:w-4/6 w-full h-auto rounded-full" alt="IT Solutions">
                                <p class="text-gray-400 text-start">
                                    Layanan kami mencakup proses pengadaan, instalasi, mengembangkan, mengamankan, dan
                                    mengintegrasikan
                                    infrastruktur IT antara lain LAN, fiber optic, server, router dll.
                                </p>
                            </div>

                            <!-- Right Side -->
                            <div class="flex flex-col gap-8 md:w-1/2">
                                <!-- Produk 1 -->
                                <div class="flex flex-col gap-2">
                                    <div class="flex items-center gap-3">
                                        <span
                                            class="bg-yellow-500 text-white rounded-full w-10 h-10 flex items-center justify-center font-bold">
                                            1
                                        </span>
                                        <h4 class="text-white font-semibold">IT Infrastruktur</h4>
                                    </div>
                                    <p class="text-gray-400 text-start">
                                        Layanan kami mencakup pengadaan, instalasi, pengembangan, pengamanan, dan
                                        integrasi infrastruktur IT.
                                    </p>

                                </div>

                                <!-- Produk 2 -->
                                <div class="flex flex-col gap-2">
                                    <div class="flex items-center gap-3">
                                        <span
                                            class="bg-yellow-500 text-white rounded-full w-10 h-10 flex items-center justify-center font-bold">
                                            2
                                        </span>
                                        <h4 class="text-white font-semibold">IT Outsourcing</h4>
                                    </div>
                                    <p class="text-gray-400 text-start">
                                        Pengelolaan sistem TI pelanggan meliputi infrastruktur, jaringan, keamanan, dan
                                        aplikasi.
                                    </p>

                                </div>

                                <!-- Produk 3 -->
                                <div class="flex flex-col gap-2">
                                    <div class="flex items-center gap-3">
                                        <span
                                            class="bg-yellow-500 text-white rounded-full w-10 h-10 flex items-center justify-center font-bold">
                                            3
                                        </span>
                                        <h4 class="text-white font-semibold">IT Konsultan</h4>
                                    </div>
                                    <p class="text-gray-400 text-start">
                                        Konsultasi untuk tata kelola strategi TI, desain aplikasi, infrastruktur,
                                        keamanan, dan jaringan.
                                    </p>

                                </div>
                            </div>
                        </div>

                        {{-- Slide 2: Solusi Perbankan --}}
                        <div id="slide2"
                            class="flex flex-col md:flex-row p-10 space-y-6 md:space-y-0 md:space-x-6 min-h-[500px]">
                            <!-- Left Side -->
                            <div class="flex flex-col gap-6 md:w-1/2">
                                <img src="/solusiPerbankan.jpg" class="md:w-4/6 w-full h-auto rounded-full" alt="Banking Solutions">
                                <p class="text-gray-400 text-start">
                                    Layanan kami mencakup solusi perbankan yang mendukung operasional BPR dan koperasi.
                                </p>
                            </div>

                            <!-- Right Side -->
                            <div class="flex flex-col gap-8 md:w-1/2">
                                <!-- Produk 1 -->
                                <div class="flex flex-col gap-2">
                                    <div class="flex items-center gap-3">
                                        <span
                                            class="bg-yellow-500 text-white rounded-full w-10 h-10 flex items-center justify-center font-bold">
                                            1
                                        </span>
                                        <h4 class="text-white font-semibold">Core Banking System</h4>
                                    </div>
                                    <p class="text-gray-400 text-start">
                                        Mendukung operasional BPR dan koperasi.
                                    </p>
                                    <a href="/catalog"
                                        class="bg-gray-500 hover:bg-gray-600 text-white py-2 px-4 rounded-lg text-sm font-semibold mt-2">
                                        Learn More
                                    </a>
                                </div>

                                <!-- Produk 2 -->
                                <div class="flex flex-col gap-2">
                                    <div class="flex items-center gap-3">
                                        <span
                                            class="bg-yellow-500 text-white rounded-full w-10 h-10 flex items-center justify-center font-bold">
                                            2
                                        </span>
                                        <h4 class="text-white font-semibold">Digital Banking</h4>
                                    </div>
                                    <p class="text-gray-400 text-start">
                                        Solusi digital banking yang membantu pelaporan operasional.
                                    </p>
                                    <a href="/catalog"
                                        class="bg-gray-500 hover:bg-gray-600 text-white py-2 px-4 rounded-lg text-sm font-semibold mt-2">
                                        Learn More
                                    </a>
                                </div>

                                <!-- Produk 3 -->
                                <div class="flex flex-col gap-2">
                                    <div class="flex items-center gap-3">
                                        <span
                                            class="bg-yellow-500 text-white rounded-full w-10 h-10 flex items-center justify-center font-bold">
                                            3
                                        </span>
                                        <h4 class="text-white font-semibold">Peralatan Perbankan</h4>
                                    </div>
                                    <p class="text-gray-400 text-start">
                                        Penyediaan peralatan perbankan terintegrasi.
                                    </p>
                                    <a href="/catalog"
                                        class="bg-gray-500 hover:bg-gray-600 text-white py-2 px-4 rounded-lg text-sm font-semibold mt-2">
                                        Learn More
                                    </a>
                                </div>
                            </div>
                        </div>

                        {{-- Slide 3: Solusi Edukasi --}}
                        <div id="slide3"
                            class="flex flex-col md:flex-row p-10 space-y-6 md:space-y-0 md:space-x-6 min-h-[500px]">
                            <!-- Left Side -->
                            <div class="flex flex-col gap-6 md:w-1/2">
                                <img src="/solusiEdu.jpg" class="md:w-4/6 w-full h-auto rounded-full" alt="Educational Solutions">
                                <p class="text-gray-400 text-start">
                                    Layanan edukasi terpadu, terintegrasi dengan platform pembelajaran digital.
                                </p>
                            </div>

                            <!-- Right Side -->
                            <div class="flex flex-col gap-8 md:w-1/2">
                                <!-- Produk 1 -->
                                <div class="flex flex-col gap-2">
                                    <div class="flex items-center gap-3">
                                        <span
                                            class="bg-yellow-500 text-white rounded-full w-10 h-10 flex items-center justify-center font-bold">
                                            1
                                        </span>
                                        <h4 class="text-white font-semibold">LMS Terpadu</h4>
                                    </div>
                                    <p class="text-gray-400 text-start">
                                        Platform pembelajaran digital terintegrasi dengan SIAKAD dan platform
                                        pembelajaran lainnya.
                                    </p>

                                </div>

                                <!-- Produk 2 -->
                                <div class="flex flex-col gap-2">
                                    <div class="flex items-center gap-3">
                                        <span
                                            class="bg-yellow-500 text-white rounded-full w-10 h-10 flex items-center justify-center font-bold">
                                            2
                                        </span>
                                        <h4 class="text-white font-semibold">Smart Classroom</h4>
                                    </div>
                                    <p class="text-gray-400 text-start">
                                        Kelas berbasis digital untuk pembelajaran yang lebih interaktif.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>

</div>


<script>
    AOS.init();
</script>

<script>
    // Get all buttons
    const btnSlide1 = document.getElementById('btn-slide1');
    const btnSlide2 = document.getElementById('btn-slide2');
    const btnSlide3 = document.getElementById('btn-slide3');

    // Get all slides
    const slide1 = document.getElementById('slide1');
    const slide2 = document.getElementById('slide2');
    const slide3 = document.getElementById('slide3');

    // Function to show a specific slide
    function showSlide(slide, btn) {
        // Hide all slides
        slide1.classList.add('hidden');
        slide2.classList.add('hidden');
        slide3.classList.add('hidden');

        // Show the selected slide
        slide.classList.remove('hidden');

        // Remove active class from all buttons
        btnSlide1.classList.add('not-active');
        btnSlide2.classList.add('not-active');
        btnSlide3.classList.add('not-active');

        // Add active class to the clicked button
        btn.classList.remove('not-active');
        btn.classList.add('active');
    }

    // Add click event listeners to buttons
    btnSlide1.addEventListener('click', () => showSlide(slide1, btnSlide1));
    btnSlide2.addEventListener('click', () => showSlide(slide2, btnSlide2));
    btnSlide3.addEventListener('click', () => showSlide(slide3, btnSlide3));

    // Set the default style for the first button
    function defaultStyle() {
        showSlide(slide1, btnSlide1);
    }

    // Call defaultStyle to set the initial button state and show the first slide
    defaultStyle();
</script>
