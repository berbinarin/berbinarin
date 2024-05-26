<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;

class PDFController extends Controller

{
    public function show($filename)
    {
        $path = storage_path('/app/pdfs/' . $filename);

        if (!File::exists($path)) {
            abort(404);
        }

        return response()->file($path);
    }
}