<?php

namespace App\Http\Controllers;

use App\Http\Requests\HiringPositionsRequirementsRequest;
use App\Models\Hiring_Positions;
use App\Models\Hiring_Positions_Requirements;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class HiringPositionsRequirementsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $hiring_position_requirements = Hiring_Positions_Requirements::all();

        return view("GetAlldataPositionRequirement" ,["hiring_position_requirements"=>$hiring_position_requirements]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $HiringPositions = Hiring_Positions::all();
        return view("CreatePositionRequirement", ["HiringPositions"=>$HiringPositions]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HiringPositionsRequirementsRequest $request)
    {
        //
        try{
            
            $validated = $request->validated();
            Hiring_Positions_Requirements::create([
                'position_id'=>$validated["position_id"],
                'requirement'=>$validated["requirement"]
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
        $hiring_position_requirements = Hiring_Positions_Requirements::find($id);
        return view("GetDataPositionRequirementByid",["hiring_position_requirements"=>$hiring_position_requirements]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $HiringPositions = Hiring_Positions::all();
            $hiring_position_requirements = Hiring_Positions_Requirements::find($id);
    
            if (!$hiring_position_requirements) {
                throw new \Exception('Data tidak ditemukan.'); // Atau gunakan jenis Exception yang sesuai
            }
    
            return view("UpdatePositionRequirement", [
                "hiring_position_requirements" => $hiring_position_requirements,
                "HiringPositions" => $HiringPositions
            ]);
        } catch (\Exception $e) {
            Alert::toast('Terjadi kesalahan ' .$e->getMessage(), 'error')->autoClose(5000);

    
            return redirect("/dashboard/admin/positions/requirements"); 
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HiringPositionsRequirementsRequest $request, string $id)
    {
        
        try{

            $hiring_position_requirements = Hiring_Positions_Requirements::find($id);
            $hiring_position_requirements->position_id = $request->position_id;
            $hiring_position_requirements->requirement = $request->requirement;
            $hiring_position_requirements->save();
    
            Alert::toast('Data Berhasil Update', 'success')->autoClose(5000);

    
            return redirect("/dashboard/admin/positions/requirements");
        }catch(\Exception $e){
            Alert::toast('Terjadi kesalahan saat Update data ' .$e->getMessage(), 'error')->autoClose(5000);

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

            $hiring_position_requirements = Hiring_Positions_Requirements::find($id);

            if (!$hiring_position_requirements) {
                throw new \Exception('Data tidak ditemukan.'); // Atau gunakan jenis Exception yang sesuai
            }
            $hiring_position_requirements->delete();
    
    
            Alert::toast('Data Berhasil Delete', 'success')->autoClose(5000);

            
    
            return redirect("/dashboard/admin/positions/requirements");
        }catch(\Exception $e){
            Alert::toast('Terjadi kesalahan saat menghapus data ' .$e->getMessage(), 'error')->autoClose(5000);

    
            return redirect('/dashboard/admin/positions/requirements');
        }
        
    }
}
