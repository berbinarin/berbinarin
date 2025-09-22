<?php

namespace App\Http\Controllers\Landing\Product\Counseling\PeerCounselor;

use App\Models\jadwalPeer;
use App\Http\Controllers\Controller;
use App\Models\KonsellingPeer;
use Illuminate\Http\Request;

class PeerCounselorController extends Controller
{
    public function registrationPeer()
    {
        $konselings = [
            [
                'image' => 'assets/images/landing/asset-konseling/vector/peercounselor.png',
                'nama' => 'Umum',
                'deskripsi' => 'Konseling bersama Peer Counselor yang dilatih secara langsung oleh Psikolog Berbinar dan merupakan mahasiswa yang telah lulus mata kuliah konseling',
            ],
            [
                'image' => 'assets/images/landing/asset-konseling/vector/berbinarforu.png',
                'nama' => 'Berbinar For U',
                'deskripsi' => 'Berbinar For U adalah layanan konseling bersama dengan Peer Counselor yang, dengan harga gratis dan terjamin profesionalitasnya, bagi kamu yang beruntung!',
            ],
        ];

        return view('landing.product.counseling.choose-peer')->with([
            'konselings' => $konselings
        ]);
    }

    public function showPeerForm()
    {
        $jadwalPeerCounselors = jadwalPeer::all();
        return view('landing.product.counseling.peer.registration-peer', compact('jadwalPeerCounselors'));
    }

    public function storePeerRegistration(Request $request)
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

        // Jika voucher pelajar, bukti kartu pelajar wajib
        if ($request->kategori_voucher === 'pelajar') {
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
            $data['harga'] = intval($data['harga']);

            // Jika metode online, daerah ikut 'Online'
            if ($data['metode'] === 'online') {
                $data['daerah'] = 'Online';
            }

            // Simpan file bukti kartu pelajar jika ada
            if ($request->hasFile('bukti_kartu_pelajar')) {
                $data['bukti_kartu_pelajar'] = $request->file('bukti_kartu_pelajar')->store('bukti_kartu_pelajar', 'public');
            } else {
                $data['bukti_kartu_pelajar'] = null;
            }

            KonsellingPeer::create($data);

            return view('landing.product.counseling.summary-konseling');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Terjadi kesalahan saat menyimpan data. Silakan coba lagi.')
                ->withInput();
        }
    }

}
