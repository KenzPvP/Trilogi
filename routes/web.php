<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'admin'])->name('dashboard');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/catalog/admin', [CatalogController::class, 'index'])->name('catalog-index');
    Route::get('/catalog/create', [CatalogController::class, 'create'])->name('catalog-create');
    Route::post('/catalog/store', [CatalogController::class, 'store'])->name('catalog-store');
    Route::get('/catalog/edit/{id}', [CatalogController::class, 'edit'])->name('catalog-edit');
    Route::post('/catalog/update/{id}', [CatalogController::class, 'update'])->name('catalog-update');
    Route::delete('/catalog/delete/{id}', [CatalogController::class, 'delete'])->name('catalog-delete');
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

Route::get('/catalog/view/{category}', [CatalogController::class, 'view'])->name('catalog-view');
Route::get('/catalog/views/{id}', [CatalogController::class, 'views'])->name('catalog-views');

Route::get('/catalogs', [CatalogController::class, 'viewCatalog'])->name('catalog.view');