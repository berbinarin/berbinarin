<?php

namespace App\Http\Controllers\Dashboard\CounselingPM;

use App\Http\Controllers\Controller;
use App\Models\KonsellingPsikolog;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PsychologistController extends Controller
{
    public function index(Request $request)
    {
        $PsikologData = KonsellingPsikolog::all();
        $konselling = $request->session()->get('konselling');
        return view('dashboard.counseling-pm.psychologists.index', ['PsikologData' => $PsikologData], compact('konselling'));
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'jadwal_tanggal' => 'required',
            'jadwal_pukul' => 'required',
            'metode' => 'required|not_in:default_value',
            'sesi' => 'required',
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

        $jamMenit = substr($validatedData['jadwal_pukul'], 0, 5);
        $validatedData['jadwal_pukul'] = $jamMenit;


        if (empty($request->session()->get('konselling'))) {
            $konselling = new KonsellingPsikolog();
            $konselling->fill($validatedData);
            $request->session()->put('konselling', $konselling);
        } else {
            $konselling = $request->session()->get('konselling');
            $konselling->fill($validatedData);
            $request->session()->put('konselling', $konselling);
        }
        $konselling->save();
        $request->session()->forget('konselling');

        Alert::toast('New Psikolog Appointment Data Added', 'success')->autoClose(5000);;
        return redirect()->route('dashboard.psychologists.index');
    }


    public function show(Request $request, $id)
    {
        $PsikologDataDetails = KonsellingPsikolog::where('id', $id)->get();
        $PsikologDataDetails = KonsellingPsikolog::where('id', $id)->get();
        $konselling = $request->session()->get('konselling');
        return view('dashboard.counseling-pm.psychologists.show', ['PsikologDataDetails' => $PsikologDataDetails], compact('konselling'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'jadwal_tanggal' => 'required',
            'jadwal_pukul' => 'required',
            'metode' => 'required|not_in:default_value',
            'sesi' => 'required',
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

        $PsikologDataDetails = KonsellingPsikolog::find($id);

        $PsikologDataDetails->jadwal_tanggal = $validatedData['jadwal_tanggal'];
        $PsikologDataDetails->jadwal_pukul = $validatedData['jadwal_pukul'];
        $PsikologDataDetails->metode = $validatedData['metode'];
        $PsikologDataDetails->sesi = $validatedData['sesi'];
        $PsikologDataDetails->daerah = $validatedData['daerah'];
        $PsikologDataDetails->harga = $validatedData['harga'];
        $PsikologDataDetails->no_wa = $validatedData['no_wa'];
        $PsikologDataDetails->email = $validatedData['email'];
        $PsikologDataDetails->jenis_kelamin = $validatedData['jenis_kelamin'];
        $PsikologDataDetails->agama = $validatedData['agama'];
        $PsikologDataDetails->tempat_lahir = $validatedData['tempat_lahir'];
        $PsikologDataDetails->tanggal_lahir = $validatedData['tanggal_lahir'];
        $PsikologDataDetails->suku = $validatedData['suku'];
        $PsikologDataDetails->status_pernikahan = $validatedData['status_pernikahan'];
        $PsikologDataDetails->alamat = $validatedData['alamat'];
        $PsikologDataDetails->posisi_anak = $validatedData['posisi_anak'];
        $PsikologDataDetails->pendidikan = $validatedData['pendidikan'];
        $PsikologDataDetails->riwayat_pekerjaan = $validatedData['riwayat_pekerjaan'];
        $PsikologDataDetails->hobi = $validatedData['hobi'];
        $PsikologDataDetails->kegiatan_sosial = $validatedData['kegiatan_sosial'];
        $PsikologDataDetails->cerita = $validatedData['cerita'];
        $PsikologDataDetails->save();

        Alert::toast('A Psikolog Appointment Data Updated', 'success')->autoClose(5000);
        return redirect()->route('dashboard.psychologists.show', $id);
    }

    public function destroy($id)
    {
        KonsellingPsikolog::where('id', $id)->delete();
        KonsellingPsikolog::where('id', $id)->delete();
        Alert::toast('A Psikolog Appointment Data Deleted', 'success')->autoClose(5000);
        return redirect()->route('dashboard.psychologists.index');
    }
}
