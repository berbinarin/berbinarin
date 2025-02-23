<?php

namespace App\Http\Controllers\KeluargaBerbinar;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\KeluargaBerbinar\DataJabatan;
use App\Models\KeluargaBerbinar\DataStaff;
use Illuminate\Support\Facades\Validator;

class DataStaffController extends Controller
{
    public function index()
    {
        $berbinarFamily = DataStaff::with('dataJabatan')->get();
        return view('moduls.dashboard.hr.berbinar-family.berbinarFamily', compact('berbinarFamily'));
    }

    public function create()
    {
        return view('data_staff.create');
    }

    // public function store(Request $request)
    // {
    //     $validated = $request->validate([
    //         'nama_lengkap' => 'required|string|min:5',
    //         'linkedin' => 'required|string',
    //         'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    //         'motm' => 'nullable|in:yes,no',
    //     ]);
    //     $validated['motm'] = $validated['motm'] ?? 'no';
    //     $imagePath = $request->file('foto')->store('public/images');

    //     DataStaff::create([
    //         'nama_lengkap' => $validated['nama_lengkap'],
    //         'linkedin' => $validated['linkedin'],
    //         'foto' => $imagePath,
    //         'motm' => $validated['motm'],
    //     ]);

    //     return redirect()->route('data_staff.index')->with('success', 'Data Staff Berhasil disimpan');
    // }

    public function edit($id)
    {
        $dataStaff = DataStaff::findOrFail($id);
        return view('data_staff.edit', compact('dataStaff'));
    }

    public function update(Request $request, $id)
    {
        $dataStaff = DataStaff::findOrFail($id);
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|min:5',
            'linkedin' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'motm' => 'required|in:yes,no',
        ]);

        if ($request->hasFile('foto')) {
            $imagePath = $request->file('foto')->store('public/images');
            $dataStaff->deleteImage();
            $validated['foto'] = $imagePath;
        }

        $dataStaff->update($validated);

        return redirect()->route('data_staff.index')->with('success', 'Data staff berhasil diperbarui');
    }

    public function destroy($id)
    {
        $dataStaff = DataStaff::findOrFail($id);
        $dataStaff->delete();
        return redirect()->route('data_staff.index')->with('success', 'Data staff berhasil dihapus');
    }
    public function showMotm()
    {
        $motmStaff = DataStaff::where('motm', 'yes')->get();
        return redirect()->route('data_staff.motm_view', ['motmStaff' => $motmStaff]);
    }

    // Saran bang gpt (Masih broken)

    public function store(Request $request)
    {
        // Ambil seluruh data dari request
        $data = $request->all();

        // Filter baris riwayat jabatan yang tidak terisi
        if (isset($data['riwayat_jabatan']) && is_array($data['riwayat_jabatan'])) {
            // Misalnya: hanya simpan baris yang memiliki nilai minimal di salah satu field utama,
            // atau bisa juga diharuskan semua field wajib terisi.
            $data['riwayat_jabatan'] = array_values(array_filter($data['riwayat_jabatan'], function ($jabatan) {
                // Misal: kita anggap baris valid jika field 'posisi', 'divisi', dan 'awal_menjabat' tidak kosong
                return !empty($jabatan['posisi']) && !empty($jabatan['divisi']) && !empty($jabatan['awal_menjabat']);
            }));
        }

        // Lakukan validasi dengan Validator::make
        $validator = Validator::make($data, [
            'nama_lengkap'                => 'required|string|min:5',
            'linkedin'                    => 'required|string',
            'foto'                        => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'motm'                        => 'nullable|in:yes,no',
            // Jika ada array riwayat_jabatan, pastikan isinya valid
            'riwayat_jabatan'             => 'nullable|array',
            'riwayat_jabatan.*.posisi'      => 'required|string|max:255',
            'riwayat_jabatan.*.divisi'      => 'required|string|max:255',
            'riwayat_jabatan.*.sub_divisi'  => 'nullable|string|max:255',
            'riwayat_jabatan.*.awal_menjabat' => 'required|date',
            'riwayat_jabatan.*.akhir_menjabat' => 'nullable|date|after_or_equal:riwayat_jabatan.*.awal_menjabat',
        ]);

        $validated = $validator->validate();

        // Set default jika 'motm' tidak ada
        $validated['motm'] = $validated['motm'] ?? 'no';

        // Upload foto jika ada
        if ($request->hasFile('foto')) {
            $imagePath = $request->file('foto')->store('public/images');
            $validated['foto'] = $imagePath;
        }

        // Simpan data staff
        $dataStaff = DataStaff::create([
            'nama_lengkap' => $validated['nama_lengkap'],
            'linkedin'     => $validated['linkedin'],
            'foto'         => $validated['foto'] ?? null,
            'motm'         => $validated['motm'],
        ]);
        // dd($validated['riwayat_jabatan']);
        
        // Simpan data riwayat jabatan jika ada
        if (!empty($validated['riwayat_jabatan'])) {
            $dataStaff->dataJabatan()->createMany($validated['riwayat_jabatan']);
        }

        return redirect()->route('data_staff.index')->with('success', 'Data Staff Berhasil disimpan');
    }

}
