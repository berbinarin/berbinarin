<?php

namespace App\Http\Controllers\Dashboard\HR;

use App\Http\Controllers\Controller;
use App\Http\Requests\Hiring_PositionsRequest;
use App\Models\Hiring_Positions;
use App\Models\KeluargaBerbinar\Division;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class PositionController extends Controller
{
    public function index()
    {
        $positions = Hiring_Positions::all();
        return view('dashboard.hr.positions.index', compact('positions'));
    }

    public function create()
    {
        $divisions = Division::all();
        return view('dashboard.hr.positions.create', compact('divisions'));
    }

    public function store(Hiring_PositionsRequest $request)
    {
        try {
            $validated = $request->validated();

            // Menyimpan file Banner
            $bannerPath = $request->file('banner_path')->store('uploads/positions/banner', 'public');

            Hiring_Positions::create([
                "name" => $validated["name"],
                "type" => $validated["type"],
                "positions" => $validated["positions"],
                "location" => $validated["location"],
                "banner_path" => $bannerPath,
                "divisi" => $validated["divisi"],
                "is_active" => true,
            ]);
            return redirect()->route('dashboard.positions.index')->with([
                'alert'   => true,
                'type'    => 'success',
                'title'   => 'Berhasil!',
                'message' => 'Posisi Berhasil Dibuat',
                'icon'    => asset('assets/images/dashboard/success.png'),
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with([
                'alert'   => true,
                'type'    => 'error',
                'title'   => 'Gagal!',
                'message' => 'Terjadi kesalahan saat menyimpan data: ' . $e->getMessage(),
                'icon'    => asset('assets/images/dashboard/error.png'),
            ]);
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

            if ($request->hasFile('banner_path')) {
                if ($HiringPositions->banner_path) {
                    Storage::disk('public')->delete($HiringPositions->banner_path);
                }
                $HiringPositions->banner_path = $request->file('banner_path')->store('uploads/positions/banner', 'public');
            }

            $HiringPositions->name = $request->name;
            $HiringPositions->type = $request->type;
            $HiringPositions->positions = $request->positions;
            $HiringPositions->location = $request->location;
            $HiringPositions->divisi = $request->divisi;
            $HiringPositions->save();
            return redirect()->route('dashboard.positions.index')->with([
                'alert'   => true,
                'type'    => 'success',
                'title'   => 'Berhasil!',
                'message' => 'Posisi Berhasil Diubah',
                'icon'    => asset('assets/images/dashboard/success.png'),
            ]);
        } catch (\Exception $e) {
           return redirect()->back()->withInput()->with([
                'alert'   => true,
                'type'    => 'error',
                'title'   => 'Gagal!',
                'message' => 'Terjadi kesalahan saat mengubah data: ' . $e->getMessage(),
                'icon'    => asset('assets/images/dashboard/error.png'),
            ]);
        }
    }

    public function destroy(string $id)
    {
        try {
            $HiringPositions = Hiring_Positions::find($id);
            if (!$HiringPositions) {
                throw new \Exception('Data tidak ditemukan.');
            }

            if ($HiringPositions->banner_path) {
                Storage::disk('public')->delete($HiringPositions->banner_path);
            }

            $HiringPositions->delete();
            return redirect()->route('dashboard.positions.index')->with([
                'alert'   => true,
                'type'    => 'success',
                'title'   => 'Berhasil!',
                'message' => 'Data Berhasil Dihapus',
                'icon'    => asset('assets/images/dashboard/success.png'),
            ]);
        } catch (\Exception $e) {
            return redirect()->route('/dashboard/admin/positions')->with([
                'alert'   => true,
                'type'    => 'error',
                'title'   => 'Gagal!',
                'message' => 'Terjadi kesalahan saat menghapus data: ' . $e->getMessage(),
                'icon'    => asset('assets/images/dashboard/error.png'),
            ]);
        }
    }

    public function setActive(string $id)
    {
        try {
            $HiringPositions = Hiring_Positions::find($id);
            if (!$HiringPositions) {
                throw new \Exception('Data tidak ditemukan.');
            }

            $HiringPositions->is_active = !($HiringPositions->is_active);
            $HiringPositions->save();

            if ($HiringPositions->is_active) {
                return redirect()->back()->with([
                    'alert'   => true,
                    'type'    => 'success',
                    'title'   => 'Berhasil!',
                    'message' => 'Posisi berhasil diaktifkan!',
                    'icon'    => asset('assets/images/dashboard/success.png'),
                ]);
            } else {
                return redirect()->back()->with([
                    'alert'   => true,
                    'type'    => 'success',
                    'title'   => 'Berhasil!',
                    'message' => 'Posisi berhasil dinonaktifkan!',
                    'icon'    => asset('assets/images/dashboard/success.png'),
                ]);
            }

            return redirect()->route('dashboard.positions.index');
        } catch (\Exception $e) {
           return redirect()->route('dashboard.positions.index')->with([
                'alert'   => true,
                'type'    => 'error',
                'title'   => 'Gagal!',
                'message' => 'Terjadi kesalahan saat mengubah status aktif: ' . $e->getMessage(),
                'icon'    => asset('assets/images/dashboard/error.png'),
            ]);
        }
    }
}
