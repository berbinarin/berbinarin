<?php

namespace App\Http\Controllers\Dashboard\HR;

use App\Http\Controllers\Controller;
use App\Http\Requests\Hiring_PositionsRequest;
use App\Models\Hiring_Positions;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PositionController extends Controller
{
    public function index()
    {
        $positions = Hiring_Positions::all();
        return view('dashboard.hr.positions.index', compact('positions'));
    }

    public function store(Hiring_PositionsRequest $request)
    {
        try {
            $validated = $request->validated();

            Hiring_Positions::create([
                "name" => $validated["name"],
                "type" => $validated["type"],
                "positions" => $validated["positions"],
                "location" => $validated["location"],
                // "link"=>$validated["link"],
                "is_active" => true,
                "divisi" => $validated["divisi"],
            ]);
            Alert::toast('Posisi berhasil dibuat!', 'success')->autoClose(5000);
            return redirect()->back();
        } catch (\Exception $e) {
            // Alert::error('Error', 'Terjadi kesalahan saat menyimpan data: ' . $e->getMessage());
            Alert::toast('Terjadi kesalahan saat menyimpan data: ' . $e->getMessage(), 'error')->autoClose(5000);
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $position = Hiring_Positions::find($id);
        return view('dashboard.hr.positions.edit', compact('position'));
    }

    public function update(Hiring_PositionsRequest $request, string $id)
    {
        try {
            $HiringPositions = Hiring_Positions::find($id);
            $HiringPositions->name = $request->name;
            $HiringPositions->type = $request->type;
            $HiringPositions->positions = $request->positions;
            $HiringPositions->location = $request->location;
            // $HiringPositions->link = $request->link;
            $HiringPositions->divisi = $request->divisi;
            $HiringPositions->save();
            // Alert::success('Success ', 'Data Berhasil Update');
            Alert::toast('Posisi berhasil diubah!', 'success')->autoClose(5000);
            return redirect()->route('dashboard.positions.index');
        } catch (\Exception $e) {
            // Alert::error('Error', 'Terjadi kesalahan saat Update data: ' . $e->getMessage());
            Alert::toast('Terjadi kesalahan saat mengubah data: ' . $e->getMessage(), 'error')->autoClose(5000);
            return redirect()->back();
        }
    }

    public function destroy(string $id)
    {
        //
        try {

            $HiringPositions = Hiring_Positions::find($id);
            if (!$HiringPositions) {
                throw new \Exception('Data tidak ditemukan.'); // Atau gunakan jenis Exception yang sesuai
            }
            $HiringPositions->delete();
            // Alert::success('Success ', 'Data Berhasil Delete');
            Alert::toast('Posisi berhasil dihapus!', 'success')->autoClose(5000);
            return redirect()->route('dashboard.positions.index');
        } catch (\Exception $e) {
            // Alert::error('Error', 'Terjadi kesalahan saat menghapus data: ' . $e->getMessage());
            Alert::toast('Terjadi kesalahan saat menghapus data: ' . $e->getMessage(), 'error')->autoClose(5000);
            return redirect("/dashboard/admin/positions");
        }
    }

    public function setActive(string $id)
    {
        try {
            $HiringPositions = Hiring_Positions::find($id);
            if (!$HiringPositions) {
                throw new \Exception('Data tidak ditemukan.'); // Atau gunakan jenis Exception yang sesuai
            }

            $HiringPositions->is_active = !($HiringPositions->is_active);
            $HiringPositions->save();

            if ($HiringPositions->is_active) {
                Alert::toast('Posisi berhasil diaktifkan!', 'success')->autoClose(5000);
            } else {
                Alert::toast('Posisi berhasil dinonaktfikan!', 'success')->autoClose(5000);
            }
            return redirect()->route('dashboard.positions.index');
        } catch (\Exception $e) {
            Alert::toast('Terjadi kesalahan saat menghapus data: ' . $e->getMessage(), 'error')->autoClose(5000);
            return redirect()->route('dashboard.positions.index');
        }
    }
}
