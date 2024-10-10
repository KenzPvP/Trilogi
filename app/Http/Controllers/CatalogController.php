<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function download()
    {
        // Tentukan lokasi file di folder public
        $filePath = public_path('catalogs/contohCatalog.pdf');

        // Periksa apakah file ada
        if (!file_exists($filePath)) {
            return abort(404, 'File not found.');
        }

        // Jika file ada, proses untuk mendownload
        return response()->download($filePath, 'contohCatalog.pdf');
    }
}
