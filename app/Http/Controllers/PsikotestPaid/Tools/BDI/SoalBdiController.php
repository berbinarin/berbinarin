<?php

namespace App\Http\Controllers\PsikotestPaid\Tools\BDI;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\BDI\NomorBdi;
use App\Models\PsikotestPaid\BDI\SkorBdi;
use App\Models\PsikotestPaid\BDI\SoalBdi;

class SoalBdiController extends Controller
{
    public function index(Request $response)
    {
        $nomorBdiList = NomorBdi::all();
        $soalBdiList = SoalBdi::with('nomorBdi')->get();
        return response()->json([
            'succes' => true,
            'data' => [
                'nomor_bdi' => $nomorBdiList,
                'soal_bdi' => $soalBdiList
            ]
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nomor_bdi_id' => 'required|exists:nomor_bdi_id',
            'pernyataan' => 'required|string|max:225',
            'bobot' => 'required|string|max:10'
        ]);
        $soal = SoalBdi::create([
            'nomor_bdi_id' => $validated['nomor_bdi_id'],
            'pernyataan' => $validated['pernyataan'],
            'bobot' => $validated['bobot']
        ]);
        return response()->json([
            'success' => true,
            'message' => 'Soal Berhasil Ditambahkan',
            'data' => $soal
        ], 201);
    }

    public function getSoalByNomor(Request $request, $nomor)
    {
        $nomorBdi = NomorBdi::where('nomor_bdi', $nomor)->first();
        if (!$nomorBdi) {
            // Jika tidak ditemukan, redirect kembali dengan pesan error
            return redirect()->back()->with('error', 'Nomor Tes BDI tidak Ditemukan');
        }
        $soalBdi = SoalBdi::where('nomor_bdi_id', $nomorBdi->id)->get();
        if ($soalBdi->isEmpty()) {
            return redirect()->back()->with('error', 'Soal Tes BDI tidak ditemukan');
        }
        // Kirim data nomor tes dan soal ke view yang sama
        return view('psikotest-paid.tool.BDI.testbdi', [
            'nomorBdi' => $nomorBdi,
            'soalBdi'  => $soalBdi
        ]);
    }

    public function hitungHasil(Request $request) {
        $validated = $request->validate([
            'jawaban' => 'required|array',
            'jawaban.*.soal_id' => 'required|exists:soal_bdi,id',
            'jawaban.*.bobot' => 'required|numeric'
        ]);
        $totalSkor = 0;
        foreach ($validated['jawaban'] as $jawaban) {
            $totalSkor += $jawaban['bobot'];
        }
        $skorData = SkorBdi::all();
        $hasil = null;
        foreach ($skorData as $skor) {
            // Pecah range skor (misalnya "1-10") menjadi min dan max
            [$min, $max] = explode('-', $skor->skor);
            if ($totalSkor >= (int)$min && $totalSkor <= (int)$max) {
                $hasil = $skor->hasil;
                break;
            }
        }
        if ($hasil) {
            // Selain hasil dan totalSkor, jika perlu kamu juga bisa mengirim data nomor/soal
            // Misalnya kita ingin mengirimkan kembali daftar nomor tes untuk melanjutkan
            $nomorBdis = NomorBdi::with('SoalBdi')->get();
            return view('psikotest-paid.tool.BDI.testbdi', compact('nomorBdis', 'totalSkor', 'hasil'));
        }
        return redirect()->back()->with('error', 'Hasil tidak ditemukan untuk skor ini.');
    }
}
