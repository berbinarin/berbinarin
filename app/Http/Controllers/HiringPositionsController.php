<?php

namespace App\Http\Controllers;

use App\Http\Requests\Hiring_PositionsRequest;
use App\Models\Hiring_Positions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;


class HiringPositionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $HiringPosisitons = Hiring_Positions::all();

        return view("HiringPositionsGet",['HiringPosisitons'=>$HiringPosisitons]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // 
        return view("CreateHiringPositions");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( Hiring_PositionsRequest $request)
    {
        //
        try{

            $validated = $request->validated();
    
            Hiring_Positions::create([
                "name"=>$validated["name"],
                "type"=>$validated["type"],
                "positions"=>$validated["positions"],
                "location"=>$validated["location"],
                "link"=>$validated["link"],
                "is_active" => true,
                "divisi" =>$validated["divisi"],
            ]);
            Alert::toast('Posisi berhasil dibuat!', 'success')->autoClose(5000);
            return redirect()->back();
        }catch(\Exception $e){
            // Alert::error('Error', 'Terjadi kesalahan saat menyimpan data: ' . $e->getMessage());
            Alert::toast('Terjadi kesalahan saat menyimpan data: ' . $e->getMessage(), 'error')->autoClose(5000);
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $HiringPositions = Hiring_Positions::find($id);
        return view ("HiringPositionsGetdataById",['HiringPositions'=>$HiringPositions]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $Hiring_Positions = Hiring_Positions::find($id);
        return view("UpdateHiringPositions", ["Hiring_Positions"=>$Hiring_Positions]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Hiring_PositionsRequest $request, string $id)
    {
        //
        try{

            $HiringPositions = Hiring_Positions::find($id);
            $HiringPositions->name =$request->name;
            $HiringPositions->type = $request->type;
            $HiringPositions->positions = $request->positions;
            $HiringPositions->location = $request->location;
            $HiringPositions->link = $request->link;
            $HiringPositions->divisi = $request->divisi;
            $HiringPositions->save();
            // Alert::success('Success ', 'Data Berhasil Update');
            Alert::toast('Posisi berhasil diubah!', 'success')->autoClose(5000);
            return redirect("/dashboard/admin/positions");
        }catch(\Exception $e){
            // Alert::error('Error', 'Terjadi kesalahan saat Update data: ' . $e->getMessage());
            Alert::toast('Terjadi kesalahan saat mengubah data: ' . $e->getMessage(), 'error')->autoClose(5000);
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

            $HiringPositions = Hiring_Positions::find($id);
            if (!$HiringPositions) {
                throw new \Exception('Data tidak ditemukan.'); // Atau gunakan jenis Exception yang sesuai
            }
            $HiringPositions->delete();
            // Alert::success('Success ', 'Data Berhasil Delete');
            Alert::toast('Posisi berhasil dihapus!', 'success')->autoClose(5000);
            return redirect("/dashboard/admin/positions");
        }catch(\Exception $e){
            // Alert::error('Error', 'Terjadi kesalahan saat menghapus data: ' . $e->getMessage());
            Alert::toast('Terjadi kesalahan saat menghapus data: ' . $e->getMessage(), 'error')->autoClose(5000);
            return redirect("/dashboard/admin/positions");
        }
    }

    /**
     * Set activation status.
     */
    public function setActivation(string $id)
    {
        //
        try{

            $HiringPositions = Hiring_Positions::find($id);
            if (!$HiringPositions) {
                throw new \Exception('Data tidak ditemukan.'); // Atau gunakan jenis Exception yang sesuai
            }

            $HiringPositions->is_active = !($HiringPositions->is_active);
            $HiringPositions->save();

            if($HiringPositions->is_active){
                Alert::toast('Posisi berhasil diaktifkan!', 'success')->autoClose(5000);
            }else{
                Alert::toast('Posisi berhasil dinonaktfikan!', 'success')->autoClose(5000);
            }
            return redirect("/dashboard/admin/positions");
        }catch(\Exception $e){
            Alert::toast('Terjadi kesalahan saat menghapus data: ' . $e->getMessage(), 'error')->autoClose(5000);
            return redirect("/dashboard/admin/positions");
        }
    }
}