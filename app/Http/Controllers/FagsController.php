<?php

namespace App\Http\Controllers;

use App\Http\Requests\FagsRequest;
use App\Models\Fags;
use Illuminate\Http\Request;

class FagsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $Fags = Fags::all();
        return view("GetAlldataFags", ["Fags"=>$Fags]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("CreateFags");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FagsRequest $request)
    {
        //
        try{

            $validate = $request->validated();
    
            Fags::create([
                "question"=>$validate["question"],
                "answer"=>$validate["answer"],
                "service"=>$validate["service"],
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
        $Fags = Fags::find($id);
        return view('GetDataFagsByid',["Fags"=>$Fags]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $Fags = Fags::find($id);

        return view('UpdateFags', ["Fags"=>$Fags]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FagsRequest $request, string $id)
    {
        //
        try{

            $Fags = Fags::find($id);
            $Fags->question =$request->question;
            $Fags->answer = $request->answer;
            $Fags->service = $request->service;
    
            $Fags->save();
    
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

            $Fags = Fags::find($id);
            $Fags->delete();
    
            session()->flash('success', 'Data Berhasil Delete');
    
            return redirect("/Fags/create");
        }catch(\Exception $e){
            session()->flash('error', 'Terjadi kesalahan saat menghapus data: ' . $e->getMessage());

            return redirect("/Fags/create");
        }

    }
}
