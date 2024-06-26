<?php

namespace App\Http\Controllers\Internship;

use App\Http\Controllers\Controller;
use App\Models\UserInternship;
use Illuminate\Http\Request;

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
            'tautan_cv' => 'required|url',
            'tautan_portofolio' => 'required|url',
            'tautan_berkas_ss' => 'required|url',
            'motivasi' => 'required|string',
        ]);

        UserInternship::create($request->all());

        return redirect()->route('hiring')
                         ->with('success', 'User Internship created successfully.');
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
        ]);

        $userInternship->update($request->all());

        return redirect()->route('hiring')
                         ->with('success', 'User Internship updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserInternship $userInternship)
    {
        $userInternship->delete();

        return redirect()->route('user_internships.index')
                         ->with('success', 'User Internship deleted successfully.');
    }
}
