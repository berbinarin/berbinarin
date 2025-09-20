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

            return redirect()->route('dashboard.position-requirements.index')->with([
                'alert' => true,
                'type' => 'success',
                'title' => 'Berhasil!',
                'message' =>'Data berhasil masuk',
                'icon' => asset('assets/images/dashboard/success.png'),
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with([
                'alert' => true,
                'type' => 'error',
                'title' => 'Gagal!',
                'message' =>'Terjadi kesalahan : '. $e->getMessage(),
                'icon' => asset('assets/images/dashboard/error.png'),
            ]);
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

            return redirect()->route('dashboard.position-requirements.index')->with([
                'alert' => true,
                'type' => 'success',
                'title' => 'Berhasil!',
                'message' =>'Data berhasil diupdate',
                'icon' => asset('assets/images/dashboard/success.png'),
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with([
                'alert' => true,
                'type' => 'error',
                'title' => 'Gagal!',
                'message' =>'Terjadi kesalahan saat update : '. $e->getMessage(),
                'icon' => asset('assets/images/dashboard/error.png'),
            ]);
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
            return redirect()->route('dashboard.position-requirements.index')->with([
                'alert' => true,
                'type' => 'success',
                'title' => 'Berhasil!',
                'message' =>'Data berhasil dihapus',
                'icon' => asset('assets/images/dashboard/success.png'),
            ]);

        } catch (\Exception $e) {
            return redirect()->route('dashboard.position-requirements.index')->with([
                'alert' => true,
                'type' => 'error',
                'title' => 'Gagal!',
                'message' =>'Terjadi kesalahan saat menghapus data: '. $e->getMessage(),
                'icon' => asset('assets/images/dashboard/error.png'),
            ]);
        }
    }
}
