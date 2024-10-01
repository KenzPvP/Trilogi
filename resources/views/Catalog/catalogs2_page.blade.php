<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catalogs</title>
    <link rel="icon" href="{{ asset('Trilogi.png') }}" type="image/png">
    @vite('resources/css/app.css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
@include('modals.navbar')

<body class="font-family-karla flex flex-col gap-5 bg-zinc-800">





    <div class="flex flex-col gap-5">

        <!-- Hero Section -->
        <section class="bg-cover bg-center h-64"
            style="background-image: url('https://source.unsplash.com/random/1200x400');">
            <div class="flex items-center justify-center h-full bg-zinc-900">
                <h1 class="text-white text-4xl font-bold">Catalog 2</h1>
            </div>
        </section>

        <div class="flex flex-col md:flex-row justify-center items-center p-10 gap-8">

            <!-- Posts Section -->
            <section class="w-full md:w-2/3 flex flex-col gap-8 px-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 justify-center mx-auto">
                    <!-- Card 1 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img class="w-full h-48 object-cover" src="/contoh1.png" alt="Blog Image">
                        <div class="p-6">
                            <h2 class="text-2xl font-bold text-gray-800">Blog Title</h2>
                            <p class="text-gray-600 mt-2">
                                This is a short excerpt from the blog to give readers an idea of the content.
                            </p>
                            <div class="flex justify-between items-center mt-4">
                                <a href="/article" class="text-blue-500 hover:text-blue-600 font-medium">Read More</a>
                                <span class="text-gray-400 text-sm">September 13, 2024</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img class="w-full h-48 object-cover" src="https://via.placeholder.com/400x200"
                            alt="Blog Image">
                        <div class="p-6">
                            <h2 class="text-2xl font-bold text-gray-800">Blog Title</h2>
                            <p class="text-gray-600 mt-2">
                                This is a short excerpt from the blog to give readers an idea of the content.
                            </p>
                            <div class="flex justify-between items-center mt-4">
                                <a href="#" class="text-blue-500 hover:text-blue-600 font-medium">Read More</a>
                                <span class="text-gray-400 text-sm">September 13, 2024</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img class="w-full h-48 object-cover" src="https://via.placeholder.com/400x200"
                            alt="Blog Image">
                        <div class="p-6">
                            <h2 class="text-2xl font-bold text-gray-800">Blog Title</h2>
                            <p class="text-gray-600 mt-2">
                                This is a short excerpt from the blog to give readers an idea of the content.
                            </p>
                            <div class="flex justify-between items-center mt-4">
                                <a href="#" class="text-blue-500 hover:text-blue-600 font-medium">Read More</a>
                                <span class="text-gray-400 text-sm">September 13, 2024</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img class="w-full h-48 object-cover" src="https://via.placeholder.com/400x200"
                            alt="Blog Image">
                        <div class="p-6">
                            <h2 class="text-2xl font-bold text-gray-800">Blog Title</h2>
                            <p class="text-gray-600 mt-2">
                                This is a short excerpt from the blog to give readers an idea of the content.
                            </p>
                            <div class="flex justify-between items-center mt-4">
                                <a href="#" class="text-blue-500 hover:text-blue-600 font-medium">Read More</a>
                                <span class="text-gray-400 text-sm">September 13, 2024</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img class="w-full h-48 object-cover" src="https://via.placeholder.com/400x200"
                            alt="Blog Image">
                        <div class="p-6">
                            <h2 class="text-2xl font-bold text-gray-800">Blog Title</h2>
                            <p class="text-gray-600 mt-2">
                                This is a short excerpt from the blog to give readers an idea of the content.
                            </p>
                            <div class="flex justify-between items-center mt-4">
                                <a href="#" class="text-blue-500 hover:text-blue-600 font-medium">Read More</a>
                                <span class="text-gray-400 text-sm">September 13, 2024</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 6 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img class="w-full h-48 object-cover" src="https://via.placeholder.com/400x200"
                            alt="Blog Image">
                        <div class="p-6">
                            <h2 class="text-2xl font-bold text-gray-800">Blog Title</h2>
                            <p class="text-gray-600 mt-2">
                                This is a short excerpt from the blog to give readers an idea of the content.
                            </p>
                            <div class="flex justify-between items-center mt-4">
                                <a href="#" class="text-blue-500 hover:text-blue-600 font-medium">Read More</a>
                                <span class="text-gray-400 text-sm">September 13, 2024</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>




</body>

</html>
