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
                    return redirect()->back()->withErrors([
                        'subdivisi' => "Sub divisi '{$subdivisi}' sudah ada di divisi '{$division->nama_divisi}'.",
                    ])->withInput();
                }

                SubDivision::create([
                    'division_id' => $division->id,
                    'nama_subdivisi' => $subdivisi,
                ]);
            }
        }

        return redirect()->route('dashboard.divisions.index')->with('success', 'Divisi dan sub divisi berhasil ditambahkan.');
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
            'deleted_subdivisions' => 'nullable|string',
        ]);

        $division = Division::findOrFail($id);
        $division->update([
            'nama_divisi' => $validatedData['divisi'],
        ]);

        if (!empty($validatedData['deleted_subdivisions'])) {
            $deletedIds = explode(',', $validatedData['deleted_subdivisions']);
            SubDivision::whereIn('id', $deletedIds)->delete();
        }

        if (!empty($validatedData['subdivisi'])) {
            foreach ($validatedData['subdivisi'] as $subdivisi) {
                if (!empty($subdivisi)) {
                    SubDivision::updateOrCreate(
                        ['division_id' => $division->id, 'nama_subdivisi' => $subdivisi],
                        ['nama_subdivisi' => $subdivisi]
                    );
                }
            }
        }

        return redirect()->route('dashboard.divisions.edit', $division->id)->with('success', 'Divisi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $division = Division::with('subDivisions')->findOrFail($id);

        $isUsedInRecords = TableRecord::where('division_id', $division->id)
            ->orWhereIn('subdivision_id', $division->subDivisions->pluck('id'))
            ->exists();

        if ($isUsedInRecords) {
            return redirect()->route('dashboard.divisions.index')->with('error', 'Divisi atau sub divisi ini sedang digunakan dan tidak dapat dihapus.');
        }

        $division->subDivisions()->delete();

        $division->delete();

        return redirect()->route('dashboard.divisions.index')->with('success', 'Divisi berhasil dihapus.');
    }

    public function deleteSubDivision($id)
    {
        $subDivision = SubDivision::findOrFail($id);
        $subDivision->delete();

        return response()->json(['success' => true]);
    }
}
