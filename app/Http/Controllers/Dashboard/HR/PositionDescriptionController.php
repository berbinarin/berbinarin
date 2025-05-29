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

        return view('dashboard.hr.position-descriptions.index', ["HiringPosisitonsJobDescriptionment" => $HiringPosisitonsJobDescriptionment, 'HiringPosisitons' => $HiringPosisitons]);
    }

    public function store(HiringPositionsJobDescriptionsRequest $request)
    {
        try {

            $validated = $request->validated();
            Hiring_Positions_Job_Descriptions::create([
                'position_id' => $validated["position_id"],
                'job_description' => $validated["job_description"]
            ]);

            Alert::toast('Data Berhasil Masuk', 'success')->autoClose(5000);

            return redirect()->back();
        } catch (\Exception $e) {
            Alert::toast('Terjadi kesalahan saat menyimpan data' . $e->getMessage(), 'error')->autoClose(5000);

            return redirect()->back();
        }
    }


    public function edit($id)
    {
        $HiringPosisitonsJobDescriptionment = Hiring_Positions_Job_Descriptions::find($id);
        $HiringPosisitons = Hiring_Positions::all();

        return view('dashboard.hr.position-descriptions.edit', ['HiringPosisitonsJobDescriptionment' => $HiringPosisitonsJobDescriptionment, 'HiringPosisitons' => $HiringPosisitons]);
    }

    public function update(HiringPositionsJobDescriptionsRequest $request, string $id)
    {
        //
        try {

            $hiring_position_job_descriptions = Hiring_Positions_Job_Descriptions::find($id);
            $hiring_position_job_descriptions->position_id = $request->position_id;
            $hiring_position_job_descriptions->job_description = $request->job_description;
            $hiring_position_job_descriptions->save();

            Alert::toast('Data Berhasil Update', 'success')->autoClose(5000);


            return redirect()->route('dashboard.position-descriptions.index');
        } catch (\Exception $e) {
            Alert::toast('Terjadi kesalahan saat Update data.' . $e->getMessage(), 'error')->autoClose(5000);

            return redirect()->back();
        }
    }

    public function destroy(string $id)
    {
        //
        try {

            $hiring_position_job_descriptions = Hiring_Positions_Job_Descriptions::find($id);
            if (!$hiring_position_job_descriptions) {
                throw new \Exception('Data tidak ditemukan'); // Atau gunakan jenis Exception yang sesuai
            }
            $hiring_position_job_descriptions->delete();


            Alert::toast('Data Berhasil Delete', 'success')->autoClose(5000);


            return redirect()->route('dashboard.position-descriptions.index');
        } catch (\Exception $e) {
            Alert::toast('Terjadi kesalahan saat menghapus data.' . $e->getMessage(), 'error')->autoClose(5000);


            return redirect()->route('dashboard.position-descriptions.index');
        }
    }
}
