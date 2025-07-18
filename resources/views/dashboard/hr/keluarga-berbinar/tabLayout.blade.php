<div x-data="{ tab: 'data-diri' }">
    <ul class="flex items-center gap-7 text-lg font-bold">
        <li>
            <button :class="tab === 'data-diri' ? 'pb-2 border-b-2 border-blue-300 text-primary-alt' : 'text-gray-700 pb-2'" @click="tab = 'data-diri'">Data Diri</button>
        </li>
        <li>
            <button :class="tab === 'riwayat-jabatan' ? 'pb-2 border-b-2 border-blue-300 text-primary-alt' : 'text-gray-700 pb-2'" @click="tab = 'riwayat-jabatan'">Riwayat Jabatan</button>
        </li>
    </ul>
    <!-- Konten Tab: Data Diri -->
    <div x-show="tab === 'data-diri'" class="pt-8">
        @include("dashboard.hr.keluarga-berbinar.data-detail.dataDiri", ["staff" => $staff])
    </div>

    <!-- Konten Tab: Riwayat Jabatan -->
    <div x-show="tab === 'riwayat-jabatan'" class="pt-8">
        @include("dashboard.hr.keluarga-berbinar.data-detail.riwayatJabatan", ["records" => $records])
    </div>
</div>
