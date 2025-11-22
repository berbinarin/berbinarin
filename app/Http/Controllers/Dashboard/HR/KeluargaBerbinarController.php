<?php

namespace App\Http\Controllers\Dashboard\HR;

use App\Http\Controllers\Controller;
use App\Models\KeluargaBerbinar\Division;
use App\Models\KeluargaBerbinar\TableRecord;
use App\Models\KeluargaBerbinar\TableStaff;
use Illuminate\Http\Request;


class KeluargaBerbinarController extends Controller
{

    public function index()
    {
        $staffs = TableStaff::with(['records.division', 'records.subDivision'])->get();
        return view('dashboard.hr.keluarga-berbinar.index', compact('staffs'));
    }

    public function create()
    {
        $divisions = Division::with('subDivisions')->get();

        return view('dashboard.hr.keluarga-berbinar.create', compact('divisions'));
    }

    public function store(Request $request)
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
            'status' => 'required|array',
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
            $statusValue = $validatedData['status'][$index] ?? 'active'; // hanya ambil status sesuai index

            TableRecord::create([
                'staff_id' => $staff->id,
                'division_id' => $divisionId,
                'subdivision_id' => $subDivisionId,
                'date_start' => $validatedData['date_start'][$index],
                'date_end' => $validatedData['date_end'][$index],
                'status' => $statusValue, // simpan status sesuai index
            ]);
        }
        return redirect()->route('dashboard.keluarga-berbinar.index')->with([
            'alert' => true,
            'icon' => asset('assets/images/dashboard/success.png'),
            'title' => 'Berhasil!',
            'message' => 'Darta staff berhasil ditambahkan.',
            'type' => 'success',
        ]);
    }

    public function show($id)
    {
        $staff = TableStaff::with('records')->findOrFail($id);
        $records = $staff->records;

        return view('dashboard.hr.keluarga-berbinar.show', compact('staff', 'records'));
    }

    public function edit($id)
    {
        $staff = TableStaff::with('records.division', 'records.subDivision')->findOrFail($id);
        $divisions = Division::with('subDivisions')->get(); // Ambil semua divisi beserta sub divisinya

        return view('dashboard.hr.keluarga-berbinar.edit', compact('staff', 'divisions'));
    }

    public function update(Request $request, $id)
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
            'status' => 'required|array',
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
            $statusValue = $validatedData['status'][$index] ?? 'active'; // hanya ambil status sesuai index

            TableRecord::create([
                'staff_id' => $staff->id,
                'division_id' => $divisionId,
                'subdivision_id' => $subDivisionId,
                'date_start' => $validatedData['date_start'][$index],
                'date_end' => $validatedData['date_end'][$index],
                'status' => $statusValue, // simpan status sesuai index
            ]);
        }

        return redirect()->route('dashboard.keluarga-berbinar.index')->with([
            'alert' => true,
            'icon' => asset('assets/images/dashboard/success.png'),
            'title' => 'Berhasil!',
            'message' => 'Darta staff berhasil diperbarui.',
            'type' => 'success',
        ]);
    }

    public function destroy($id)
    {
        $staff = TableStaff::findOrFail($id);
        $staff->records()->delete();
        $staff->delete();

        return redirect()->route('dashboard.keluarga-berbinar.index')->with([
            'alert' => true,
            'icon' => asset('assets/images/dashboard/success.png'),
            'title' => 'Berhasil!',
            'message' => 'Darta staff berhasil dihapus.',
            'type' => 'success',
        ]);
    }
}
