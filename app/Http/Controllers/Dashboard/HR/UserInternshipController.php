<?php

namespace App\Http\Controllers\Dashboard\HR;

use App\Http\Controllers\Controller;
use App\Models\UserInternship;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UserInternshipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $internships = UserInternship::all();
        return view('moduls.internship.index', compact('internships'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('moduls.internship.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
        $request->validate([
            'position_id' => 'required|integer',
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
            'akun_linkdin' => 'required|string',
            'sumber_informasi' => 'required|string',
            'tautan_cv' => 'required|string',
            'tautan_portofolio' => 'required|string',
            'tautan_berkas_ss' => 'required|string',
            'motivasi' => 'required|string',
            'is_process' => 'required|boolean',
            'status_tidak_dapat_diproses' => 'required|string',
            'status_catatan' => 'required|string',
            'status_progress' => 'required|string'
        ]);
            $data = $request->all();
            $data['is_process'] = false;
            $data['status_tidak_dapat_diproses'] = "Pilih";
            $data['status_catatan'] = "Pilih";
            $data['status_progress'] = "Pilih";
            $data['keterangan'] = "";
            //dd($data);
            UserInternship::create($data);

            return redirect()->route('hiring');
        }catch(\Exception $e){
            // Log::error('Error storing user internship: ' . $e->getMessage());
            Alert::toast('Terjadi kesalahan saat menyimpan data: ' . $e->getMessage(), 'error')->autoClose(5000);
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(UserInternship $userInternship)
    {
        return view('moduls.internship.show', compact('userInternship'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserInternship $userInternship)
    {
        return view('moduls.internship.edit', compact('userInternship'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserInternship $userInternship)
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
            'akun_linkdin' => 'required|string',
            'sumber_informasi' => 'required|string',
            'tautan_cv' => 'required|url',
            'tautan_portofolio' => 'required|url',
            'tautan_berkas_ss' => 'required|url',
            'motivasi' => 'required|string',
            'keterangan' => 'required|string'
        ]);

        $userInternship->update($request->all());

        Alert::toast('User Internship Changed Sucessfully', 'success')->autoClose(5000);
        return redirect()->route('dashboard.internship');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserInternship $userInternship)
    {
        $userInternship->delete();
        Alert::toast('User Internship Deleted Sucessfully', 'success')->autoClose(5000);
        return redirect()->route('dashboard.internship');
    }

    public function SetProcess($id)
    {
        try{
            $userIntern = UserInternship::find($id);
            if (!$userIntern) {
                throw new \Exception('Data tidak ditemukan.'); // Atau gunakan jenis Exception yang sesuai
            }

            $userIntern->is_process = !($userIntern->is_process);
            $userIntern->save();

            Alert::toast('User Internship Changed Sucessfully', 'success')->autoClose(5000);
            return redirect("/dashboard/admin/internship");
        }catch(\Exception $e){
            Alert::toast('Terjadi kesalahan saat mengubah data', 'error')->autoClose(5000);
            return redirect("/dashboard/admin/internship");
        }
    }
}
