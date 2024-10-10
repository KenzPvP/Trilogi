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
Route::get('/catalog', function () {
    return view('Catalog.catalog_page');
});
Route::get('/catalogs', function () {
    return view('catalogs');
});
Route::get('/catalogs2', function () {
    return view('Catalog.catalogs2_page');
});
Route::get('/catalogs1', function () {
    return view('Catalog.catalogs_page');
});



Route::get('/download-catalog', [CatalogController::class, 'download'])->name('catalog.download');
