<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function downloadCatalog1()
    {
        $filePath = public_path('catalogs/contohCatalog.pdf');

        if (!file_exists($filePath)) {
            return abort(404, 'File not found.');
        }

        return response()->download($filePath, 'contohCatalog.pdf');
    }

    public function downloadCatalog2()
    {
        $filePath = public_path('catalogs/Poster_Mirko (3).pdf');

        if (!file_exists($filePath)) {
            return abort(404, 'File not found.');
        }

        return response()->download($filePath, 'Poster_Mirko (3).pdf');
    }
}
