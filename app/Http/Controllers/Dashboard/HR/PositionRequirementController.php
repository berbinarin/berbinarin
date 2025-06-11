<?php

namespace App\Http\Controllers\Dashboard\HR;

use App\Http\Controllers\Controller;
use App\Http\Requests\HiringPositionsRequirementsRequest;
use App\Models\Hiring_Positions;
use App\Models\Hiring_Positions_Requirements;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PositionRequirementController extends Controller
{
    public function index()
    {
        $HiringPosisitonsRequirement = Hiring_Positions_Requirements::all();
        $HiringPosisitons = Hiring_Positions::all();

        return view('dashboard.hr.position-requirements.index', [
            "HiringPosisitonsRequirement" => $HiringPosisitonsRequirement,
            'HiringPosisitons' => $HiringPosisitons
        ]);
    }

    public function create()
    {
        // Kirim data posisi untuk dropdown pada form create
        $HiringPosisitons = Hiring_Positions::all();
        return view('dashboard.hr.position-requirements.create', [
            'HiringPosisitons' => $HiringPosisitons
        ]);
    }

    public function store(HiringPositionsRequirementsRequest $request)
    {
        try {
            $validated = $request->validated();
            Hiring_Positions_Requirements::create([
                'position_id' => $validated["position_id"],
                'requirement' => $validated["requirement"]
            ]);

            Alert::toast('Data Berhasil Masuk', 'success')->autoClose(5000);

            return redirect()->route('dashboard.position-requirements.index');
        } catch (\Exception $e) {
            Alert::toast('Terjadi kesalahan saat menyimpan data: ' . $e->getMessage(), 'error')->autoClose(5000);

            return redirect()->back()->withInput();
        }
    }

    public function edit($id)
    {
        $HiringPosisitonsRequirement = Hiring_Positions_Requirements::find($id);
        $HiringPosisitons = Hiring_Positions::all();

        return view('dashboard.hr.position-requirements.edit', [
            'HiringPosisitonsRequirement' => $HiringPosisitonsRequirement,
            'HiringPosisitons' => $HiringPosisitons
        ]);
    }

    public function update(HiringPositionsRequirementsRequest $request, string $id)
    {
        try {
            $hiring_position_requirements = Hiring_Positions_Requirements::find($id);
            $hiring_position_requirements->position_id = $request->position_id;
            $hiring_position_requirements->requirement = $request->requirement;
            $hiring_position_requirements->save();

            Alert::toast('Data Berhasil Update', 'success')->autoClose(5000);
            return redirect()->route('dashboard.position-requirements.index');
        } catch (\Exception $e) {
            Alert::toast('Terjadi kesalahan saat Update data: ' . $e->getMessage(), 'error')->autoClose(5000);

            return redirect()->back()->withInput();
        }
    }

    public function destroy(string $id)
    {
        try {
            $hiring_position_requirements = Hiring_Positions_Requirements::find($id);

            if (!$hiring_position_requirements) {
                throw new \Exception('Data tidak ditemukan.');
            }
            $hiring_position_requirements->delete();
            Alert::toast('Data Berhasil Delete', 'success')->autoClose(5000);
            return redirect()->route('dashboard.position-requirements.index');

        } catch (\Exception $e) {
            Alert::toast('Terjadi kesalahan saat menghapus data: ' . $e->getMessage(), 'error')->autoClose(5000);
            return redirect()->route('dashboard.position-requirements.index');
        }
    }
}
