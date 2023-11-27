<?php

namespace App\Http\Controllers;

use App\Http\Requests\HiringBenefitsRequest;
use App\Models\HiringBenefits;
use Illuminate\Http\Request;

class HiringBenefitsController extends Controller
{
    public function index()
    {
        //
        $HiringBenefit = HiringBenefits::all();
        return view("GetAlldataHiringBenefits", ["HiringBenefit"=>$HiringBenefit]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("CreateHiringBenefits");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HiringBenefitsRequest $request)
    {
        //
        try{

            $validate = $request->validated();
    
            HiringBenefits::create([
                "benefit"=>$validate["benefit"],
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
        $HiringBenefit = HiringBenefits::find($id);
        return view('GetDataHiringBenefitsByid',["HiringBenefit"=>$HiringBenefit]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $HiringBenefit = HiringBenefits::find($id);

        return view('UpdateHiringBenefits',['HiringBenefit'=>$HiringBenefit]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HiringBenefitsRequest $request, string $id)
    {
        //
        try{

            $HiringBenefits = HiringBenefits::find($id);
            $HiringBenefits->benefit =$request->benefit;
    
            $HiringBenefits->save();
    
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

            $HiringBenefits = HiringBenefits::find($id);
            if (!$HiringBenefits) {
                throw new \Exception('Data tidak ditemukan.'); // Atau gunakan jenis Exception yang sesuai
            }
            $HiringBenefits->delete();
    
            session()->flash('success', 'Data Berhasil Delete');
    
            return redirect("/HiringBenefit/create");
        }catch(\Exception $e){
            session()->flash('error', 'Terjadi kesalahan saat menghapus data: ' . $e->getMessage());

            return redirect("/HiringBenefit/create");
        }

    }
}
