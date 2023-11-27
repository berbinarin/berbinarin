<?php

namespace App\Http\Controllers;

use App\Http\Requests\HiringGeneralRequirementRequest;
use App\Models\HiringGeneralRequirement;
use Illuminate\Http\Request;

class HiringGeneralRequirementsController extends Controller
{
    public function index()
    {
        //
        $HiringGeneralRequirement = HiringGeneralRequirement::all();
        return view("GetAlldataHiringGeneralRequirement", ["HiringGeneralRequirement"=>$HiringGeneralRequirement]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("CreateHiringGeneralRequirement");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HiringGeneralRequirementRequest $request)
    {
        //
        try{

            $validate = $request->validated();
    
            HiringGeneralRequirement::create([
                "requirement"=>$validate["requirement"],
            ]);
    
            session()->flash('success', 'Data Berhasil Masuk');
            return redirect()->back();
        }catch(\Exception $e){
            session()->flash('error', 'Terjadi kesalahan saat menyimpan data.');
            return redirect()->back();
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $HiringGeneralRequirement = HiringGeneralRequirement::find($id);
        return view('GetDataHiringGeneralRequirementsByid',["HiringGeneralRequirement"=>$HiringGeneralRequirement]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $HiringGeneralRequirement = HiringGeneralRequirement::find($id);

        return view('UpdateHiringGeneralRequiremenrt',["HiringGeneralRequirement"=>$HiringGeneralRequirement]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HiringGeneralRequirementRequest $request, string $id)
    {
        //
        try{

            $HiringGeneralRequirement = HiringGeneralRequirement::find($id);
            $HiringGeneralRequirement->requirement =$request->requirement;
    
            $HiringGeneralRequirement->save();
    
            session()->flash('success', 'Data Berhasil Update');
    
            return redirect()->back();
        }catch(\Exception $e){
            session()->flash('error', 'Terjadi kesalahan saat Update data.');
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

            $HiringGeneralRequirement = HiringGeneralRequirement::find($id);
            if (!$HiringGeneralRequirement) {
                throw new \Exception('Data tidak ditemukan.'); // Atau gunakan jenis Exception yang sesuai
            }
            $HiringGeneralRequirement->delete();
    
            session()->flash('success', 'Data Berhasil Delete');
    
            return redirect("/HiringGeneralRequirement/create");
        }catch(\Exception $e){
            session()->flash('error', 'Terjadi kesalahan saat menghapus data: ' . $e->getMessage());

            return redirect("/HiringGeneralRequirement/create");
        }

    }
}
