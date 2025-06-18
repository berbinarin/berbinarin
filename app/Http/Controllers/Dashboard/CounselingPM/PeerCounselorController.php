<?php

namespace App\Http\Controllers\Dashboard\CounselingPM;

use App\Http\Controllers\Controller;
use App\Models\jadwalPeer;
use App\Models\KonsellingPeer;
use App\Models\KonsellingPsikolog;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Carbon;


class PeerCounselorController extends Controller
{



    public function index(Request $request)
    {
        $PeerConsellorData = KonsellingPsikolog::where('kategori', 'peer-counselor')->get();
        $konselling = $request->session()->get('konselling');
        $senin = jadwalPeer::where('hari', 'Senin')->orderBy('pukul_mulai')->get();
        $selasa = jadwalPeer::where('hari', 'Selasa')->orderBy('pukul_mulai')->get();
        $rabu = jadwalPeer::where('hari', 'Rabu')->orderBy('pukul_mulai')->get();
        $kamis = jadwalPeer::where('hari', 'Kamis')->orderBy('pukul_mulai')->get();
        $jumat = jadwalPeer::where('hari', 'Jumat')->orderBy('pukul_mulai')->get();
        $sabtu = jadwalPeer::where('hari', 'Sabtu')->orderBy('pukul_mulai')->get();
        $minggu = jadwalPeer::where('hari', 'Minggu')->orderBy('pukul_mulai')->get();
        return view('dashboard.counseling-pm.peer-counselors.index', ['PeerConsellorData' => $PeerConsellorData], compact('senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu', 'konselling'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'no_wa' => 'required',
            'email' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'tempat_lahir' => 'required',
            'agama' => 'required',
            'suku' => 'required',
            'status_pernikahan' => 'required',
            'alamat' => 'required',
            'posisi_anak' => 'required',
            'pendidikan' => 'required',
            'hobi' => 'required',
            'riwayat_pekerjaan' => 'required',
            'kegiatan_sosial' => 'required',
            'jadwal_tanggal' => 'required',
            'jadwal_pukul' => 'required',
            'metode' => 'required|in:online,offline',
            'sesi' => 'required|in:1,2,3',
            'daerah' => 'required_if:metode,offline',
            'cerita' => 'required',
            'kategori' => 'required',
        ]);

        // Konversi tanggal lahir dan jadwal ke Y-m-d
        $validatedData['tanggal_lahir'] = Carbon::createFromFormat('d/m/Y', $validatedData['tanggal_lahir'])->format('Y-m-d');
        $validatedData['jadwal_tanggal'] = Carbon::createFromFormat('d-m-Y', $validatedData['jadwal_tanggal'])->format('Y-m-d');

        // Jika metode online, isi daerah dengan 'Online'
        if ($validatedData['metode'] === 'online') {
            $validatedData['daerah'] = 'Online';
        }

        // Hitung harga otomatis
        $harga = 0;
        if ($validatedData['metode'] === 'online') {
            $harga = [1 => 45000, 2 => 90000, 3 => 135000][$validatedData['sesi']];
        } else {
            $harga = [1 => 55000, 2 => 110000, 3 => 165000][$validatedData['sesi']];
        }
        $validatedData['harga'] = $harga;

        KonsellingPsikolog::create($validatedData);

        Alert::toast('New Peer Counselor Appointment Data Added', 'success')->autoClose(5000);
        return redirect()->route('dashboard.peer-counselors.index');
    }

