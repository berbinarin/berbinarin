<?php

namespace App\Http\Controllers;

use App\Models\IdentitasStaff;
use Illuminate\Http\Request;

class IdentitasStaffController extends Controller
{
    // Melihat semua staff
    public function index()
    {
        $staff = IdentitasStaff::with('jabatan')->get();
        return response()->json($staff);
    }

    // Membuat staff baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'kampus' => 'required|string|max:255',
            'no_hp' => 'required|string|max:20',
            'email' => 'required|email|unique:identitas_staff,email',
            'linkedin' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'foto_profil' => 'nullable|string|max:255',
        ]);

        $staff = IdentitasStaff::create($validated);
        return response()->json(['message' => 'Staff berhasil dibuat', 'staff' => $staff], 201);
    }

    // Mengupdate data staff
    public function update(Request $request, $id)
    {
        $staff = IdentitasStaff::findOrFail($id);

        $validated = $request->validate([
            'nama_lengkap' => 'sometimes|string|max:255',
            'kampus' => 'sometimes|string|max:255',
            'no_hp' => 'sometimes|string|max:20',
            'email' => 'sometimes|email|unique:identitas_staff,email,' . $id,
            'linkedin' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'foto_profil' => 'nullable|string|max:255',
        ]);

        $staff->update($validated);
        return response()->json(['message' => 'Staff berhasil diupdate', 'staff' => $staff]);
    }

    // Menghapus staff (jabatan terhapus otomatis karena cascade)
    public function destroy($id)
    {
        $staff = IdentitasStaff::findOrFail($id);
        $staff->delete();
        return response()->json(['message' => 'Staff dan jabatannya berhasil dihapus']);
    }
}
