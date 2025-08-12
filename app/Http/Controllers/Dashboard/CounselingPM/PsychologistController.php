<?php

namespace App\Http\Controllers\Dashboard\CounselingPM;

use App\Http\Controllers\Controller;
use App\Models\KonsellingPsikolog;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;

class PsychologistController extends Controller
{
    public function index(Request $request)
    {
        $PsikologData = KonsellingPsikolog::where('kategori', 'psikolog')->orderBy('created_at', 'desc')->get();
        $konselling = $request->session()->get('konselling');
        return view('dashboard.counseling-pm.psychologists.index', ['PsikologData' => $PsikologData], compact('konselling'));
    }


    public function create(Request $request)
    {
        $konselling = $request->session()->get('konselling');
        return view('dashboard.counseling-pm.psychologists.create', compact('konselling'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'jadwal_tanggal' => 'required',
            'jadwal_pukul' => 'required',
            'kategori' => 'required',
            'metode' => 'required',
            'sesi' => 'required',
            'daerah' => 'nullable',
            'harga' => 'required',
            'nama' => 'required',
            'no_wa' => 'required',
            'email' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'suku' => 'required',
            'status_pernikahan' => 'required',
            'alamat' => 'required',
            'posisi_anak' => 'required',
            'pendidikan' => 'required',
            'asal_sekolah' => 'required',
            'riwayat_pekerjaan' => 'required',
            'hobi' => 'required',
            'kegiatan_sosial' => 'required',
            'cerita' => 'required',
        ]);

        // Konversi tanggal
        $validatedData['jadwal_tanggal'] = Carbon::createFromFormat('d-m-Y', $validatedData['jadwal_tanggal'])->format('Y-m-d');
        $validatedData['tanggal_Lahir'] = Carbon::createFromFormat('d/m/Y', $validatedData['tanggal_lahir'])->format('Y-m-d');

        unset($validatedData['tanggal_lahir']);

        // Jika metode online, isi daerah dengan 'Online'
        if ($validatedData['metode'] === 'online') {
            $validatedData['daerah'] = 'Online';
        }

        // Hitung harga
        $tanggal = Carbon::parse($validatedData['jadwal_tanggal']);
        $isWeekend = in_array($tanggal->dayOfWeek, [Carbon::SATURDAY, Carbon::SUNDAY]);
        $sesi = $validatedData['sesi'];
        $metode = $validatedData['metode'];
        $kategori = $validatedData['kategori'];

        if ($kategori === 'peer-counselor') {
            $harga = $metode === 'online'
                ? [1 => 45000, 2 => 90000, 3 => 135000][$sesi]
                : [1 => 55000, 2 => 110000, 3 => 165000][$sesi];
        } else {
            if (!$isWeekend) {
                $harga = $metode === 'online'
                    ? [1 => 150000, 2 => 300000, 3 => 450000][$sesi]
                    : [1 => 175000, 2 => 350000, 3 => 525000][$sesi];
            } else {
                $harga = $metode === 'online'
                    ? [1 => 200000, 2 => 340000, 3 => 500000][$sesi]
                    : [1 => 225000, 2 => 340000, 3 => 500000][$sesi];
            }
        }
        $validatedData['harga'] = $harga;

        $konselling = new KonsellingPsikolog();
        $konselling->fill($validatedData);
        $konselling->save();

        Alert::toast('Data Psikolog Berhasil di Tambahkan', 'success')->autoClose(5000);
        return redirect()->route('dashboard.psychologists.index');
    }



    public function show(Request $request, $id)
    {
        $PsikologDataDetails = KonsellingPsikolog::find($id);
        $konselling = $request->session()->get('konselling');
        return view('dashboard.counseling-pm.psychologists.show', ['PsikologDataDetails' => $PsikologDataDetails], compact('konselling'));
    }

    public function edit(Request $request, $id)
    {
        $PsikologDataDetails = KonsellingPsikolog::find($id);
        $konselling = $request->session()->get('konselling');
        return view('dashboard.counseling-pm.psychologists.edit', ['PsikologDataDetails' => $PsikologDataDetails], compact('konselling'));
    }


    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'jadwal_tanggal' => 'required',
            'jadwal_pukul' => 'required',
            'metode' => 'required',
            'sesi' => 'required',
            'daerah' => 'nullable',
            'harga' => 'required',
            'nama' => 'required',
            'no_wa' => 'required',
            'email' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'suku' => 'required',
            'status_pernikahan' => 'required',
            'alamat' => 'required',
            'posisi_anak' => 'required',
            'pendidikan' => 'required',
            'asal_sekolah' => 'required',
            'riwayat_pekerjaan' => 'required',
            'hobi' => 'required',
            'kegiatan_sosial' => 'required',
            'cerita' => 'required',
        ]);

        // Konversi tanggal
        $validatedData['jadwal_tanggal'] = Carbon::createFromFormat('d-m-Y', $validatedData['jadwal_tanggal'])->format('Y-m-d');
        $validatedData['tanggal_Lahir'] = Carbon::createFromFormat('d/m/Y', $validatedData['tanggal_lahir'])->format('Y-m-d');

        unset($validatedData['tanggal_lahir']);

        // Jika metode online, isi daerah dengan 'Online'
        if ($validatedData['metode'] === 'online') {
            $validatedData['daerah'] = 'Online';
        }

        // Hitung harga otomatis
        $tanggal = Carbon::parse($validatedData['jadwal_tanggal']);
        $isWeekend = in_array($tanggal->dayOfWeek, [Carbon::SATURDAY, Carbon::SUNDAY]);
        $sesi = $validatedData['sesi'];
        $metode = $validatedData['metode'];

        if (!$isWeekend) {
            $harga = $metode === 'online'
                ? [1 => 150000, 2 => 300000, 3 => 450000][$sesi]
                : [1 => 175000, 2 => 350000, 3 => 525000][$sesi];
        } else {
            $harga = $metode === 'online'
                ? [1 => 200000, 2 => 340000, 3 => 500000][$sesi]
                : [1 => 225000, 2 => 340000, 3 => 500000][$sesi];
        }
        $validatedData['harga'] = $harga;

        $PsikologDataDetails = KonsellingPsikolog::find($id);
        $PsikologDataDetails->fill($validatedData);
        $PsikologDataDetails->save();

        Alert::toast('Data Psikolog Berhasil di Edit', 'success')->autoClose(5000);
        return redirect()->route('dashboard.psychologists.show', $id);
    }
    public function destroy($id)
    {
        KonsellingPsikolog::where('id', $id)->delete();
        Alert::toast('Data Psikolog Berhasil di Hapus', 'success')->autoClose(5000);
        return redirect()->route('dashboard.psychologists.index');
    }

    public function voucherIndex()
    {
        return view('dashboard.counseling-pm.kode-voucher.index');
    }

}
