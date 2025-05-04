<?php

namespace App\Http\Controllers\KeluargaBerbinarin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KeluargaBerbinar\Division;
use App\Models\KeluargaBerbinar\SubDivision;
use App\Models\KeluargaBerbinar\TableRecord;
use App\Models\KeluargaBerbinar\TableStaff;

class DashboardKeluargaBerbinar extends Controller
{

    public function berbinarFamily()
    {
        $staffs = TableStaff::with(['records.division', 'records.subDivision'])->get();

        return view('moduls.dashboard.hr.berbinar-family.berbinarFamily', compact('staffs'));
    }

    public function addBerbinarFamily()
    {
        $divisions = Division::with('subDivisions')->get();

        return view('moduls.dashboard.hr.berbinar-family.addBerbinarFamily', compact('divisions'));
    }

    public function deleteBerbinarFamily($id)
    {
        $staff = TableStaff::findOrFail($id);
        $staff->records()->delete();
        $staff->delete();

        return redirect()->route('dashboard.berbinarFamily')->with('success', 'Data staff berhasil dihapus.');
    }

    public function detailBerbinarFamily($id)
    {
        $staff = TableStaff::with('records')->findOrFail($id);
        $records = $staff->records;

        return view('moduls.dashboard.hr.berbinar-family.detailBerbinarFamily', compact('staff', 'records'));
    }

    public function editBerbinarFamily($id)
    {
        $staff = TableStaff::with('records.division', 'records.subDivision')->findOrFail($id);
        $divisions = Division::with('subDivisions')->get(); // Ambil semua divisi beserta sub divisinya

        return view('moduls.dashboard.hr.berbinar-family.editBerbinarFamily', compact('staff', 'divisions'));
    }

    public function updateBerbinarFamily(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'linkedin' => 'required|url',
            'motm' => 'required|in:yes,no',
            'photo' => 'nullable|image|mimes:jpg,png|max:1024',
            'division' => 'required|array',
            'sub_division' => 'nullable|array',
            'date_start' => 'required|array',
            'date_end' => 'required|array',
        ]);

        $staff = TableStaff::findOrFail($id);

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
            $staff->photo = $photoPath;
        }

        $staff->update([
            'name' => $validatedData['name'],
            'linkedin' => $validatedData['linkedin'],
            'motm' => $validatedData['motm'],
        ]);

        $staff->records()->delete();

        foreach ($validatedData['division'] as $index => $divisionId) {
            $subDivisionId = $validatedData['sub_division'][$index] ?? null;

            TableRecord::create([
                'staff_id' => $staff->id,
                'division_id' => $divisionId,
                'subdivision_id' => $subDivisionId,
                'date_start' => $validatedData['date_start'][$index],
                'date_end' => $validatedData['date_end'][$index],
            ]);
        }


        return redirect()->route('dashboard.berbinarFamily')->with('success', 'Data staff berhasil diperbarui.');
    }

    public function submitBerbinarFamily(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'linkedin' => 'required|url',
            'motm' => 'required|in:yes,no',
            'photo' => 'nullable|image|mimes:jpg,png|max:1024',
            'division' => 'required|array',
            'sub_division' => 'nullable|array',
            'date_start' => 'required|array',
            'date_end' => 'required|array',
        ]);

        $staffData = [
            'name' => $validatedData['name'],
            'linkedin' => $validatedData['linkedin'],
            'motm' => $validatedData['motm'],
        ];

        if ($request->hasFile('photo')) {
            $staffData['photo'] = $request->file('photo')->store('photos', 'public');
        }

        $staff = TableStaff::create($staffData);


        foreach ($validatedData['division'] as $index => $divisionId) {
            $subDivisionId = $validatedData['sub_division'][$index] ?? null;

            TableRecord::create([
                'staff_id' => $staff->id,
                'division_id' => $divisionId,
                'subdivision_id' => $subDivisionId,
                'date_start' => $validatedData['date_start'][$index],
                'date_end' => $validatedData['date_end'][$index],
            ]);
        }

        return redirect()->route('dashboard.berbinarFamily')->with('success', 'Data staff berhasil ditambahkan.');
    }

}
