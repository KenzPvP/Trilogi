<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catalog</title>
    <link rel="icon" href="{{ asset('Trilogi.png') }}" type="image/png">
    @vite('resources/css/app.css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
@include('modals.navbar')

<body class="bg-zinc-800">



    <!-- Hero Section -->
    <section class="bg-cover bg-center h-64"
        style="background-image: url('https://source.unsplash.com/random/1200x400');">
        <div class="flex items-center justify-center h-full bg-zinc-900">
            <h1 class="text-white text-4xl font-bold">Our Product Catalog</h1>
        </div>
    </section>

    <!-- Catalog Section -->
    <section class="max-w-7xl mx-auto py-8 ">
        <div class="flex flex-col md:flex-row">
            <!-- Product Image -->
            <div class="md:w-1/2">
                <img class="w-full h-auto object-cover rounded-lg" src="/contoh1.png" alt="Product Image">
            </div>

            <!-- Product Info -->
            <div class="md:w-1/2 md:ml-8 mt-8 md:mt-0">
                <h2 class="text-3xl font-semibold text-gray-50">CASHQUIP HL-3300</h2>
                <p class="text-gray-300 mt-2">
                    3.950.000 
                </p>

                <div class="mt-4">
                    <h3 class="text-lg font-semibold text-gray-800">Description</h3>
                    <p class="text-gray-300 mt-2">
                        UV and Magnetic
                        Authentication Control
                        Advance Stacker
                        Informative LCD Display
                        Friction Technology
                    </p>
                </div>

                <div class="mt-4">
                    <h3 class="text-lg font-semibold text-gray-800">Specifications</h3>
                    <ul class="list-disc list-inside text-gray-300 mt-2">
                        <li>Feature 1: Details about feature 1</li>
                        <li>Feature 2: Details about feature 2</li>
                        <li>Feature 3: Details about feature 3</li>
                    </ul>
                </div>

                <div class="mt-6">
                    <button class="bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-500">Add to Cart</button>
                </div>
            </div>
        </div>
    </section>

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

</html>
