<?php

namespace App\Http\Controllers\Dashboard\ManagerCPM;

use App\Http\Controllers\Controller;
use App\Models\CounsellingPM\KonsellingPsikologStaff;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;

class PsycologistStaffController extends Controller
{
    public function index(Request $request)
    {
        $PsikologData = KonsellingPsikologStaff::orderBy('created_at', 'desc')->get();
        return view('dashboard.manager-cpm.psikolog-staff.index', ['PsikologData' => $PsikologData]);
    }


    public function create(Request $request)
    {
        $konselling = $request->session()->get('konselling');
        return view('dashboard.manager-cpm.psikolog-staff.create', compact('konselling'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'jadwal_tanggal'    => 'required',
            'jadwal_pukul'      => 'required',
            'nama'              => 'required',
            'email'             => 'required',
            'tanggal_Lahir'     => 'required',
            'tempat_lahir'      => 'required',
            'alamat'            => 'required',
            'umur'              => 'required',
            'agama'             => 'required',
            'posisi_anak'       => 'required',
            'pendidikan'        => 'required',
            'riwayat_pekerjaan' => 'required',
            'divisi'            => 'required',
            'posisi'            => 'required',
            'status_pernikahan' => 'required',
            'no_wa'             => 'required',
            'suku'              => 'required',
            'topik_pengajuan'   => 'required',
            'cerita'            => 'required',
            'kegiatan_sosial'   => 'required',
            'hobi'              => 'required',
        ]);

        // Konversi tanggal
        $validatedData['jadwal_tanggal'] = Carbon::createFromFormat('d-m-Y', $validatedData['jadwal_tanggal'])->format('Y-m-d');
        $validatedData['tanggal_Lahir'] = Carbon::createFromFormat('d/m/Y', $validatedData['tanggal_Lahir'])->format('Y-m-d');

        unset($validatedData['tanggal_lahir']);


        $konselling = new KonsellingPsikologStaff();
        $konselling->fill($validatedData);
        $konselling->save();

        Alert::toast('Data Psikolog Berhasil di Tambahkan', 'success')->autoClose(5000);
        return redirect()->route('dashboard.psychologists-staff.index');
    }



    public function show(Request $request, $id)
    {
        $PsikologDataDetails = KonsellingPsikologStaff::find($id);
        $konselling = $request->session()->get('konselling');
        return view('dashboard.manager-cpm.psikolog-staff.show', ['PsikologDataDetails' => $PsikologDataDetails], compact('konselling'));
    }

    public function edit(Request $request, $id)
    {
        $PsikologDataDetails = KonsellingPsikologStaff::find($id);
        $konselling = $request->session()->get('konselling');
        return view('dashboard.manager-cpm.psikolog-staff.edit', ['PsikologDataDetails' => $PsikologDataDetails], compact('konselling'));
    }


    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'jadwal_tanggal'    => 'required',
            'jadwal_pukul'      => 'required',
            'nama'              => 'required',
            'email'             => 'required',
            'tanggal_Lahir'     => 'required',
            'tempat_lahir'      => 'required',
            'alamat'            => 'required',
            'umur'              => 'required',
            'agama'             => 'required',
            'posisi_anak'       => 'required',
            'pendidikan'        => 'required',
            'riwayat_pekerjaan' => 'required',
            'divisi'            => 'required',
            'posisi'            => 'required',
            'status_pernikahan' => 'required',
            'no_wa'             => 'required',
            'suku'              => 'required',
            'topik_pengajuan'   => 'required',
            'cerita'            => 'required',
            'kegiatan_sosial'   => 'required',
            'hobi'              => 'required',
        ]);

        // Konversi tanggal
        $validatedData['jadwal_tanggal'] = Carbon::createFromFormat('d-m-Y', $validatedData['jadwal_tanggal'])->format('Y-m-d');
        $validatedData['tanggal_Lahir'] = Carbon::createFromFormat('d/m/Y', $validatedData['tanggal_Lahir'])->format('Y-m-d');


        $PsikologDataDetails = KonsellingPsikologStaff::find($id);
        $PsikologDataDetails->fill($validatedData);
        $PsikologDataDetails->save();

        Alert::toast('Data Psikolog Berhasil di Edit', 'success')->autoClose(5000);
        return redirect()->route('dashboard.psychologists-staff.index');
    }
    public function destroy($id)
    {
        KonsellingPsikologStaff::where('id', $id)->delete();
        Alert::toast('Data Psikolog Berhasil di Hapus', 'success')->autoClose(5000);
        return redirect()->route('dashboard.psychologists-staff.index');
    }
}
