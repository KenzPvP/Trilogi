<?php

use Illuminate\Support\Facades\Route;

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
