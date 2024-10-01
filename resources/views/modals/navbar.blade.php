<nav class="z-[999] w-full fixed">
    <div class="bg-zinc-800/35 backdrop-blur-xl container px-10 md:px-40 py-6 flex justify-between items-center">
        <!-- Logo -->
        <div>
            <img src="trilogiBg.png" alt="YourCompany Logo" class="h-14">
        </div>

        <!-- Hamburger Menu Button for Mobile -->
        <div class="lg:hidden">
            <button id="menu-toggle" class="text-white focus:outline-none">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                    </path>
                </svg>
            </button>
        </div>

        <!-- Navigation Links (hidden on mobile, visible on desktop) -->
        <ul class="hidden  lg:flex space-x-6">
            <li><a href="/#home"
                    class="text-white tracking-wide font-medium transition-colors hover:text-gold">Beranda</a></li>

            <li><a href="/#services"
                    class="text-white tracking-wide font-medium transition-colors hover:text-gold">Produk &
                    layanan</a></li>

            <li><a href="/#aboutus"
                    class="text-white tracking-wide font-medium transition-colors hover:text-gold">Tentang
                    kami</a></li>

        </ul>

        <a href="contact" class="hidden lg:block w-fit rounded-lg px-10 py-4 bg-gold hover:bg-yellow-600 font-semibold">
            Hubungi kami
        </a>

    </div>

    <!-- Drawer Menu (hidden by default) -->
    <div id="menu"
        class="hidden lg:hidden bg-black bg-opacity-90 fixed inset-0 z-30 flex flex-col items-center justify-center space-y-8">
        <a href="#home" class="text-white text-xl hover:text-gold">Beranda</a>
        <a href="#aboutus" class="text-white text-xl hover:text-gold">Tentang kami</a>
        <a href="#services" class="text-white text-xl hover:text-gold">Produk & layanan</a>
        <a href="contact" class="text-white text-xl hover:text-gold">Kontak</a>
        <button id="close-menu" class="text-white focus:outline-none mt-8">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>
</nav>

<script>
    const menuToggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('menu');
    const closeMenu = document.getElementById('close-menu');

    menuToggle.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });

    closeMenu.addEventListener('click', () => {
        menu.classList.add('hidden');
    });
</script>
