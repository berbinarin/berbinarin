<?php

namespace App\Http\Controllers\Dashboard\PsikotestTestProductManagement\Psikotest\Psikotest\BDI;

use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\BDI\SkorBdi;
use Illuminate\Http\Request;

class SkorBdiController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'soal_bdi_id' => 'required|exists:soal_bdi_id',
            'skor' => 'required|string|max:225',
            'hasil' => 'required|string|max:225'
        ]);
        $skor = SkorBdi::create([
            'soal_bdi_id' => $validated['soal_bdi_id'],
            'skor' => $validated['skor'],
            'hasil' => $validated['hasil']
        ]);
            return redirect()->back()->with('success', $skor, );
    }
}
