<?php

namespace App\Http\Controllers;

use App\Http\Requests\HiringPositionsJobDescriptionsRequest;
use App\Models\Hiring_Positions;
use App\Models\Hiring_Positions_Job_Descriptions;
use Illuminate\Http\Request;

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

        $validated = $request->validated();
        Hiring_Positions_Job_Descriptions::create([
            'position_id'=>$validated["position_id"],
            'job_description'=>$validated["job_description"]
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
        $hiring_position_job_descriptions = Hiring_Positions_Job_Descriptions::find($id);
        return view("GetDataJobDescriptionByid",["hiring_position_job_descriptions"=>$hiring_position_job_descriptions]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $HiringPositions = Hiring_Positions::all();
        $hiring_position_job_descriptions = Hiring_Positions_Job_Descriptions::find($id);
        return view("UpdateJobDescription", ["hiring_position_job_descriptions"=>$hiring_position_job_descriptions,"HiringPositions"=>$HiringPositions]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HiringPositionsJobDescriptionsRequest $request, string $id)
    {
        //
        $hiring_position_job_descriptions = Hiring_Positions_Job_Descriptions::find($id);
        $hiring_position_job_descriptions->position_id = $request->position_id;
        $hiring_position_job_descriptions->job_description = $request->job_description;
        $hiring_position_job_descriptions->save();

        session()->flash('success', 'Data Berhasil Update');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $hiring_position_job_descriptions = Hiring_Positions_Job_Descriptions::find($id);
        $hiring_position_job_descriptions->delete();


        session()->flash('success', 'Data Berhasil Delete');

        return redirect("/JobDecription/create");
    }
}
