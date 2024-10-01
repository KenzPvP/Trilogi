<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRILOGI</title>
    <link rel="icon" href="{{ asset('Trilogi.png') }}" type="image/png">
    @vite('resources/css/app.css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="overflow-x-hidden bg-neutral-950 font-raleway">



    @include('modals.navbar')
    <!-- Hero Section -->
    <section id="home"
        class="min-h-screen relative pt-28 md:pt-0 px-10 md:px-20 flex flex-col md:flex-row gap-3 h-full items-start md:items-center justify-between z-20">
        <div class="flex flex-col w-full lg:w-[65%] order-2 md:order-1">
            <h1 class="md:text-6xl text-2xl font-semibold mb-4 text-gray-300 font-raleway tracking-wider">
                <span class="text-white">Mitra tepercaya</span>
                <span class="text-gold">Anda</span>
                <span class="text-white">menavigasi era digital</span>
            </h1>
            <p class="text-xl text-white mb-8 font-raleway">
                <span class="text-gray-300">Dedikasi kami terhadap teknologi dan kesuksesan pelanggan,</span>
                <span class="text-gold">menjadikan kami</span>
                <span class="text-gray-300">mitra tepercaya Anda dalam memenuhi kebutuhan IT dan Digitalisasi</span>
            </p>
            <a href="#contact"
                class="border-2 z-50 text-gray-300 font-semibold font-raleway tracking-widest w-fit px-8 py-4 rounded-s-full rounded-e-full hover:border-gold hover:text-gold flex items-center gap-3 group transition-all">
                Bergabung
                <svg xmlns="http://www.w3.org/2000/svg" class="rotate-[140deg]" width="1.5em" height="1.5em"
                    viewBox="0 0 24 24">
                    <path class="group-hover:stroke-gold" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" d="M20 12H4m0 0l6-6m-6 6l6 6" />
                </svg>
            </a>
        </div>
        <img src="/Trilogi.png" alt="" class="h-[50%] order-1 md:order-2">
    </section>




    <div style="background-image: url('kantor.jpg');" class="w-screen h-[500px] relative">
        <h2
            class="text-2xl p-10 text-center md:text-4xl font-lora font-medium tracking-wider text-white transition-all">
            Catalog
        </h2>

        <div class="flex flex-row justify-center gap-8">
            <!-- Catalog Item -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/500" alt="Product" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-800">Product Name</h3>
                    <p class="text-gray-600 mt-2">Short description of the product goes here.</p>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-gray-800 font-bold">$99.99</span>
                        <a href="#" class="text-blue-500 hover:text-blue-600">View Details</a>
                    </div>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/500" alt="Product" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-800">Product Name</h3>
                    <p class="text-gray-600 mt-2">Short description of the product goes here.</p>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-gray-800 font-bold">$99.99</span>
                        <a href="#" class="text-blue-500 hover:text-blue-600">View Details</a>
                    </div>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/500" alt="Product" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-800">Product Name</h3>
                    <p class="text-gray-600 mt-2">Short description of the product goes here.</p>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-gray-800 font-bold">$99.99</span>
                        <a href="#" class="text-blue-500 hover:text-blue-600">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Repeat for more catalog items -->
            <!-- Copy the entire div from 'Catalog Item' to create more items in the catalog -->
        </div>

    </div>

    {{-- Tentang kami --}}
    <section id="aboutus" class="p-10 md:p-20 min-h-screen text-gray-300 flex flex-col gap-6">

        <h2 data-aos="fade-right"
            class="text-3xl md:text-4xl w-fit font-lora font-medium tracking-wider pl-5 border-l-4 border-gray-400 hover:border-gold hover:text-gold transition-all">
            Tentang kami
        </h2>
        <p data-aos="fade-up" class="font-raleway text-lg md:text-xl text-gray-400">
            PT Trilogi Global Inovasi adalah perusahaan teknologi terkemuka yang berdedikasi untuk menghadirkan solusi
            inovatif di bidang IT. Kami berkomitmen untuk mempercepat transformasi digital dan mendorong kemajuan bisnis
            pelanggan melalui teknologi yang berkelanjutan.
        </p>

        <div data-aos="fade-up" class="grid grid-cols-1 lg:grid-cols-3 gap-4 lg:gap-6 mt-6 md:mt-10 h-full">
            <!-- Visi Section -->
            <div
                class="flex flex-col items-center justify-between text-center bg-zinc-800 p-6 rounded-lg shadow-lg transition-all transform hover:scale-[1.02] w-full">
                <div class="flex items-center justify-center gap-3 mb-4 md:mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 14 14"
                        class="text-gold">
                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M13.48 7.516a6.5 6.5 0 1 1-6.93-7" />
                            <path d="M9.79 8.09A3 3 0 1 1 5.9 4.21M7 7l2.5-2.5m2 .5l-2-.5l-.5-2l2-2l.5 2l2 .5z" />
                        </g>
                    </svg>
                    <h2 class="text-lg md:text-xl font-semibold text-gold font-raleway">Visi</h2>
                </div>
                <p class="text-gray-300 text-sm md:text-base mb-4">
                    Menjadi Partner Terpercaya Transformasi Digital Dengan Menghadirkan Solusi Teknologi yang Inovatif
                    dan Berkelanjutan.
                </p>
                <p
                    class="text-gray-300 text-sm md:text-base italic border-l-4 pl-4 border-gold p-4 bg-gray-700/30 rounded-lg font-raleway">
                    Moto: Mitra tepercaya Anda menavigasi era digital. Dedikasi kami terhadap teknologi dan kesuksesan
                    pelanggan, menjadikan kami mitra tepercaya Anda dalam memenuhi kebutuhan IT dan Digitalisasi.
                </p>
            </div>

            <!-- Misi Section -->
            <div
                class="flex flex-col lg:col-span-2 items-center text-center bg-zinc-800 p-6 md:p-8 rounded-lg shadow-lg transition-transform transform hover:scale-[1.02]">
                <div class="flex items-center justify-center gap-3 mb-4 md:mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"
                        class="text-gold">
                        <g fill="none" fill-rule="evenodd">
                            <path d="M24 0v24H0V0z" />
                            <path fill="currentColor"
                                d="M12 4a2 2 0 0 0-2 2h4a2 2 0 0 0-2-2M9.354 3c.705-.622 1.632-1 2.646-1s1.94.378 2.646 1H18a2 2 0 0 1 2 2v15a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2zM8.126 5H6v15h12V5h-2.126q.124.481.126 1v1a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V6q.002-.519.126-1M8 11a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1m0 4a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1" />
                        </g>
                    </svg>
                    <h2 class="text-lg md:text-xl font-semibold text-gold font-raleway">Misi</h2>
                </div>
                <ul class="text-gray-300 space-y-2 md:space-y-4 text-left list-disc list-inside">
                    <li class="text-sm md:text-base"> Menyediakan Solusi Terdepan: Mengembangkan dan menyediakan solusi
                        IT yang berkualitas untuk mendukung pertumbuhan bisnis pelanggan.</li>
                    <li class="text-sm md:text-base"> Mendorong Inovasi: Berkomitmen terus berinovasi dan beradaptasi
                        dengan teknologi terbaru untuk memberikan kebebasan bisnis pelanggan.</li>
                    <li class="text-sm md:text-base"> Fokus pada Pelanggan: Memberikan layanan unggul dengan pendekatan
                        personal dan solusi optimal.</li>
                    <li class="text-sm md:text-base"> Membangun Tim Berkualitas: Menciptakan lingkungan kerja yang
                        positif dan mendukung untuk mencapai kinerja terbaik dalam layanan.</li>
                </ul>
            </div>
        </div>
    </section>


    <div class="flex flex-col relative">
        {{-- services --}}
        <section id="services" class="flex  h-full">
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
                                    class="px-6 py-4 w-full md:w-64 text-gray-700 rounded-t-lg focus:outline-none transition-transform transform hover:scale-105 hover:shadow-lg">
                                    Solusi IT
                                </button>
                                <button id="btn-slide2"
                                    class="px-6 py-4 w-full md:w-64 text-gray-700  rounded-t-lg focus:outline-none transition-transform transform hover:scale-105  hover:shadow-lg not-active">
                                    Solusi Perbankan
                                </button>
                                <button id="btn-slide3"
                                    class="px-6 py-4 w-full md:w-64 text-gray-700 rounded-t-lg focus:outline-none transition-transform transform hover:scale-105  hover:shadow-lg not-active">
                                    Solusi Edukasi
                                </button>
                            </div>


                            <!-- Responsive Content -->

                            {{-- slide 1 --}}
                            <div id="slide1"
                                class="flex flex-col md:flex-row rounded-xl bg-zinc-900 p-10 space-y-6 md:space-y-0 md:space-x-6">
                                <!-- Left Side -->
                                <div
                                    class="max-w-full md:max-w-sm p-6 border border-zinc-700 rounded-lg shadow bg-zinc-800">
                                    <a href="#">
                                        <h5
                                            class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                            Solusi IT
                                        </h5>
                                    </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                        Kami melayani berbagai solusi di bidang IT seperti IT infrastruktur, IT
                                        outsourcing,
                                        dan IT konsultan.
                                    </p>
                                </div>

                                <!-- Right Side -->
                                <div class="flex-1 border border-zinc-700 rounded-lg shadow bg-zinc-800 p-6">
                                    <div class="space-y-4">
                                        <div>
                                            <h4 class="text-white font-semibold">IT Infrastruktur</h4>
                                            <p class="text-gray-400">
                                                Partner teknologi untuk mengembangkan problem-solution-fit,
                                                product-market-fit, dan business-model-fit
                                            </p>
                                        </div>
                                        <div>
                                            <h4 class="text-white font-semibold">IT outsourcing</h4>
                                            <p class="text-gray-400">
                                                Berbagai pilihan baseline code yang teruji sehingga proses inovasi tidak
                                                perlu start-from-scratch
                                            </p>
                                        </div>
                                        <div>
                                            <h4 class="text-white font-semibold">IT Konsultan</h4>
                                            <p class="text-gray-400">
                                                Booster SDM teknis baik secara individual maupun tim yang berpengalaman
                                                dalam proses lean innovation
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- slide 2 --}}
                            <div id="slide2"
                                class="flex flex-col md:flex-row rounded-xl bg-zinc-900 p-10 space-y-6 md:space-y-0 md:space-x-6">
                                <!-- Left Side -->
                                <div
                                    class="max-w-full md:max-w-sm p-6 border border-zinc-700 rounded-lg shadow bg-zinc-800">
                                    <a href="#">
                                        <h5
                                            class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                            Solusi Perbankan
                                        </h5>
                                    </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                        Kami melayani berbagai solusi untuk perbankan seperti Core Banking System,
                                        Digital banking & surrounding system ,
                                        dan Peralatan perbankan.
                                    </p>
                                </div>

                                <!-- Right Side -->
                                <div class="flex-1 border border-zinc-700 rounded-lg shadow bg-zinc-800 p-6">
                                    <div class="space-y-4">
                                        <div>
                                            <h4 class="text-white font-semibold">Core Banking System</h4>
                                            <div class="flex flex-row justify-between gap-6">
                                                <p class="text-gray-400">
                                                    Layanan kami yang akan mendukung operasional BPR maupun
                                                    koperasi
                                                </p>
                                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                                        <path fill="white" d="M11 19v-6H2v-2h9V5l11 7z" />
                                                    </svg>
                                                </button>

                                            </div>
                                        </div>
                                        <div>
                                            <h4 class="text-white font-semibold">Digital banking & surrounding system
                                            </h4>
                                            <p class="text-gray-400">
                                                Layanan kami yang akan mendukung operasional maupun
                                                pelaporan yang dibutuhkan oleh BPR
                                            </p>
                                        </div>
                                        <div>
                                            <h4 class="text-white font-semibold">Peralatan perbankan </h4>
                                            <p class="text-gray-400">
                                                Layanan yang menyediakan peralatan perbankan untuk
                                                diimplementasikan sebagai solusi mandiri atau terintegrasi dengan
                                                system perbankan
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- slide 3 --}}
                            <div id="slide3"
                                class="flex flex-col md:flex-row rounded-xl bg-zinc-900 p-10 space-y-6 md:space-y-0 md:space-x-6">
                                <!-- Left Side -->
                                <div
                                    class="max-w-full md:max-w-sm p-6 border border-zinc-700 rounded-lg shadow bg-zinc-800">
                                    <a href="#">
                                        <h5
                                            class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                            Solusi Edukasi
                                        </h5>
                                    </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                        Kami melayani berbagai solusi di bidang Edukasi seperti LMS Terpadu
                                        dan Smart Classroom.
                                    </p>
                                </div>

                                <!-- Right Side -->
                                <div class="flex-1 border border-zinc-700 rounded-lg shadow bg-zinc-800 p-6">
                                    <div class="space-y-4">
                                        <div>
                                            <h4 class="text-white font-semibold">LMS Terpadu</h4>
                                            <p class="text-gray-400">
                                                Layanan platform digital yang membantu Pelaksanaan Proses
                                                Pembelajaran Secara Lebih Efektif dan Interaktif. Terintegrasi
                                                dengan SIAKAD, dan platform pembelajaran sync seperti zoom dan
                                                google meet, sehingga memudahkan proses Administrasi Input dan
                                                Enroll data dilakukan secara otomatis dari System yang Lain
                                            </p>
                                        </div>
                                        <div>
                                            <h4 class="text-white font-semibold">Smart Classroom</h4>
                                            <p class="text-gray-400">
                                                Layanan kelas berbasis digital yang terintegrasi dengan platform
                                                pembelajaran
                                            </p>
                                        </div>
                                        <div>
                                            <h4 class="text-white font-semibold">IT Konsultan</h4>
                                            <p class="text-gray-400">
                                                Booster SDM teknis baik secara individual maupun tim yang berpengalaman
                                                dalam proses lean innovation
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <div
            class="absolute inset-0 bottom-0 -z-10 h-full w-full items-center px-5 py-24 [background:radial-gradient(125%_125%_at_50%_10%,#0B0B0C_40%,rgba(245,233,168,0.3)_100%)]">
        </div>

    </div>




    <!-- Footer -->
    <footer id="contact" class="bg-neutral-950 text-gray-300 py-10">
        <div class="container mx-auto px-10 md:px-20">
            <!-- Contact Information -->
            <div class="mb-8">
                <h3 class="text-lg font-semibold text-gold mb-4">Hubungi Kami</h3>
                <p class="text-gray-400 mb-2">PT Trilogi Global Inovasi</p>
                <p class="text-gray-400 mb-2">Graha Pena Lt 5</p>
                <p class="text-gray-400 mb-2">Jl. Ahmad Yani No.88, Ketintang, Kec. Gayungan, Surabaya, Jawa Timur
                    60231</p>
                <p class="text-gray-400 mb-2">Telp : 031-8202042</p>
                <p class="text-gray-400 mb-2">WA : 0822888717</p>
            </div>

            <!-- Footer Bottom -->
            <div class="text-center">
                <p class="text-gray-400">&copy; 2024 PT Trilogi Global Inovasi. All Rights Reserved.</p>
            </div>
        </div>
    </footer>



</body>

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



</html>