    public function show(Request $request, $id)
    {

        $PeerConsellorDataDetails = KonsellingPsikolog::where('id', $id)->get(); // pakai get() agar array
        $konselling = $request->session()->get('konselling');
        $senin = jadwalPeer::where('hari', 'Senin')->orderBy('pukul_mulai')->get();
        $selasa = jadwalPeer::where('hari', 'Selasa')->orderBy('pukul_mulai')->get();
        $rabu = jadwalPeer::where('hari', 'Rabu')->orderBy('pukul_mulai')->get();
        $kamis = jadwalPeer::where('hari', 'Kamis')->orderBy('pukul_mulai')->get();
        $jumat = jadwalPeer::where('hari', 'Jumat')->orderBy('pukul_mulai')->get();
        $sabtu = jadwalPeer::where('hari', 'Sabtu')->orderBy('pukul_mulai')->get();
        $minggu = jadwalPeer::where('hari', 'Minggu')->orderBy('pukul_mulai')->get();
        return view('dashboard.counseling-pm.peer-counselors.show', ['PeerConsellorDataDetails' => $PeerConsellorDataDetails], compact('senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu', 'konselling'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'jadwal_tanggal' => 'required',
            'jadwal_pukul' => 'required',
            'metode' => 'required|in:online,offline',
            'sesi' => 'required|in:1,2,3',
            'daerah' => 'required_if:metode,offline',
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
            'riwayat_pekerjaan' => 'required',
            'hobi' => 'required',
            'kegiatan_sosial' => 'required',
            'cerita' => 'required',
        ]);

        // Konversi tanggal dari d-m-Y ke Y-m-d
        $validatedData['jadwal_tanggal'] = Carbon::createFromFormat('d-m-Y', $validatedData['jadwal_tanggal'])->format('Y-m-d');
        $validatedData['tanggal_lahir'] = Carbon::createFromFormat('d/m/Y', $validatedData['tanggal_lahir'])->format('Y-m-d');

        // Jika metode online, isi daerah dengan 'Online'
        if ($validatedData['metode'] === 'online') {
            $validatedData['daerah'] = 'Online';
        }

        // Hitung harga otomatis sesuai peer-counselor
        if ($validatedData['metode'] === 'online') {
            $harga = [1 => 45000, 2 => 90000, 3 => 135000][$validatedData['sesi']];
        } else {
            $harga = [1 => 55000, 2 => 110000, 3 => 165000][$validatedData['sesi']];
        }
        $validatedData['harga'] = $harga;

        // Pastikan kategori tetap peer-counselor
        $validatedData['kategori'] = 'peer-counselor';

        $peerCounselor = KonsellingPsikolog::findOrFail($id);
        $peerCounselor->fill($validatedData);
        $peerCounselor->save();

        Alert::toast('Data Peer Counselor berhasil diupdate', 'success')->autoClose(5000);
        return redirect()->route('dashboard.peer-counselors.show', $id);
    }

    public function destroy($id)
    {
        KonsellingPsikolog::where('id', $id)->delete();
        Alert::toast('A Peer Coonsellor Appointment Data Deleted', 'success')->autoClose(5000);
        return redirect()->route('dashboard.peer-counselors.index');
    }

    public function create()
    {
        $senin = jadwalPeer::where('hari', 'Senin')->orderBy('pukul_mulai')->get();
        $selasa = jadwalPeer::where('hari', 'Selasa')->orderBy('pukul_mulai')->get();
        $rabu = jadwalPeer::where('hari', 'Rabu')->orderBy('pukul_mulai')->get();
        $kamis = jadwalPeer::where('hari', 'Kamis')->orderBy('pukul_mulai')->get();
        $jumat = jadwalPeer::where('hari', 'Jumat')->orderBy('pukul_mulai')->get();
        $sabtu = jadwalPeer::where('hari', 'Sabtu')->orderBy('pukul_mulai')->get();
        $minggu = jadwalPeer::where('hari', 'Minggu')->orderBy('pukul_mulai')->get();

        return view('dashboard.counseling-pm.peer-counselors.create', compact('senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu'));
    }

    public function edit($id)
    {
        $peerCounselor = KonsellingPsikolog::findOrFail($id);

        // Ambil jadwal per hari untuk dropdown jam konseling
        $senin = jadwalPeer::where('hari', 'Senin')->orderBy('pukul_mulai')->get();
        $selasa = jadwalPeer::where('hari', 'Selasa')->orderBy('pukul_mulai')->get();
        $rabu = jadwalPeer::where('hari', 'Rabu')->orderBy('pukul_mulai')->get();
        $kamis = jadwalPeer::where('hari', 'Kamis')->orderBy('pukul_mulai')->get();
        $jumat = jadwalPeer::where('hari', 'Jumat')->orderBy('pukul_mulai')->get();
        $sabtu = jadwalPeer::where('hari', 'Sabtu')->orderBy('pukul_mulai')->get();
        $minggu = jadwalPeer::where('hari', 'Minggu')->orderBy('pukul_mulai')->get();

        return view('dashboard.counseling-pm.peer-counselors.edit', compact(
            'peerCounselor',
            'senin',
            'selasa',
            'rabu',
            'kamis',
            'jumat',
            'sabtu',
            'minggu'
        ));
    }
}
