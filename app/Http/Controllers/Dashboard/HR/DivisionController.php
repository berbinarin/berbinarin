<?php

namespace App\Http\Controllers\Dashboard\HR;

use App\Http\Controllers\Controller;
use App\Models\KeluargaBerbinar\Division;
use App\Models\KeluargaBerbinar\SubDivision;
use App\Models\KeluargaBerbinar\TableRecord;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function index()
    {
        $divisions = Division::with('subDivisions')->get();

        return view('dashboard.hr.divisions.index', compact('divisions'));
    }

    public function create()
    {
        return view('dashboard.hr.divisions.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'divisi' => 'required|string|max:255|unique:divisions,nama_divisi',
            'subdivisi' => 'nullable|array',
        ]);

        $division = Division::create([
            'nama_divisi' => $validatedData['divisi'],
        ]);

        if (!empty($validatedData['subdivisi'])) {
            foreach ($validatedData['subdivisi'] as $subdivisi) {
                if (empty($subdivisi)) {
                    continue;
                }

                $existingSubDivision = SubDivision::where('division_id', $division->id)
                    ->where('nama_subdivisi', $subdivisi)
                    ->first();

                if ($existingSubDivision) {
                    return redirect()->back()->with([
                        'alert' => true,
                        'type' => 'error',
                        'title' => 'Gagal!',
                        'message' => "Sub divisi '{$subdivisi}' sudah ada di divisi '{$division->nama_divisi}'.",
                        'icon' => asset('assets/images/dashboard/error.png'),
                    ]);
                }

                SubDivision::create([
                    'division_id' => $division->id,
                    'nama_subdivisi' => $subdivisi,
                ]);
            }
        }

        return redirect()->route('dashboard.divisions.index')->with([
                'alert' => true,
                'type' => 'success',
                'title' => 'Berhasil!',
                'message' =>'Divisi dan Sub Divisi berhasil ditambahkan',
                'icon' => asset('assets/images/dashboard/success.png'),
            ]);
    }
    public function show($id)
    {
        $division = Division::with('subDivisions')->findOrFail($id);

        return view('dashboard.hr.divisions.show', compact('division'));
    }

    public function edit($id)
    {
        $division = Division::with('subDivisions')->findOrFail($id);

        return view('dashboard.hr.divisions.edit', compact('division'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'divisi' => 'required|string|max:255|unique:divisions,nama_divisi,' . $id,
            'subdivisi' => 'nullable|array',
            'subdivisi.*' => 'nullable|string|max:255',
            'subdivisi_id' => 'nullable|array',
            'subdivisi_id.*' => 'nullable|integer',
            'deleted_subdivisions' => 'nullable|string',
        ]);

        $division = Division::findOrFail($id);
        $division->update([
            'nama_divisi' => $validatedData['divisi'],
        ]);

        // Hapus sub divisi jika ada
        if (!empty($validatedData['deleted_subdivisions'])) {
            $deletedIds = explode(',', $validatedData['deleted_subdivisions']);
            SubDivision::whereIn('id', $deletedIds)->delete();
        }

        $subdivisis = $validatedData['subdivisi'] ?? [];
        $subdivisiIds = $validatedData['subdivisi_id'] ?? [];

        foreach ($subdivisis as $i => $namaSub) {
            if (!empty($namaSub)) {
                $subDivId = $subdivisiIds[$i] ?? null;
                if ($subDivId) {
                    SubDivision::where('id', $subDivId)->update([
                        'nama_subdivisi' => $namaSub,
                        'division_id' => $division->id,
                    ]);
                } else {
                    SubDivision::create([
                        'division_id' => $division->id,
                        'nama_subdivisi' => $namaSub,
                    ]);
                }
            }
        }

        return redirect()->route('dashboard.divisions.index', $division->id)->with([
                'alert' => true,
                'type' => 'success',
                'title' => 'Berhasil!',
                'message' =>'Data berhasil diupdate',
                'icon' => asset('assets/images/dashboard/success.png'),
            ]);
    }

    public function destroy($id)
    {
        $division = Division::with('subDivisions')->findOrFail($id);

        $isUsedInRecords = TableRecord::where('division_id', $division->id)
            ->orWhereIn('subdivision_id', $division->subDivisions->pluck('id'))
            ->exists();

        if ($isUsedInRecords) {
            return redirect()->route('dashboard.divisions.index')->with([
                'alert' => true,
                'type' => 'error',
                'title' => 'Gagal!',
                'message' =>'Data dan sub divisi ini sudah digunakan dan tidak dapat dihapus',
                'icon' => asset('assets/images/dashboard/error.png'),
            ]);
        }

        $division->subDivisions()->delete();

        $division->delete();

        return redirect()->route('dashboard.divisions.index')->with([
                'alert' => true,
                'type' => 'success',
                'title' => 'Berhasil!',
                'message' =>'Data berhasil dihapus',
                'icon' => asset('assets/images/dashboard/success.png'),
            ]);
    }

    public function deleteSubDivision($id)
    {
        $subDivision = SubDivision::findOrFail($id);
        $subDivision->delete();

        return response()->json(['success' => true]);
    }
}
