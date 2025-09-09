<?php

namespace App\Http\Controllers\Landing\Product\Counseling\BerbinarForU;

use App\Http\Controllers\Controller;
use App\Models\BerbinarForU;
use Illuminate\Http\Request;

class BerbinarForUController extends Controller
{
    public function ShowBerbinarForUForm()
    {
        return view('landing.product.counseling.berbinarForU.registration-berbinarForU');
    }
    
    public function storeBerbinarForURegistration(Request $request)
    {
        $request->validate([
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
            'kategori' => 'required',
            'cerita_utama' => 'required',
            'cerita_tambahan' => 'required',
            'alasan_konseling' => 'required',
            'harapan_konseling' => 'required',
        ]);

        try {
            // Convert date format from d/m/Y to Y-m-d
            $tanggalLahir = \DateTime::createFromFormat('d/m/Y', $request->tanggal_lahir);

            $data = $request->all();
            $data['tanggal_lahir'] = $tanggalLahir ? $tanggalLahir->format('Y-m-d') : null;

            BerbinarForU::create($data);

            return view('landing.product.counseling.summary-konseling');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Terjadi kesalahan saat menyimpan data. Silakan coba lagi.')
                ->withInput();
        }
    }

}
