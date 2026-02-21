@extends(
    "dashboard.layouts.app",
    [
        "title" => "Sosial Media Creator",
        "active" => "Dashboard",
    ]
)

@section("content")
    <section class="flex w-full">
        <div class="flex w-full flex-col">
            <div class="px-4 py-4 md:px-8 md:pb-7 md:pt-12 xl:px-10">
                <div class="-ml-10">
                    <div class="flex flex-row gap-2">
                        <p tabindex="0" class="mb-2 text-base font-bold leading-normal text-black focus:outline-none md:text-lg lg:text-xl xl:text-3xl">Sosial Media Creator Data</p>
                    </div>
                    <p class="lg:text-md w-full text-xs text-disabled sm:text-xs md:text-sm xl:text-base">Halaman yang menampilkan dan mengelola data pendaftar sosial media creator.</p>

                    <a href="{{ route('dashboard.social-media-contents.create') }}" type="button" class="mt-8 inline-flex items-start justify-start rounded-md bg-primary px-4 py-2 text-white hover:bg-primary focus:outline-none focus:ring-2 focus:ring-offset-2 sm:mt-3">
                        <p class="text-dark text-xs font-medium leading-none xl:text-sm">Tambah Data</p>
                    </a>
                </div>
            </div>

            <div class="rounded-md bg-white px-4 py-4 drop-shadow-lg md:px-8 md:py-7 xl:px-10">
                <div class="mt-4 overflow-x-auto">
                    <table id="example" class="min-w-full border-collapse">
                        <thead class="bg-none">
                            <tr class="text-center">
                                <th class="md:text-md px-2 py-3 text-xs sm:text-sm lg:text-base">No</th>
                                <th class="md:text-md px-2 py-3 text-xs sm:text-sm lg:text-base">Judul Konten</th>
                                <th class="md:text-md px-2 py-3 text-xs sm:text-sm lg:text-base">Platform</th>
                                <th class="md:text-md px-2 py-3 text-xs sm:text-sm lg:text-base">Link</th>
                                <th class="md:text-md px-2 py-3 text-xs sm:text-sm lg:text-base">Posisi</th>
                                <th class="md:text-md px-2 py-3 text-xs sm:text-sm lg:text-base">Status</th>
                                <th class="md:text-md px-2 py-3 text-xs sm:text-sm lg:text-base">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 text-gray-700">
                            @foreach ($contents as $content)
                                <tr class="text-md transition hover:bg-gray-50 lg:text-base">
                                    <td class="py-3 text-center">{{ $loop->iteration }}</td>
                                    <td class="text-start">{{ $content->title }}</td>
                                    <td class="text-center">
                                        {{ in_array($content->platform, ['x', 'twitter']) ? 'X' : \Illuminate\Support\Str::ucfirst($content->platform) }}
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ $content->url }}" class="text-primary underline hover:opacity-80" target="_blank" rel="noopener noreferrer">
                                            {{ $content->url }}
                                        </a>
                                    </td>
                                    <td class="text-center">{{ $content->position }}</td>
                                    <td class="text-center">
                                        <div x-data="smcStatus('{{ $content->status }}', 'status-form-{{ $content->id }}')" class="relative inline-block text-left">
                                            <!-- Button -->
                                            <button
                                                @click="open = !open"
                                                type="button"
                                                :class="statusValue === 'active'
                                                ? 'bg-green-400 hover:bg-green-500 focus:ring-green-300'
                                                : 'bg-[#FF7563] hover:bg-red-500 focus:ring-red-300'"
                                                class="inline-flex items-center rounded-full px-4 py-2 font-semibold text-black transition focus:outline-none focus:ring-2 focus:ring-offset-2"
                                            >
                                                <span x-text="statusLabel"></span>
                                                <svg class="ml-2 h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                                </svg>
                                            </button>

                                            <!-- Dropdown -->
                                            <div x-show="open" @click.away="open = false" x-transition class="absolute right-0 z-10 mt-2 w-32 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5">
                                                <div class="py-1">
                                                    <button @click="setStatus('active')" class="block w-full px-4 py-2 text-left text-sm hover:bg-gray-100">Aktif</button>
                                                    <button @click="setStatus('inactive')" class="block w-full px-4 py-2 text-left text-sm hover:bg-gray-100">Nonaktif</button>
                                                </div>
                                            </div>
                                        </div>
                                        <form id="status-form-{{ $content->id }}" action="{{ route('dashboard.social-media-contents.status', $content->id) }}" method="POST" class="hidden">
                                            @csrf
                                            @method('PATCH')
                                            <input type="hidden" name="status" value="">
                                        </form>
                                    </td>

                                    <td class="flex justify-center gap-2">
                                        <a href="{{ route('dashboard.social-media-contents.edit', $content->id) }}" class="rounded bg-yellow-500 p-2 hover:bg-yellow-600"><i class="bx bx-edit text-white"></i></a>
                                        <form id="deleteForm{{ $content->id }}" action="{{ route('dashboard.social-media-contents.destroy', $content->id) }}" method="POST">
                                            @csrf
                                            @method("DELETE")
                                            <button type="button" onclick="confirmDelete({{ $content->id }})" class="rounded bg-red-500 p-2 hover:bg-red-600 focus:outline-none"><i class="bx bx-trash-alt text-white"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Modal Konfirmasi Hapus -->
                    <div id="confirmModal" class="fixed inset-0 z-50 flex hidden items-center justify-center bg-black/40">
                        <div
                            class="relative w-[560px] rounded-[20px] bg-white p-6 text-center font-plusJakartaSans shadow-lg"
                            style="
                                background:
                                    linear-gradient(to right, #74aabf, #3986a3) top/100% 6px no-repeat,
                                    white;
                                border-radius: 20px;
                                background-clip: padding-box, border-box;
                            "
                        >
                            <!-- Warning Icon -->
                            <img src="{{ asset("assets/images/dashboard/warning.webp") }}" alt="Warning Icon" class="mx-auto h-[83px] w-[83px]" />

                            <!-- Title -->
                            <h2 class="mt-4 text-2xl font-bold text-stone-900">Konfirmasi Batal</h2>

                            <!-- Message -->
                            <p class="mt-2 text-base font-medium text-black">Apakah Anda yakin ingin membatalkan penambahan data ini?</p>

                            <!-- Actions -->
                            <div class="mt-6 flex justify-center gap-3">
                                <button id="cancelCancel" class="rounded-lg border border-stone-300 px-6 py-2 text-stone-700">Tidak</button>
                                <button id="confirmCancel" class="rounded-[5px] bg-gradient-to-r from-[#74AABF] to-[#3986A3] px-6 py-2 font-medium text-white">Ya</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section("script")
    <script>
        function smcStatus(initialStatus, formId) {
            return {
                open: false,
                statusValue: initialStatus,
                get statusLabel() {
                    return this.statusValue === 'active' ? 'Aktif' : 'Nonaktif';
                },
                async setStatus(value) {
                    if (value === this.statusValue) {
                        this.open = false;
                        return;
                    }

                    const form = document.getElementById(formId);
                    const input = form.querySelector('input[name="status"]');
                    input.value = value;
                    form.submit();
                },
            };
        }

        let deleteModal = document.getElementById('deleteModal');
        let deleteForm = document.getElementById('deleteForm');

        function openDeleteModal(classId) {
            deleteForm.action = ``;
            deleteModal.classList.remove('hidden');
        }

        function closeDeleteModal() {
            deleteModal.classList.add('hidden');
        }
    </script>
@endsection
