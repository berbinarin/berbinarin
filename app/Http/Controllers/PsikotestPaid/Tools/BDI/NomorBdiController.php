<?php

namespace App\Http\Controllers\PsikotestPaid\Tools\BDI;

use Illuminate\Http\Request;
use App\Models\PsikotestPaid\BDI\NomorBdi;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class NomorBdiController extends Controller
{
    public function index(Request $request)
    {
        // Ambil semua data Nomor BDI
        $nomorBdis = NomorBdi::all();
        // Jika ada request POST, tambahkan data baru
        if ($request->isMethod('post')) {
            $request->validate([
                'nomor_bdi' => 'required|string|unique:nomor_bdi,nomor_bdi'
            ]);
            $nomorBdi = NomorBdi::create([
                'nomor_bdi' => $request->nomor_bdi
            ]);
            // Redirect kembali dengan pesan sukses (bisa juga mengembalikan view)
            return redirect()->back()->with('success', 'Nomor BDI berhasil ditambahkan!');
        }
        $nomorBdis = NomorBdi::with('SoalBdi')->get();

        return view('moduls.psikotes-paid.tools.bdi.test', compact('nomorBdis'));
    }
}
