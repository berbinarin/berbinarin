<div x-data="{ tab: 'subtes-a' }">
    <ul class="flex items-center gap-7 font-bold text-lg">
        <li>
            <button :class="tab === 'subtes-a' ? 'pb-2 border-b-2 border-blue-300 text-primary-alt' : 'text-gray-700 pb-2'"
                @click="tab = 'subtes-a'">
                Subtes A
            </button>
        </li>
        <li>
            <button :class="tab === 'subtes-b' ? 'pb-2 border-b-2 border-blue-300 text-primary-alt' : 'text-gray-700 pb-2'"
                @click="tab = 'subtes-b'">
                Subtes B
            </button>
        </li>
        <li>
            <button :class="tab === 'subtes-c' ? 'pb-2 border-b-2 border-blue-300 text-primary-alt' : 'text-gray-700 pb-2'"
                @click="tab = 'subtes-c'">
                Subtes C
            </button>
        </li>
        <li>
            <button :class="tab === 'subtes-d' ? 'pb-2 border-b-2 border-blue-300 text-primary-alt' : 'text-gray-700 pb-2'"
                @click="tab = 'subtes-d'">
                Subtes D
            </button>
        </li>
        <li>
            <button :class="tab === 'subtes-e' ? 'pb-2 border-b-2 border-blue-300 text-primary-alt' : 'text-gray-700 pb-2'"
                @click="tab = 'subtes-e'">
                Subtes E
            </button>
        </li>
    </ul>
    <div x-show="tab === 'subtes-a'" class="pt-2">
        @include('moduls.dashboard.psikotes-paid.tools.rmib.subtes.subtes-a')
    </div>

    <div x-show="tab === 'subtes-b'" class="pt-2">
        @include('moduls.dashboard.psikotes-paid.tools.rmib.subtes.subtes-b')
    </div>

    <div x-show="tab === 'subtes-c'" class="pt-2">
        @include('moduls.dashboard.psikotes-paid.tools.rmib.subtes.subtes-c')
    </div>

    <div x-show="tab === 'subtes-d'" class="pt-2">
        @include('moduls.dashboard.psikotes-paid.tools.rmib.subtes.subtes-d')
    </div>

    <div x-show="tab === 'subtes-e'" class="pt-2">
        @include('moduls.dashboard.psikotes-paid.tools.rmib.subtes.subtes-e')
    </div>
</div>