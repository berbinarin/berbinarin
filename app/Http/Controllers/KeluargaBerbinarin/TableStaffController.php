<?php

namespace App\Http\Controllers\KeluargaBerbinarin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TableStaff;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class TableStaffController extends Controller
{
    //


    // Fungsi untuk mendapatkan division yang tersedia untuk setiap tahun
    function getAvailableDivisionsPerYear($data): array
    {
        $divisionsPerYear = [];

        foreach ($data as $staff) {
            // Ambil tahun dari date_start
            $year = \Carbon\Carbon::parse($staff['date_start'])->format('Y');

            // Inisialisasi array jika tahun belum ada
            if (!isset($divisionsPerYear[$year])) {
                $divisionsPerYear[$year] = [];
            }

            // Cek apakah division sudah ada di tahun tersebut
            $existingDivisionKey = array_search($staff['division'], array_column($divisionsPerYear[$year], 'division'));

            if ($existingDivisionKey === false) {
                // Jika division belum ada, tambahkan dengan subdivision kosong atau yang tersedia
                $divisionsPerYear[$year][] = [
                    'division' => $staff['division'],
                    'subdivision' => !empty($staff['subdivision']) ? [$staff['subdivision']] : []
                ];
            } else {
                // Jika division sudah ada dan subdivision tidak kosong, tambahkan jika belum ada
                if (!empty($staff['subdivision']) && !in_array($staff['subdivision'], $divisionsPerYear[$year][$existingDivisionKey]['subdivision'])) {
                    $divisionsPerYear[$year][$existingDivisionKey]['subdivision'][] = $staff['subdivision'];
                }
            }
        }

        // Urutkan division untuk setiap tahun
        foreach ($divisionsPerYear as &$divisions) {
            usort($divisions, fn($a, $b) => strcmp($a['division'], $b['division']));
        }

        // Urutkan berdasarkan tahun
        ksort($divisionsPerYear);

        return $divisionsPerYear;
    }

    //Fungsi untuk menampilkan data keluarga berbinar
    public function keluarga_berbinar(Request $request)
    {
        // Fetch data dari database dengan records
        $data = TableStaff::with('records')->get()->map(function ($staff) {
            // Ambil record terbaru berdasarkan date_start
            $latestRecord = $staff->records->sortByDesc('date_start')->first();

            // Tentukan status aktif berdasarkan apakah ada record yang masih berlaku
            $isActive = $staff->records->contains(function ($record) {
                return $record->date_end === null || Carbon::parse($record->date_end)->greaterThanOrEqualTo(now());
            });

            return [
                'id' => $staff->id, // Tambahkan ID Staff
                'name' => $staff->name,
                'date_start' => $latestRecord ? Carbon::parse($latestRecord->date_start)->format('M Y') : null, // Format bulan & tahun
                'status' => $isActive, // Status aktif atau tidak
                'linkedin' => $staff->linkedin, // Menambahkan LinkedIn
                'photo' => $staff->photo, // Menambahkan path foto
                'motm' => $staff->motm, // Menambahkan status MOTM

                // Ambil data dari record terbaru jika ada
                'division' => $latestRecord ? $latestRecord->division : null,
                'subdivision' => $latestRecord ? $latestRecord->subdivision : null,

                // Ambil semua records
                'records' => $staff->records->map(function ($record) {
                    return [
                        'division' => $record->division,
                        'subdivision' => $record->subdivision ?? '',
                        'date_start' => Carbon::parse($record->date_start)->format('M Y'),
                        'date_end' => $record->date_end ? Carbon::parse($record->date_end)->format('M Y') : 'Sekarang', // Jika null, berarti masih aktif
                    ];
                })->toArray()
            ];
        })->toArray();

        // Available years
        $availableYears = collect($data)
            ->map(fn($staff) => $staff['date_start'] ? Carbon::parse($staff['date_start'])->format('Y') : null)
            ->filter()
            ->unique()
            ->sort()
            ->values()
            ->all();

        // Available divisions per year
        $availableDivision = $this->getAvailableDivisionsPerYear($data);

        return view('moduls.landing-new.keluarga-berbinar')->with([
            'listStaff' => $data,
            'availableYears' => $availableYears,
            'availableDivision' => $availableDivision,
        ]);
    }
}
