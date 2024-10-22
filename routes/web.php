<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogController;

Route::get('/', function () {
    return view('index');
});
Route::get('/trilogi', function () {
    return view('trilogi');
});
Route::get('/contact', function () {
    return view('sections.contact_section');
});
Route::get('/comingsoon', function () {
    return view('components.comingsoon_page');
});




Route::get('/download-catalog', [CatalogController::class, 'downloadCatalog1'])->name('catalog.download.catalog1');
Route::get('/download-poster-mirko', [CatalogController::class, 'downloadCatalog2'])->name('catalog.download.catalog2');

