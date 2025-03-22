<div>
    <h1 class="text-3xl font-bold text-primary-alt">Riwayat Jabatan</h1>
    <div class="pt-5 flex flex-col gap-10">
        @foreach($records as $record)
            <div>
                <div class="flex items-center gap-3">
                    <p class="text-lg text-blue-400 font-bold">{{ $record->division }} - {{ $record->subdivision ?? '-' }}</p>
                    <span class="py-1 px-2 {{ \Carbon\Carbon::parse($record->date_end)->isFuture() ? 'bg-green-400' : 'bg-red-400' }} text-xs rounded-lg text-white">
                        {{ \Carbon\Carbon::parse($record->date_end)->isFuture() ? 'Aktif' : 'Tidak Aktif' }}
                    </span>
                </div>
                <ul class="font-semibold pt-5 grid grid-cols-3 gap-x-10 gap-y-5">
                    <li>
                        <p class="text-gray-400">Divisi</p>
                        <p class="text-black">{{ $record->division }}</p>
                    </li>
                    <li>
                        <p class="text-gray-400">Sub Divisi</p>
                        <p class="text-black">{{ $record->subdivision ?? '-' }}</p>
                    </li>
                    <li>
                        <p class="text-gray-400">Awal Menjabat</p>
                        <p class="text-black">{{ \Carbon\Carbon::parse($record->date_start)->format('d-m-Y') }}</p>
                    </li>
                    <li>
                        <p class="text-gray-400">Akhir Menjabat</p>
                        <p class="text-black">{{ \Carbon\Carbon::parse($record->date_end)->format('d-m-Y') }}</p>
                    </li>
                </ul>
            </div>
        @endforeach
    </div>
</div>