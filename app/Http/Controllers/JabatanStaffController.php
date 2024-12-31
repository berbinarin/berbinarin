<?php

namespace App\Http\Controllers;

use App\Models\JabatanStaff;
use App\Models\IdentitasStaff;
use Illuminate\Http\Request;

class JabatanStaffController extends Controller
{
    // Melihat semua jabatan
    public function index(Request $request)
    {
        $query = JabatanStaff::query();

        if ($request->filled('divisi')) {
            $query->where('divisi', $request->divisi);
        }

        if ($request->filled('sub_divisi')) {
            $query->where('sub_divisi', $request->sub_divisi);
        }

        if ($request->filled('tahun')) {
            $query->whereYear('awal_menjabat', $request->tahun);
        }

        $jabatan = $query->with('identitas')->get();
        return response()->json($jabatan);
    }

    // Menambah jabatan untuk staff tertentu
    public function store(Request $request)
    {
        $validated = $request->validate([
            'identitas_staff_id' => 'required|exists:identitas_staff,id',
            'divisi' => 'required|string|max:255',
            'posisi' => 'required|string|max:255',
            'sub_divisi' => 'nullable|string|max:255',
            'awal_menjabat' => 'required|date',
            'akhir_menjabat' => 'nullable|date',
        ]);

        $jabatan = JabatanStaff::create($validated);
        return response()->json(['message' => 'Jabatan berhasil dibuat', 'jabatan' => $jabatan], 201);
    }

    // Mengupdate jabatan
    public function update(Request $request, $id)
    {
        $jabatan = JabatanStaff::findOrFail($id);

        $validated = $request->validate([
            'divisi' => 'sometimes|string|max:255',
            'posisi' => 'sometimes|string|max:255',
            'sub_divisi' => 'nullable|string|max:255',
            'awal_menjabat' => 'sometimes|date',
            'akhir_menjabat' => 'nullable|date',
        ]);

        $jabatan->update($validated);
        return response()->json(['message' => 'Jabatan berhasil diupdate', 'jabatan' => $jabatan]);
    }

    // Menghapus jabatan
    public function destroy($id)
    {
        $jabatan = JabatanStaff::findOrFail($id);
        $jabatan->delete();
        return response()->json(['message' => 'Jabatan berhasil dihapus']);
    }

    // Melihat staff berdasarkan divisi
    public function staffByDivisi(Request $request)
    {
        $divisi = $request->query('divisi');

        $staff = IdentitasStaff::whereHas('jabatan', function ($query) use ($divisi) {
            $query->where('divisi', $divisi);
        })->with('jabatan')->get();

        return response()->json($staff);
    }

    // Melihat staff berdasarkan sub-divisi
    public function staffBySubDivisi(Request $request)
    {
        $subDivisi = $request->query('sub_divisi');

        $staff = IdentitasStaff::whereHas('jabatan', function ($query) use ($subDivisi) {
            $query->where('sub_divisi', $subDivisi);
        })->with('jabatan')->get();

        return response()->json($staff);
    }
}
