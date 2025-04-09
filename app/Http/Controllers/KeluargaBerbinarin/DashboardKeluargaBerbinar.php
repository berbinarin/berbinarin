<?php

namespace App\Http\Controllers\KeluargaBerbinarin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TableStaff;
use App\Models\TableRecord;


class DashboardKeluargaBerbinar extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth')->except(['login']);
    //     $this->middleware('role:Admin,HR,Konselling,PsikotestFree,PsikotestPaid,BerbinarSatu')->except(['login']);
    // }

    // MODUL DASHBOARD KELUARGA BERBINAR    
    public function berbinarFamily()
    {
        $staffs = TableStaff::all();
        return view('moduls.dashboard.hr.berbinar-family.berbinarFamily', compact('staffs'));
    }

    public function addBerbinarFamily()
    {
        return view('moduls.dashboard.hr.berbinar-family.addBerbinarFamily');
    }

    public function detailBerbinarFamily($id)
    {
        $staff = TableStaff::with('records')->findOrFail($id);
        $records = $staff->records;

        return view('moduls.dashboard.hr.berbinar-family.detailBerbinarFamily', compact('staff', 'records'));
    }

    public function editBerbinarFamily($id)
    {
        $staff = TableStaff::with('records')->findOrFail($id);
        return view('moduls.dashboard.hr.berbinar-family.editBerbinarFamily', compact('staff'));
    }

    // CRUD
    public function submitBerbinarFamily(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'linkedin' => 'required|string|max:255',
            'division.*' => 'required|string|max:255',
            'sub_division.*' => 'required|string|max:255',
            'date_start.*' => 'required|date',
            'date_end.*' => 'required|date',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:1024', 
            'motm' => 'required|string|in:yes,no', 
        ]);

        $photoPath = $request->file('photo')->store('photos', 'public');

        $staff = TableStaff::create([
            'name' => $validatedData['name'],
            'linkedin' => $validatedData['linkedin'],
            'status' => 1, 
            'photo' => $photoPath, 
            'motm' => $validatedData['motm'], 
        ]);

        foreach ($validatedData['division'] as $index => $division) {
            TableRecord::create([
                'staff_id' => $staff->id,
                'division' => $division,
                'subdivision' => $validatedData['sub_division'][$index] ?? null, 
                'date_start' => $validatedData['date_start'][$index],
                'date_end' => $validatedData['date_end'][$index],
            ]);
        }

        return redirect()->route('dashboard.berbinarFamily')->with('success', 'Data staff berhasil ditambahkan.');
    }

    public function updateBerbinarFamily(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'linkedin' => 'required|string|max:255',
            'division.*' => 'required|string|max:255',
            'sub_division.*' => 'nullable|string|max:255',
            'date_start.*' => 'required|date',
            'date_end.*' => 'required|date',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:1024', 
            'motm' => 'required|string|in:yes,no', 
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

        foreach ($validatedData['division'] as $index => $division) {
            TableRecord::create([
                'staff_id' => $staff->id,
                'division' => $division,
                'subdivision' => $validatedData['sub_division'][$index] ?? null, // Gunakan nilai null jika tidak ada
                'date_start' => $validatedData['date_start'][$index],
                'date_end' => $validatedData['date_end'][$index],
            ]);
        }

        return redirect()->route('dashboard.berbinarFamily')->with('success', 'Data staff berhasil diperbarui.');
    }

    public function deleteBerbinarFamily($id)
    {
        $staff = TableStaff::findOrFail($id);
        $staff->records()->delete(); 
        $staff->delete();

        return redirect()->route('dashboard.berbinarFamily')->with('success', 'Data staff berhasil dihapus.');
    }

}
