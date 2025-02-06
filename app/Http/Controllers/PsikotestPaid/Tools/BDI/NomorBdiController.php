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
            return response()->json([
                'message' => 'Nomor BDI berhasil ditambahkan!',
                'nomorPsikotes' => $nomorBdi,
                'succes ' => TRUE,
            ], 201);
        }
        return response()->json([
            'nomorPsikotes' => $nomorBdis
        ]);
    }
}
