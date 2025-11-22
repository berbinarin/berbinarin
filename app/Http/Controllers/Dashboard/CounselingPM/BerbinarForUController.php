<?php

namespace App\Http\Controllers\Dashboard\CounselingPM;

use App\Http\Controllers\Controller;
use App\Models\BerbinarForU;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;

class BerbinarForUController extends Controller
{
    public function index(Request $request)
    {
        $BerbinarForUData = BerbinarForU::orderBy('created_at', 'desc')->get();
        $konselling = $request->session()->get('konselling');
        return view('dashboard.counseling-pm.berbinar-for-u.index', ['BerbinarForUData' => $BerbinarForUData], compact('konselling'));
    }

    public function show(Request $request, $id)
    {
        $BerbinarForUDataDetails = BerbinarForU::findOrFail($id);
        $konselling = $request->session()->get('konselling');
        return view('dashboard.counseling-pm.berbinar-for-u.show', compact('BerbinarForUDataDetails', 'konselling'));
    }

    public function create(Request $request)
    {
        $konselling = $request->session()->get('konselling');
        return view('dashboard.counseling-pm.berbinar-for-u.create', compact('konselling'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'tanggal_lahir' => 'required',
            'tempat_lahir' => 'required',
            'alamat' => 'required',
            'status_pernikahan' => 'required',
            'jenis_kelamin' => 'required',
            'no_wa' => 'required',
            'suku' => 'required',
            'agama' => 'required',
            'posisi_anak' => 'required',
            'hobi' => 'required',
            'pendidikan' => 'required',
            'asal_sekolah' => 'required',
            'riwayat_pekerjaan' => 'required',
            'kegiatan_sosial' => 'required',
            'cerita_utama' => 'required',
            'cerita_tambahan' => 'required',
            'alasan_konseling' => 'required',
            'harapan_konseling' => 'required',
        ]);

        // Convert tanggal d/m/Y to Y-m-d
        $validatedData['tanggal_lahir'] = Carbon::createFromFormat('d/m/Y', $validatedData['tanggal_lahir'])->format('Y-m-d');
        $validatedData['kategori'] = 'berbinar-for-u';

        $berbinarForU = new BerbinarForU();
        $berbinarForU->fill($validatedData);
        $berbinarForU->save();

        return redirect()->route('dashboard.berbinar-for-u.index')->with([
                'alert'   => true,
                'type'    => 'success',
                'title'   => 'Berhasil!',
                'message' => 'Data Berbinar for U berhasil ditambahkan',
                'icon'    => asset('assets/images/dashboard/success.png'),
            ]);
    }

    public function edit(Request $request, $id)
    {
        $BerbinarForUDataDetails = BerbinarForU::findOrFail($id);
        $konselling = $request->session()->get('konselling');
        return view('dashboard.counseling-pm.berbinar-for-u.edit', compact('BerbinarForUDataDetails', 'konselling'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'tanggal_lahir' => 'required',
            'tempat_lahir' => 'required',
            'alamat' => 'required',
            'status_pernikahan' => 'required',
            'jenis_kelamin' => 'required',
            'no_wa' => 'required',
            'suku' => 'required',
            'agama' => 'required',
            'posisi_anak' => 'required',
            'hobi' => 'required',
            'pendidikan' => 'required',
            'asal_sekolah' => 'required',
            'riwayat_pekerjaan' => 'required',
            'kegiatan_sosial' => 'required',
            'cerita_utama' => 'required',
            'cerita_tambahan' => 'required',
            'alasan_konseling' => 'required',
            'harapan_konseling' => 'required',
        ]);

        // Convert tanggal
        $validatedData['tanggal_lahir'] = Carbon::createFromFormat('d/m/Y', $validatedData['tanggal_lahir'])->format('Y-m-d');

        $BerbinarForUDataDetails = BerbinarForU::findOrFail($id);
        $BerbinarForUDataDetails->update($validatedData);

        return redirect()->route('dashboard.berbinar-for-u.index', $id)->with([
                'alert'   => true,
                'type'    => 'success',
                'title'   => 'Berhasil!',
                'message' => 'Data Berbinar for U berhasil diubah',
                'icon'    => asset('assets/images/dashboard/success.png'),
            ]);
    }

    public function destroy($id)
    {
        $BerbinarForUDataDetails = BerbinarForU::findOrFail($id);
        $BerbinarForUDataDetails->delete();

        return redirect()->route('dashboard.berbinar-for-u.index')->with([
                'alert'   => true,
                'type'    => 'success',
                'title'   => 'Berhasil!',
                'message' => 'Data Berbinar for U berhasil dihapus',
                'icon'    => asset('assets/images/dashboard/success.png'),
            ]);
    }
}
