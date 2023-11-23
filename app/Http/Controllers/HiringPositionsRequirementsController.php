<?php

namespace App\Http\Controllers;

use App\Http\Requests\HiringPositionsRequirementsRequest;
use App\Models\Hiring_Positions;
use App\Models\Hiring_Positions_Requirements;
use Illuminate\Http\Request;

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
        $validated = $request->validated();
        Hiring_Positions_Requirements::create([
            'position_id'=>$validated["position_id"],
            'requirement'=>$validated["requirement"]
        ]);

        session()->flash('success', 'Data Berhasil Masuk');
        return redirect()->back();
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
        //
        $HiringPositions = Hiring_Positions::all();
        $hiring_position_requirements = Hiring_Positions_Requirements::find($id);
        return view("UpdatePositionRequirement",["hiring_position_requirements"=>$hiring_position_requirements,"HiringPositions"=>$HiringPositions]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HiringPositionsRequirementsRequest $request, string $id)
    {
        //
        $hiring_position_requirements = Hiring_Positions_Requirements::find($id);
        $hiring_position_requirements->position_id = $request->position_id;
        $hiring_position_requirements->requirement = $request->requirement;
        $hiring_position_requirements->save();

        session()->flash('success', 'Data Berhasil Update');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $hiring_position_requirements = Hiring_Positions_Requirements::find($id);
        $hiring_position_requirements->delete();


        session()->flash('success', 'Data Berhasil Delete');

        return redirect("/Position-Requirement/create");
        
    }
}
