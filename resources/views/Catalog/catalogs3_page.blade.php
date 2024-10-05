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
                <h1 class= "text-4xl font-bold">Catalog 3</h1>
            </div>
        </section>

        <div class="flex flex-col md:flex-row justify-center items-center p-10 gap-8">

            <!-- Posts Section -->
            <section class="w-full md:w-2/3 flex flex-col gap-2 px-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 justify-center mx-auto">
                    <!-- Card 1 -->
                    @foreach ($data as $item)
                    <div
                        class="bg-zinc-800 hover:shadow-[0_8px_15px_-2px_rgba(255,255,0,0.75),0_4px_10px_-3px_rgba(255,255,0,0.75)]
                    overflow-hidden border border-gray-300 transition-shadow duration-200 hover:bg-white ">

                        <div class=" hover:text-black duration-200">
                            <img class="w-full h-48 object-cover"  src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}">
                            <div class="p-6">
                                <h2 class="text-2xl font-bold">{{ $item->name }}</h2>
                                <p class="mt-2 line-clamp-[3]">
                                    {{ $item->description }}
                                </p>
                                <div class="flex justify-between items-center mt-4">
                                    <a href="{{ route('catalog-views', $item->id) }}" class="text-yellow-500 hover:text-yellow-600 font-medium">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>


        </div>

    </div>




</body>

</html>
