<?php

namespace App\Http\Controllers\Dashboard\PTPM\Psikotest\Psikotest\BDI;

use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\BDI\NomorBdi;
use Illuminate\Http\Request;

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
            return redirect()->back()->with([
                'alert'   => true,
                'type'    => 'success',
                'title'   => 'Berhasil!',
                'message' => 'Nomor BDI Berhasil diperbarui',
                'icon'    => asset('assets/images/dashboard/success.png'),
            ]);
        }
        $nomorBdis = NomorBdi::with('SoalBdi')->get();

        return view('moduls.psikotes-paid.tools.bdi.test', compact('nomorBdis'));
    }
}
