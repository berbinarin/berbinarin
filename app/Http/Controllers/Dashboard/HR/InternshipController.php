<?php

namespace App\Http\Controllers\Dashboard\HR;

use App\Http\Controllers\Controller;
use App\Models\Hiring_Positions;
use App\Models\UserInternship;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class InternshipController extends Controller
{

    public function index()
    {
        $internships = UserInternship::with('hiringPosition')
            ->orderBy('created_at', 'desc')
            ->get();
        return view('dashboard.hr.internships.index', ['Internship' => $internships]);
    }


    public function show($id)
    {
        // Menggunakan findOrFail untuk menangani kasus jika tidak ada data dengan ID yang sesuai
        $Internship = UserInternship::findOrFail($id);
        $position = Hiring_Positions::find($Internship->position_id);
        return view('dashboard.hr.internships.show', ['Internship' => $Internship, 'position' => $position]);
    }

    public function edit($id)
    {
        $Internship = UserInternship::findOrFail($id);
        $postion = Hiring_Positions::find($Internship->position_id);
        return view('dashboard.hr.internships.edit', ['Internship' => $Internship, 'position' => $postion]);
    }

    public function update(Request $request, UserInternship $internship)
    {
        $request->validate([
            'email' => 'required|email',
            'nama_lengkap' => 'required|string',
            'nama_panggilan' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'no_whatsapp' => 'required|string',
            'asal_kota' => 'required|string',
            'asal_pendidikan' => 'required|string',
            'status_kelas' => 'required|string',
            'jurusan' => 'required|string',
            'akun_instagram' => 'required|string',
            'akun_tiktok' => 'required|string',
            'akun_linkedin' => 'required|string',
            'sumber_informasi' => 'required|string',
            'tautan_cv' => 'required|url',
            'tautan_portofolio' => 'required|url',
            'tautan_berkas_ss' => 'required|url',
            'motivasi' => 'required|string',
            'keterangan' => 'nullable|string'
        ]);

        $internship->update($request->all());

        Alert::toast('User Internship Changed Sucessfully', 'success')->autoClose(5000);
        return redirect()->route('dashboard.internships.index');
    }

    public function destroy(UserInternship $internship)
    {
        $internship->delete();
        Alert::toast('User Internship Deleted Sucessfully', 'success')->autoClose(5000);
        return redirect()->route('dashboard.internships.index');
    }
}
