<?php

namespace App\Http\Controllers\Dashboard\CounselingPM;

use App\Http\Controllers\Controller;
use App\Models\jadwalPeer;
use App\Models\KonsellingPeer;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PeerCounselorController extends Controller
{



    public function index(Request $request)
    {
        $PeerConsellorData = KonsellingPeer::all();
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
            'jadwal_tanggal' => 'required',
            'jadwal_pukul' => 'required',
            'metode' => 'required|not_in:default_value',
            'daerah' => 'required',
            'harga' => 'required',
            'nama' => 'required',
            'no_wa' => 'required',
            'email' => 'required',
            'jenis_kelamin' => 'required|not_in:default',
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


        if (empty($request->session()->get('konselling'))) {
            $konselling = new KonsellingPeer();
            $konselling->fill($validatedData);
            $request->session()->put('konselling', $konselling);
        } else {
            $konselling = $request->session()->get('konselling');
            $konselling->fill($validatedData);
            $request->session()->put('konselling', $konselling);
        }
        $konselling->save();
        $request->session()->forget('konselling');

        Alert::toast('New Peer Coonsellor Appointment Data Added', 'success')->autoClose(5000);;
        return redirect()->route('dashboard.peer-counselors.index');
    }


    public function show(Request $request, $id)
    {
        $PeerConsellorDataDetails = KonsellingPeer::where('id', $id)->get();
        $PeerConsellorDataDetails = KonsellingPeer::where('id', $id)->get();
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
            'metode' => 'required|not_in:default_value',
            'daerah' => 'required',
            'harga' => 'required',
            'nama' => 'required',
            'no_wa' => 'required',
            'email' => 'required',
            'jenis_kelamin' => 'required|not_in:default',
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

        $PeerConsellorDataDetails = KonsellingPeer::find($id);

        $PeerConsellorDataDetails->jadwal_tanggal = $validatedData['jadwal_tanggal'];
        $PeerConsellorDataDetails->jadwal_pukul = $validatedData['jadwal_pukul'];
        $PeerConsellorDataDetails->metode = $validatedData['metode'];
        $PeerConsellorDataDetails->daerah = $validatedData['daerah'];
        $PeerConsellorDataDetails->harga = $validatedData['harga'];
        $PeerConsellorDataDetails->nama = $validatedData['nama'];
        $PeerConsellorDataDetails->no_wa = $validatedData['no_wa'];
        $PeerConsellorDataDetails->email = $validatedData['email'];
        $PeerConsellorDataDetails->jenis_kelamin = $validatedData['jenis_kelamin'];
        $PeerConsellorDataDetails->agama = $validatedData['agama'];
        $PeerConsellorDataDetails->tempat_lahir = $validatedData['tempat_lahir'];
        $PeerConsellorDataDetails->tanggal_lahir = $validatedData['tanggal_lahir'];
        $PeerConsellorDataDetails->suku = $validatedData['suku'];
        $PeerConsellorDataDetails->status_pernikahan = $validatedData['status_pernikahan'];
        $PeerConsellorDataDetails->alamat = $validatedData['alamat'];
        $PeerConsellorDataDetails->posisi_anak = $validatedData['posisi_anak'];
        $PeerConsellorDataDetails->pendidikan = $validatedData['pendidikan'];
        $PeerConsellorDataDetails->riwayat_pekerjaan = $validatedData['riwayat_pekerjaan'];
        $PeerConsellorDataDetails->hobi = $validatedData['hobi'];
        $PeerConsellorDataDetails->kegiatan_sosial = $validatedData['kegiatan_sosial'];
        $PeerConsellorDataDetails->cerita = $validatedData['cerita'];
        $PeerConsellorDataDetails->save();

        Alert::toast('A Peer Consellor Appointment Data Updated', 'success')->autoClose(5000);
        return redirect()->route('dashboard.peer-counselors.index', ['id' => $id]);
    }

    public function destroy($id)
    {
        KonsellingPeer::where('id', $id)->delete();
        KonsellingPeer::where('id', $id)->delete();
        Alert::toast('A Peer Coonsellor Appointment Data Deleted', 'success')->autoClose(5000);
        return redirect()->route('dashboard.peer-counselors.index');
    }
}
