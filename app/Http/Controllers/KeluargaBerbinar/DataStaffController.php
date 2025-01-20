<?php

namespace App\Http\Controllers\KeluargaBerbinar;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\KeluargaBerbinar\DataStaff;

class DataStaffController extends Controller
{
    public function index()
    {
        $dataStaff = DataStaff::all();
        return view('data_staff.index', compact('dataStaff'));
    }

    public function create()
    {
        return view('data_staff.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|min:5',
            'linkedin' => 'required|string',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'motm' => 'nullable|in:yes,no',
        ]);
        $validated['motm'] = $validated['motm'] ?? 'no';
        $imagePath = $request->file('foto')->store('public/images');

        DataStaff::create([
            'nama_lengkap' => $validated['nama_lengkap'],
            'linkedin' => $validated['linkedin'],
            'foto' => $imagePath,
            'motm' => $validated['motm'],
        ]);

        return redirect()->route('data_staff.index')->with('success', 'Data Staff Berhasil disimpan');
    }

    public function edit($id)
    {
        $dataStaff = DataStaff::findOrFail($id);
        return view('data_staff.edit', compact('dataStaff'));
    }

    public function update(Request $request, $id)
    {
        $dataStaff = DataStaff::findOrFail($id);
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|min:5',
            'linkedin' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'motm' => 'required|in:yes,no',
        ]);

        if ($request->hasFile('foto')) {
            $imagePath = $request->file('foto')->store('public/images');
            $dataStaff->deleteImage();
            $validated['foto'] = $imagePath;
        }

        $dataStaff->update($validated);

        return redirect()->route('data_staff.index')->with('success', 'Data staff berhasil diperbarui');
    }

    public function destroy($id)
    {
        $dataStaff = DataStaff::findOrFail($id);
        $dataStaff->delete();
        return redirect()->route('data_staff.index')->with('success', 'Data staff berhasil dihapus');
    }
    public function showMotm()
    {
        $motmStaff = DataStaff::where('motm', 'yes')->get();
        return redirect()->route('data_staff.motm_view', ['motmStaff' => $motmStaff]);
    }
}
