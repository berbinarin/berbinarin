<?php

namespace App\Http\Controllers\KeluargaBerbinarin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KeluargaBerbinar\TableStaff;
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
        $year = \Carbon\Carbon::parse($staff['date_start'])->format('Y');

        if (!isset($divisionsPerYear[$year])) {
            $divisionsPerYear[$year] = [];
        }

        $existingDivisionKey = array_search(
            $staff['division'] ?? null,
            array_column($divisionsPerYear[$year], 'division')
        );

        if ($existingDivisionKey === false) {
            $divisionsPerYear[$year][] = [
                'division' => $staff['division'] ?? '-',
                'subdivision' => !empty($staff['subdivision']) ? [$staff['subdivision']] : []
            ];
        } else {
            if (!empty($staff['subdivision']) && !in_array($staff['subdivision'], $divisionsPerYear[$year][$existingDivisionKey]['subdivision'])) {
                $divisionsPerYear[$year][$existingDivisionKey]['subdivision'][] = $staff['subdivision'];
            }
        }
    }

    foreach ($divisionsPerYear as &$divisions) {
        usort($divisions, fn($a, $b) => strcmp($a['division'], $b['division']));
    }

    ksort($divisionsPerYear);

    return $divisionsPerYear;
}

    //Fungsi untuk menampilkan data keluarga berbinar
    public function keluarga_berbinar(Request $request)
    {
        // Fetch data dari database dengan records
        $data = TableStaff::with(['records.division', 'records.subDivision'])->get()->map(function ($staff) {
            $latestRecord = $staff->records->sortByDesc('date_start')->first();
        
            $isActive = $staff->records->contains(function ($record) {
                return $record->date_end === null || Carbon::parse($record->date_end)->greaterThanOrEqualTo(now());
            });
        
            return [
                'id' => $staff->id,
                'name' => $staff->name,
                'date_start' => $latestRecord ? Carbon::parse($latestRecord->date_start)->format('M Y') : null,
                'status' => $isActive,
                'linkedin' => $staff->linkedin,
                'photo' => $staff->photo,
                'motm' => $staff->motm,
                'division' => $latestRecord && $latestRecord->division ? $latestRecord->division->nama_divisi : '-',
                'subdivision' => $latestRecord && $latestRecord->subDivision ? $latestRecord->subDivision->nama_subdivisi : '-',
                'records' => $staff->records->map(function ($record) {
                    return [
                        'division' => $record->division->nama_divisi ?? '-',
                        'subdivision' => $record->subDivision->nama_subdivisi ?? '-',
                        'date_start' => Carbon::parse($record->date_start)->format('M Y'),
                        'date_end' => $record->date_end ? Carbon::parse($record->date_end)->format('M Y') : 'Sekarang',
                    ];
                })->toArray()
            ];
        })->toArray();

        $availableYears = collect($data)
            ->map(fn($staff) => $staff['date_start'] ? Carbon::parse($staff['date_start'])->format('Y') : null)
            ->filter()
            ->unique()
            ->sort()
            ->values()
            ->all();

        $availableDivision = $this->getAvailableDivisionsPerYear($data);

        return view('moduls.landing-new.keluarga-berbinar')->with([
            'listStaff' => $data,
            'availableYears' => $availableYears,
            'availableDivision' => $availableDivision,
        ]);
    }
}
