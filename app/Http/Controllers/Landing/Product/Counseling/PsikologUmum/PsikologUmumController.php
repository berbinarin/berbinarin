<?php

namespace App\Http\Controllers\Landing\Product\Counseling\PsikologUmum;

use App\Http\Controllers\Controller;
use App\Models\KonsellingPsikolog;
use Illuminate\Http\Request;

class PsikologUmumController extends Controller
{
    public function showPsikologForm()
    {
        return view('landing.product.counseling.psikolog.registration-psikolog');
    }

    public function registrationPsikolog()
    {
        $konselings = [
            [
                'image' => 'assets/images/landing/asset-konseling/vector/psikolog.png',
                'nama' => 'Psikolog Umum',
                'deskripsi' => 'Konseling bersama Psikolog berizin praktek aktif (SIPP) dan berpengalaman dalam menghadapi berbagai permasalahan yang berkaitan dengan konseling',
            ],
            [
                'image' => 'assets/images/landing/asset-konseling/vector/psikolog-staff.png',
                'nama' => 'Psikolog Staff',
                'deskripsi' => 'Salah satu benefit ekslusif bagi setiap staf yang bekerja di PT Berbinar Insightful Indonesia untuk melakukan konseling bersama Psikolog berizin prakter aktif (SIPP)',
            ],
        ];

        return view('landing.product.counseling.choose-psikolog')->with([
            'konselings' => $konselings
        ]);
    }

    public function showPsikologRegistration()
    {
        return view('landing.product.counseling.psikolog.registration-psikolog');
    }

    
    public function storePsikologRegistration(Request $request)
    {
        $rules = [
            'jadwal_tanggal' => 'required',
            'jadwal_pukul' => 'required',
            'metode' => 'required',
            'daerah' => 'nullable',
            'sesi' => 'required',
            'harga' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'tanggal_Lahir' => 'required',
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
            'cerita' => 'required',
            'kategori' => 'required',
            'bukti_kartu_pelajar' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:1024',
            'kategori_voucher' => 'nullable|string',
            'code_voucher' => 'nullable|string',
            'presentase_diskon' => 'nullable|integer',
        ];
        if ($request->kategori === 'pelajar') {
            $rules['bukti_kartu_pelajar'] = 'required|file|mimes:jpg,jpeg,png,pdf|max:1024';
        }

        $validatedData = $request->validate($rules);

        try {
            // Convert date format from d/m/Y to Y-m-d
            $tanggalLahir = \DateTime::createFromFormat('d/m/Y', $request->tanggal_Lahir);
            $jadwalTanggal = \DateTime::createFromFormat('d/m/Y', $request->jadwal_tanggal);

            $data = $validatedData;
            $data['tanggal_Lahir'] = $tanggalLahir ? $tanggalLahir->format('Y-m-d') : null;
            $data['jadwal_tanggal'] = $jadwalTanggal ? $jadwalTanggal->format('Y-m-d') : null;
            $data['sesi'] = intval($data['sesi']);
            if ($data['metode'] === 'online') {
                $data['daerah'] = 'Online';
            }

            // Simpan bukti kartu pelajar jika ada
            if ($request->hasFile('bukti_kartu_pelajar')) {
                $data['bukti_kartu_pelajar'] = $request->file('bukti_kartu_pelajar')->store('bukti_kartu_pelajar', 'public');
            } else {
                $data['bukti_kartu_pelajar'] = null;
            }

            // Voucher info sudah otomatis masuk dari form (hidden input)
            // Jika ingin ambil dari model, bisa tambahkan logika di sini

            KonsellingPsikolog::create($data);

            return view('landing.product.counseling.summary-konseling');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Terjadi kesalahan saat menyimpan data. Silakan coba lagi.')
                ->withInput();
        }
    }



}
