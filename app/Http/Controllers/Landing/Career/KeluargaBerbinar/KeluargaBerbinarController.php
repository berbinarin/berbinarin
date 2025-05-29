<?php

namespace App\Http\Controllers\Landing\Career\KeluargaBerbinar;

use App\Http\Controllers\Controller;
use App\Models\KeluargaBerbinar\TableStaff;
use Illuminate\Support\Carbon;

class KeluargaBerbinarController extends Controller
{
        function getAvailableDivisionsPerYear($data): array
    {
        $divisionsPerYear = [];

        foreach ($data as $staff) {
            foreach ($staff['records'] as $record) {
                $startYear = Carbon::parse($record['date_start'])->year;
                $endYear = $record['date_end'] ? Carbon::parse($record['date_end'])->year : Carbon::now()->year;

                // Loop through all years in the range
                foreach (range($startYear, $endYear) as $year) {
                    if (!isset($divisionsPerYear[$year])) {
                        $divisionsPerYear[$year] = [];
                    }

                    $existingDivisionKey = array_search(
                        $record['division'] ?? null,
                        array_column($divisionsPerYear[$year], 'division')
                    );

                    if ($existingDivisionKey === false) {
                        $divisionsPerYear[$year][] = [
                            'division' => $record['division'] ?? '-',
                            'subdivision' => !empty($record['subdivision']) ? [$record['subdivision']] : []
                        ];
                    } else {
                        if (!empty($record['subdivision']) && !in_array($record['subdivision'], $divisionsPerYear[$year][$existingDivisionKey]['subdivision'])) {
                            $divisionsPerYear[$year][$existingDivisionKey]['subdivision'][] = $record['subdivision'];
                        }
                    }
                }
            }
        }

        // Sort division alphabetically in each year
        foreach ($divisionsPerYear as &$divisions) {
            usort($divisions, fn($a, $b) => strcmp($a['division'], $b['division']));
        }

        // Sort years ascending
        ksort($divisionsPerYear);

        return $divisionsPerYear;
    }


    public function index()
    {
        $data = TableStaff::with(['records.division', 'records.subDivision'])->get()->map(function ($staff) {
            // Tetap cari record terbaru buat tampilan utama
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
                'photo' => $staff->photo ? '/image/' . $staff->photo : '/assets/images/landing/keluarga-berbinar/dummy.png',
                'motm' => $staff->motm,
                'division' => $latestRecord && $latestRecord->division ? $latestRecord->division->nama_divisi : '-',
                'subdivision' => $latestRecord && $latestRecord->subDivision ? $latestRecord->subDivision->nama_subdivisi : '-',
                'records' => $staff->records->map(function ($record) {
                    return [
                        'division' => $record->division->nama_divisi ?? '-',
                        'subdivision' => $record->subDivision->nama_subdivisi ?? '-',
                        'date_start' => Carbon::parse($record->date_start)->format('M Y'),
                        'date_end' => $record->date_end ? Carbon::parse($record->date_end)->format('M Y') : 'Sekarang',
                        'year_start' => Carbon::parse($record->date_start)->year,
                        'year_end' => $record->date_end ? Carbon::parse($record->date_end)->year : null,
                    ];
                })->toArray(),
                'years' => $staff->records->flatMap(function ($record) {
                    $years = [Carbon::parse($record->date_start)->year];
                    if ($record->date_end) {
                        $years[] = Carbon::parse($record->date_end)->year;
                    }
                    return $years;
                })->unique()->values()->all(),
            ];
        })->toArray();

        // Ambil semua tahun unik dari records
        $availableYears = collect($data)
            ->flatMap(fn($staff) => $staff['years'])
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
