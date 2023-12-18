<?php

namespace App\Http\Controllers;

use App\Http\Requests\HiringPositionsJobDescriptionsRequest;
use App\Models\Hiring_Positions;
use App\Models\Hiring_Positions_Job_Descriptions;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HiringPositionsJobDescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $hiring_position_job_descriptions = Hiring_Positions_Job_Descriptions::all();

        return view("GetAlldataJobDescription",["hiring_position_job_descriptions"=>$hiring_position_job_descriptions]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $HiringPositions = Hiring_Positions::all();
        return view("CreateJobDescription", ["HiringPositions"=>$HiringPositions]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HiringPositionsJobDescriptionsRequest $request)
    {
        //
        try{

            $validated = $request->validated();
            Hiring_Positions_Job_Descriptions::create([
                'position_id'=>$validated["position_id"],
                'job_description'=>$validated["job_description"]
            ]);
    
            Alert::toast('Data Berhasil Masuk', 'success')->autoClose(5000);

            return redirect()->back();
        }catch(\Exception $e){
            Alert::toast('Terjadi kesalahan saat menyimpan data' .$e->getMessage(), 'error')->autoClose(5000);

            return redirect()->back();
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $hiring_position_job_descriptions = Hiring_Positions_Job_Descriptions::find($id);
        return view("GetDataJobDescriptionByid",["hiring_position_job_descriptions"=>$hiring_position_job_descriptions]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        try{

            $HiringPositions = Hiring_Positions::all();
            $hiring_position_job_descriptions = Hiring_Positions_Job_Descriptions::find($id);

            if (!$hiring_position_job_descriptions) {
                throw new \Exception('Data tidak ditemukan.'); // Atau gunakan jenis Exception yang sesuai
            }
            return view("UpdateJobDescription", ["hiring_position_job_descriptions"=>$hiring_position_job_descriptions,"HiringPositions"=>$HiringPositions]);
        }catch(\Exception $e){
            Alert::toast('Terjadi kesalahan ' .$e->getMessage(), 'error')->autoClose(5000);
            
    
            return redirect("/dashboard/admin/positions/descriptions"); 
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HiringPositionsJobDescriptionsRequest $request, string $id)
    {
        //
        try{

            $hiring_position_job_descriptions = Hiring_Positions_Job_Descriptions::find($id);
            $hiring_position_job_descriptions->position_id = $request->position_id;
            $hiring_position_job_descriptions->job_description = $request->job_description;
            $hiring_position_job_descriptions->save();
    
            Alert::toast('Data Berhasil Update', 'success')->autoClose(5000);

    
            return redirect("/dashboard/admin/positions/descriptions");
        }catch(\Exception $e){
            Alert::toast('Terjadi kesalahan saat Update data.' .$e->getMessage(), 'error')->autoClose(5000);

            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        try{

            $hiring_position_job_descriptions = Hiring_Positions_Job_Descriptions::find($id);
            if (!$hiring_position_job_descriptions) {
                throw new \Exception('Data tidak ditemukan'); // Atau gunakan jenis Exception yang sesuai
            }
            $hiring_position_job_descriptions->delete();
    
    
            Alert::toast('Data Berhasil Delete', 'success')->autoClose(5000);

    
            return redirect("/dashboard/admin/positions/descriptions");
        }catch(\Exception $e){
            Alert::toast('Terjadi kesalahan saat menghapus data.' .$e->getMessage(), 'error')->autoClose(5000);


            return redirect("/dashboard/admin/positions/descriptions");
        }
    }
}
