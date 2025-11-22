<div>
    <h1 class="text-3xl font-bold text-primary-alt">Riwayat Jabatan</h1>
    <div class="flex flex-col gap-10 pt-5">
        @foreach ($records as $record)
            <div>
                <div class="flex items-center gap-3">
                    <p class="text-lg font-bold text-blue-400">{{ $record->division?->nama_divisi ?? "-" }} - {{ $record->subDivision?->nama_subdivisi ?? "-" }}</p>

                    {{-- gunakan field status jika ada, fallback ke date_end --}}
                    @php
                        $statusLabel = $record->status ?? (\Carbon\Carbon::parse($record->date_end ?? now())->isFuture() ? 'active' : 'inactive');
                        $badgeClass = $statusLabel === 'active' ? 'bg-green-400' : 'bg-red-400';
                    @endphp

                    <span class="{{ $badgeClass }} rounded-lg px-2 py-1 text-xs text-white">
                        {{ ucfirst($statusLabel) }}
                    </span>
                </div>
                <ul class="grid grid-cols-3 gap-x-10 gap-y-5 pt-5 font-semibold">
                    <li>
                        <p class="text-gray-400">Divisi</p>
                        <p class="text-black">{{ $record->division?->nama_divisi ?? "-" }}</p>
                    </li>
                    <li>
                        <p class="text-gray-400">Sub Divisi</p>
                        <p class="text-black">{{ $record->subDivision?->nama_subdivisi ?? "-" }}</p>
                    </li>
                    <li>
                        <p class="text-gray-400">Awal Menjabat</p>
                        <p class="text-black">{{ \Carbon\Carbon::parse($record->date_start)->format("d-m-Y") }}</p>
                    </li>
                    <li>
                        <p class="text-gray-400">Akhir Menjabat</p>
                        <p class="text-black">{{ $record->date_end ? \Carbon\Carbon::parse($record->date_end)->format("d-m-Y") : '-' }}</p>
                    </li>
                    <li>
                        <p class="text-gray-400">Status</p>
                        <p class="text-black">{{ ucfirst($record->status ?? ($record->isActive() ? 'active' : 'inactive')) }}</p>
                    </li>
                </ul>
            </div>
        @endforeach
    </div>
</div>
