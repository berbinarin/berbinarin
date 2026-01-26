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
            
            // Apply italic helper to each division and subdivision
            foreach ($divisions as &$divisionData) {
                $divisionData['division'] = italic_en($divisionData['division']);
                if (!empty($divisionData['subdivision'])) {
                    $divisionData['subdivision'] = array_map('italic_en', $divisionData['subdivision']);
                }
            }
        }

        // Sort years ascending
        ksort($divisionsPerYear);

        return $divisionsPerYear;
    }

    public function index()
    {
        $data = TableStaff::with(['records.division', 'records.subDivision'])->get()->map(function ($staff) {
            $latestRecord = $staff->records->sortByDesc('date_start')->first();

            // Cek status: jika ADA record status 'inactive', maka alumni, jika tidak dan ada 'active', maka aktif
            $hasInactive = $staff->records->contains(function ($record) {
                return $record->status === 'inactive';
            });
            $isActive = $staff->records->contains(function ($record) {
                return $record->status === 'active';
            });

            // Proses records dengan helper italic_en
            $processedRecords = $staff->records->map(function ($record) use ($staff) {
                $isActive = $record->status === 'active';
                $isInactive = $record->status === 'inactive';

                // Jika status kosong/null, set alumni
                $status = $record->status ?: 'alumni';
                if ($isActive) $status = 'active';
                elseif ($isInactive) $status = 'alumni';

                return [
                    'division' => italic_en($record->division->nama_divisi ?? '-'),
                    'subdivision' => italic_en($record->subDivision->nama_subdivisi ?? '-'),
                    'date_start' => Carbon::parse($record->date_start)->format('M Y'),
                    'date_end' => $record->date_end ? Carbon::parse($record->date_end)->format('M Y') : 'Sekarang',
                    'year_start' => Carbon::parse($record->date_start)->year,
                    'year_end' => $record->date_end ? Carbon::parse($record->date_end)->year : null,
                    'status' => $status,
                ];
            })->toArray();

            return [
                'id' => $staff->id,
                'name' => $staff->name,
                'date_start' => $latestRecord ? Carbon::parse($latestRecord->date_start)->format('M Y') : null,
                'status' => $hasInactive ? 'alumni' : ($isActive ? 'active' : 'alumni'),
                'linkedin' => $staff->linkedin,
                'photo' => $staff->photo ? '/image/' . $staff->photo : '/assets/images/landing/keluarga-berbinar/dummy.webp',
                'motm' => $staff->motm,
                'division' => italic_en($latestRecord && $latestRecord->division ? $latestRecord->division->nama_divisi : '-'),
                'subdivision' => italic_en($latestRecord && $latestRecord->subDivision ? $latestRecord->subDivision->nama_subdivisi : '-'),
                'records' => $processedRecords,
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

        return view('landing.career.keluarga-berbinar.index')->with([
            'listStaff' => $data,
            'availableYears' => $availableYears,
            'availableDivision' => $availableDivision,
        ]);
    }
}