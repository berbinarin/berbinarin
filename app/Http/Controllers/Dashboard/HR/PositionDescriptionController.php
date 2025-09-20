<?php

namespace App\Http\Controllers\Dashboard\HR;

use App\Http\Controllers\Controller;
use App\Http\Requests\HiringPositionsJobDescriptionsRequest;
use App\Models\Hiring_Positions;
use App\Models\Hiring_Positions_Job_Descriptions;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PositionDescriptionController extends Controller
{
    public function index()
    {
        $HiringPosisitonsJobDescriptionment = Hiring_Positions_Job_Descriptions::all();
        $HiringPosisitons = Hiring_Positions::all();

        return view('dashboard.hr.position-descriptions.index', [
            "HiringPosisitonsJobDescriptionment" => $HiringPosisitonsJobDescriptionment,
            'HiringPosisitons' => $HiringPosisitons
        ]);
    }

    public function create()
    {
        // Kirim data posisi untuk dropdown
        $HiringPosisitons = Hiring_Positions::all();
        return view('dashboard.hr.position-descriptions.create', [
            'HiringPosisitons' => $HiringPosisitons
        ]);
    }

    public function store(HiringPositionsJobDescriptionsRequest $request)
    {
        try {
            $validated = $request->validated();

            Hiring_Positions_Job_Descriptions::create([
                'position_id' => $validated["position_id"],
                'job_description' => $validated["job_description"]
            ]);

            return redirect()->route('dashboard.position-descriptions.index')->with([
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
        $HiringPosisitonsJobDescriptionment = Hiring_Positions_Job_Descriptions::find($id);
        $HiringPosisitons = Hiring_Positions::all();

        return view('dashboard.hr.position-descriptions.edit', [
            'HiringPosisitonsJobDescriptionment' => $HiringPosisitonsJobDescriptionment,
            'HiringPosisitons' => $HiringPosisitons
        ]);
    }

    public function update(HiringPositionsJobDescriptionsRequest $request, string $id)
    {
        try {
            $hiring_position_job_descriptions = Hiring_Positions_Job_Descriptions::find($id);
            $hiring_position_job_descriptions->position_id = $request->position_id;
            $hiring_position_job_descriptions->job_description = $request->job_description;
            $hiring_position_job_descriptions->save();

            return redirect()->route('dashboard.position-descriptions.index')->with([
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
            $hiring_position_job_descriptions = Hiring_Positions_Job_Descriptions::find($id);
            if (!$hiring_position_job_descriptions) {
                throw new \Exception('Data tidak ditemukan');
            }
            $hiring_position_job_descriptions->delete();

            return redirect()->route('dashboard.position-descriptions.index')->with([
                'alert' => true,
                'type' => 'success',
                'title' => 'Berhasil!',
                'message' =>'Data berhasil dihapus',
                'icon' => asset('assets/images/dashboard/success.png'),
            ]);
        } catch (\Exception $e) {
            return redirect()->route('dashboard.position-descriptions.index')->with([
                'alert' => true,
                'type' => 'error',
                'title' => 'Gagal!',
                'message' =>'Terjadi kesalahan saat menghapus data: '. $e->getMessage(),
                'icon' => asset('assets/images/dashboard/error.png'),
            ]);
        }
    }
}
