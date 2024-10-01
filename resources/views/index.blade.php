<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trilogi</title>

    <link rel="icon" href="{{ asset('Trilogi.png') }}" type="image/png">
    @vite('resources/css/app.css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <main>
        @include('modals.navbar')
        <!-- Hero Section -->
        @include('sections.home_section')
        @include('sections.carousel_section')
        @include('sections.product_section')
        @include('sections.aboutus_section')
        @include('sections.footer_section')

    </main>
</body>

</html>
