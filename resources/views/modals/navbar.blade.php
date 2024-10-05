<nav id="navbar" class="z-[999] w-full fixed transition-all duration-300">
    <div class="bg-transparent container px-10 md:px-40 py-6 flex justify-between items-center transition-all duration-300">
        <!-- Logo -->
        <div>
            <img src="{{ asset('trilogiBg.png') }}" alt="YourCompany Logo" class="h-14">
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
        <ul class="hidden lg:flex space-x-6">
            <li><a href="/#home"
                    class="text-white tracking-wide font-medium transition-colors hover:text-gold">Beranda</a></li>

            <li><a href="/#services"
                    class="text-white tracking-wide font-medium transition-colors hover:text-gold">Produk & layanan</a></li>

            <li><a href="/#aboutus"
                    class="text-white tracking-wide font-medium transition-colors hover:text-gold">Tentang kami</a></li>

            <!-- Dropdown Menu for Catalog -->
            <li class="relative group">
                <a href="/catalogs" class="text-white tracking-wide font-medium transition-colors hover:text-gold">Catalog</a>
                <ul class="absolute left-0 mt-2 w-48 bg-zinc-800 rounded-md opacity-0 group-hover:opacity-100 invisible group-hover:visible transition-all duration-300">
                    <li><a href="/catalog/view/1" class="block px-4 py-2 text-white hover:bg-zinc-700 hover:text-gold">Catalog 1</a></li>
                    <li><a href="/catalog/view/2" class="block px-4 py-2 text-white hover:bg-zinc-700 hover:text-gold">Catalog 2</a></li>
                    <li><a href="/catalog/view/3" class="block px-4 py-2 text-white hover:bg-zinc-700 hover:text-gold">Catalog 3</a></li>
                </ul>
            </li>
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
    const navbar = document.getElementById('navbar');
    const menuToggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('menu');
    const closeMenu = document.getElementById('close-menu');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.add('bg-zinc-800/75', 'backdrop-blur-xl', 'shadow-md');
        } else {
            navbar.classList.remove('bg-zinc-800/75', 'backdrop-blur-xl', 'shadow-md');
        }
    });

    menuToggle.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });

    closeMenu.addEventListener('click', () => {
        menu.classList.add('hidden');
    });
</script>
