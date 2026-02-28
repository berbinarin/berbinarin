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
                                        <button type="button" onclick="openDeleteModal({{ $content->id }})" class="inline-flex items-center justify-start rounded p-2 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2" style="background-color: #ef4444">
                                            <i class="bx bxs-trash-alt text-white"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </section>
    
    <!-- Modal Konfirmasi Hapus -->
    <div id="deleteModal" class="fixed inset-0 z-10 hidden items-center justify-center bg-black bg-opacity-50 flex">
        <div class="w-full max-w-md rounded-lg bg-white p-6 text-center">
            <div class="mb-4 flex justify-center">
                <img src="{{ asset('assets/images/dashboard/svg-icon/warning.webp') }}" alt="Warning Icon" class="h-12 w-12" />
            </div>
            <h3 class="mb-2 text-lg font-medium leading-6 text-gray-900" id="modal-title">Konfirmasi Hapus</h3>
            <p class="mb-6 text-base text-gray-500">Apakah Anda yakin ingin menghapus kelas ini? Semua data terkait juga akan dihapus.</p>
            <div class="flex w-full justify-center gap-4">
                <form id="deleteForm" method="POST" class="w-1/2">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="rounded-lg bg-[#3986A3] w-full px-6 py-2 text-white text-center hover:bg-[#3986A3] focus:outline-none focus:ring-2 focus:ring-[#3986A3] focus:ring-offset-2">Hapus</button>
                </form>
                <button type="button" class="rounded-lg border border-[#3986A3] w-1/2 px-6 py-2 text-[#3986A3] focus:outline-none focus:ring-2 focus:ring-[#3986A3] focus:ring-offset-2" onclick="closeDeleteModal()">Batal</button>
            </div>
        </div>
    </div>
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

        function openDeleteModal(contentId) {
            deleteForm.action = `/dashboard/social-media-contents/${contentId}`;
            deleteModal.classList.remove('hidden');
        }

        function closeDeleteModal() {
            deleteModal.classList.add('hidden');
        }
    </script>
@endsection
