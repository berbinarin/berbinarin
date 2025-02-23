<?php

namespace App\Http\Controllers\KeluargaBerbinar;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\KeluargaBerbinar\DataJabatan;
use App\Models\KeluargaBerbinar\DataStaff;

class JabatanStaffController extends Controller
{
    public function createByStaffId(Request $request, $staffId)
    {
        $validated = $request->validate([
            'posisi' => 'required|string|max:255',
            'divisi' => 'required|string|max:255',
            'sub_divisi' => 'nullable|string|max:255',
            'awal_menjabat' => 'required|date',
            'akhir_menjabat' => 'nullable|date|after_or_equal:awal_menjabat',
        ]);
        $staff = DataStaff::findOrFail($staffId);
        $staff->dataJabatan()->create($validated);
        return redirect()->route('data_jabatan.index')->with('success', 'Jabatan berhasil ditambahkan.');
    }

    public function updateByStaffId(Request $request, $staffId)
    {
        $validated = $request->validate([
            'posisi' => 'nullable|string|max:255',
            'divisi' => 'nullable|string|max:255',
            'sub_divisi' => 'nullable|string|max:255',
            'awal_menjabat' => 'nullable|date',
            'akhir_menjabat' => 'nullable|date|after_or_equal:awal_menjabat',
        ]);
        $staff = DataStaff::findOrFail($staffId);
        $jabatan = $staff->dataJabatan;
        if (!$jabatan) {
            return redirect()->route('data_jabatan.index')->with('error', 'Jabatan tidak ditemukan.');
        }
        $jabatan->update($validated);
        return redirect()->route('data_jabatan.index')->with('success', 'Jabatan berhasil diperbarui.');
    }

    public function deleteById($id)
    {
        $jabatan = DataJabatan::findOrFail($id);
        $jabatan->delete();
        return redirect()->route('data_jabatan.index')->with('success', 'Jabatan berhasil dihapus.');
    }

    public function getDivisi()
    {
        $divisi = DataJabatan::select('divisi')->distinct()->get();
        return view('data_jabatan.divisi', compact('divisi'));
    }

    public function getSubDivisi()
    {
        $subDivisi = DataJabatan::select('sub_divisi')->distinct()->get();
        return view('data_jabatan.sub_divisi', compact('subDivisi'));
    }

    public function getTahun()
    {
        $tahun = DataJabatan::selectRaw('YEAR(awal_menjabat) as tahun')->distinct()->orderBy('tahun', 'asc')->get();
        return view('data_jabatan.tahun', compact('tahun'));
    }

}
