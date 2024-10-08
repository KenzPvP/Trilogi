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
<body>

    <main>
        @include('modals.navbar')
        @include('Catalog.catalogs_page')
        @include('Catalog.catalogs2_page')
        @include('sections.footer_section')
    </main>

</body>
</html>
