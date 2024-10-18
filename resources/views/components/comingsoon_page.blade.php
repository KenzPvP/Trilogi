<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coming Soon</title>
    <link rel="icon" href="{{ asset('Trilogi.png') }}" type="image/png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="relative bg-zinc-800 text-white h-screen flex flex-col items-center justify-center">
    <!-- Navbar -->
    <div class="absolute top-0 left-0 w-full">
        @include('modals.navbar')
    </div>

    <!-- Background image -->
    <img src="/bg.png" class="absolute inset-0 h-full w-full object-cover z-0" alt="Background Image">

    <!-- Main content -->
    <div class="relative z-20 text-center">
        <h1 class="text-6xl font-bold mb-4">Coming Soon</h1>
        <p class="text-lg mb-8">Our website is under construction, we'll be here soon with our new awesome site.</p>
        <!-- Countdown timer or a form could go here in the future -->
        <p class="text-gray-400 mt-8">Stay tuned for updates</p>
    </div>

</body>

</html>
