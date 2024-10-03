<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

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