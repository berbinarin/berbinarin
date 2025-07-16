<?php

namespace App\Http\Controllers\Dashboard\CounselingPM;

use App\Http\Controllers\Controller;
use App\Models\KonsellingPeer;
use App\Models\JadwalPeer;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;

class PeerCounselorController extends Controller
{
    public function index(Request $request)
    {
        $PeerConsellorData = KonsellingPeer::where('kategori', 'peer-counselor')->orderBy('created_at', 'desc')->get();
        $konselling = $request->session()->get('konselling');
        return view('dashboard.counseling-pm.peer-counselors.index', ['PeerConsellorData' => $PeerConsellorData], compact('konselling'));
    }

    public function create(Request $request)
    {
        $jadwalPeerCounselors = JadwalPeer::all();
        $konselling = $request->session()->get('konselling');
        return view('dashboard.counseling-pm.peer-counselors.create', compact('jadwalPeerCounselors', 'konselling'));
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

        // Convert tanggal d/m/Y to Y-m-d
        $validatedData['jadwal_tanggal'] = Carbon::createFromFormat('d/m/Y', $validatedData['jadwal_tanggal'])->format('Y-m-d');
        $validatedData['tanggal_Lahir'] = Carbon::createFromFormat('d/m/Y', $validatedData['tanggal_lahir'])->format('Y-m-d');

        unset($validatedData['tanggal_lahir']);

        // Set daerah to 'Online' if online method
        if ($validatedData['metode'] === 'online') {
            $validatedData['daerah'] = 'Online';
        }

        // Perhitungan harga
        $sesi = intval($validatedData['sesi']);
        $metode = $validatedData['metode'];

        if ($metode === 'online') {
            $harga = [1 => 45000, 2 => 90000, 3 => 135000][$sesi];
        } else {
            $harga = [1 => 55000, 2 => 110000, 3 => 165000][$sesi];
        }

        $validatedData['harga'] = $harga;
        $validatedData['sesi'] = $sesi;

        $konselling = new KonsellingPeer();
        $konselling->fill($validatedData);
        $konselling->save();

        Alert::toast('New Peer Counselor Appointment Data Added', 'success')->autoClose(5000);
        return redirect()->route('dashboard.peer-counselors.index');
    }

    public function show(Request $request, $id)
    {
        $PeerConsellorDataDetails = KonsellingPeer::findOrFail($id);
        $konselling = $request->session()->get('konselling');
        return view('dashboard.counseling-pm.peer-counselors.show', ['PeerConsellorDataDetails' => $PeerConsellorDataDetails], compact('konselling'));
    }

    public function edit(Request $request, $id)
    {
        $PeerConsellorDataDetails = KonsellingPeer::findOrFail($id);
        $jadwalPeerCounselors = JadwalPeer::all();
        $konselling = $request->session()->get('konselling');
        return view('dashboard.counseling-pm.peer-counselors.edit', ['PeerConsellorDataDetails' => $PeerConsellorDataDetails], compact('jadwalPeerCounselors', 'konselling'));
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

        // Convert tanggal
        $validatedData['jadwal_tanggal'] = Carbon::createFromFormat('d/m/Y', $validatedData['jadwal_tanggal'])->format('Y-m-d');
        $validatedData['tanggal_Lahir'] = Carbon::createFromFormat('d/m/Y', $validatedData['tanggal_lahir'])->format('Y-m-d');

        unset($validatedData['tanggal_lahir']);

        if ($validatedData['metode'] === 'online') {
            $validatedData['daerah'] = 'Online';
        }

        // Perhitungan harga
        $sesi = intval($validatedData['sesi']);
        $metode = $validatedData['metode'];

        if ($metode === 'online') {
            $harga = [1 => 45000, 2 => 90000, 3 => 135000][$sesi];
        } else {
            $harga = [1 => 55000, 2 => 110000, 3 => 165000][$sesi];
        }

        $validatedData['harga'] = $harga;
        $validatedData['sesi'] = $sesi;

        $PeerConsellorDataDetails = KonsellingPeer::find($id);
        $PeerConsellorDataDetails->fill($validatedData);
        $PeerConsellorDataDetails->save();

        Alert::toast('A Peer Counselor Appointment Data Updated', 'success')->autoClose(5000);
        return redirect()->route('dashboard.peer-counselors.show', $id);
    }

    public function destroy($id)
    {
        KonsellingPeer::where('id', $id)->delete();
        Alert::toast('A Peer Counselor Appointment Data Deleted', 'success')->autoClose(5000);
        return redirect()->route('dashboard.peer-counselors.index');
    }
}
