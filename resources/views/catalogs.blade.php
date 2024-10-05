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

        <!-- Include catalogs_page dan kirim data dari $dataForPage1 -->
        @include('Catalog.catalogs_page', ['data' => $dataForPage1])

        <!-- Include catalogs2_page dan kirim data dari $dataForPage2 -->
        @include('Catalog.catalogs2_page', ['data' => $dataForPage2])

        <!-- Include catalogs3_page dan kirim data dari $dataForPage3 -->
        @include('Catalog.catalogs3_page', ['data' => $dataForPage3])

        @include('sections.footer_section')
    </main>

</body>
</html>
